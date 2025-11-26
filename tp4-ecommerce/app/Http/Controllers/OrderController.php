<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Cart;
use App\Http\Resources\OrderResource;
use App\Http\Resources\OrderCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

/**
 * @OA\Tag(
 *     name="Orders",
 *     description="API Endpoints for Orders"
 * )
 */
class OrderController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/orders",
     *     summary="Get user's orders",
     *     tags={"Orders"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="data", type="array", @OA\Items(ref="#/components/schemas/Order")),
     *             @OA\Property(property="links", type="object"),
     *             @OA\Property(property="meta", type="object")
     *         )
     *     )
     * )
     */
    public function index()
    {
        try{
            $orders = Order::where('user_id', auth()->id())
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        if ($orders ->isEmpty()){

            
            return response()->json([
                'status' => 'succes',
                'data' => [],
                'message' => 'commande non trouvee',
                'code' => 200
            ],200);
        }
        return new OrderCollection($orders);

        }
        catch (\Exception $e){

            return response()->json(['status' => 'error', 'message' => 'Erreur serveur', 'code' => 500], 500);

        }

       
    }

    /**
     * @OA\Post(
     *     path="/api/orders",
     *     summary="Create a new order",
     *     tags={"Orders"},
     *     security={{"bearerAuth":{}}},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"customer_name", "customer_email", "customer_phone", "shipping_address", "shipping_city", "shipping_zipcode", "shipping_country", "payment_method"},
     *             @OA\Property(property="customer_name", type="string", example="John"),
     *             @OA\Property(property="customer_email", type="string", format="email", example="john@example.com"),
     *             @OA\Property(property="customer_phone", type="string", example="+1234567890"),
     *             @OA\Property(property="shipping_address", type="string", example="123 Main St"),
     *             @OA\Property(property="shipping_city", type="string", example="New York"),
     *             @OA\Property(property="shipping_zipcode", type="string", example="10001"),
     *             @OA\Property(property="shipping_country", type="string", example="USA"),
     *             @OA\Property(property="billing_address", type="string", example="123 Main St"),
     *             @OA\Property(property="billing_city", type="string", example="New York"),
     *             @OA\Property(property="billing_zipcode", type="string", example="10001"),
     *             @OA\Property(property="billing_country", type="string", example="USA"),
     *             @OA\Property(property="payment_method", type="string", example="credit_card"),
     *             @OA\Property(property="notes", type="string", example="Please deliver in the morning")
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Order created successfully",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string"),
     *             @OA\Property(property="order", ref="#/components/schemas/Order")
     *         )
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Validation error"
     *     )
     * )
     */
    public function store(Request $request)
    {
        $cart = $this->getCurrentCart($request);

        if (!$cart || $cart->items_count === 0) {
            return response()->json([
                'message' => 'Your cart is empty'
            ], 422);
        }

        $validated = $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email',
            'customer_phone' => 'required|string|max:20',
            'shipping_address' => 'required|string',
            'shipping_city' => 'required|string',
            'shipping_zipcode' => 'required|string',
            'shipping_country' => 'required|string',
            'billing_address' => 'nullable|string',
            'billing_city' => 'nullable|string',
            'billing_zipcode' => 'nullable|string',
            'billing_country' => 'nullable|string',
            'payment_method' => 'required|string',
            'notes' => 'nullable|string',
        ]);

        foreach ($cart->items as $item) {
            if ($item->quantity > $item->product->stock) {
                return response()->json([
                    'message' => "Product {$item->product->name} does not have enough stock"
                ], 422);
            }
        }

        try {
            DB::beginTransaction();

            $order = Order::create([
                'order_number' => 'ORD-' . date('Ymd') . '-' . Str::random(6),
                'status' => 'pending',
                'subtotal' => $cart->total,
                'shipping' => 0,
                'tax' => 0,
                'total' => $cart->total,
                'user_id' => auth()->id(),
                'customer_email' => $validated['customer_email'],
                'customer_name' => $validated['customer_name'],
                'customer_phone' => $validated['customer_phone'],
                'shipping_address' => $validated['shipping_address'],
                'shipping_city' => $validated['shipping_city'],
                'shipping_zipcode' => $validated['shipping_zipcode'],
                'shipping_country' => $validated['shipping_country'],
                'billing_address' => $validated['billing_address'] ?? $validated['shipping_address'],
                'billing_city' => $validated['billing_city'] ?? $validated['shipping_city'],
                'billing_zipcode' => $validated['billing_zipcode'] ?? $validated['shipping_zipcode'],
                'billing_country' => $validated['billing_country'] ?? $validated['shipping_country'],
                'payment_method' => $validated['payment_method'],
                'notes' => $validated['notes'] ?? null,
            ]);

            foreach ($cart->items as $cartItem) {
                $order->items()->create([
                    'product_id' => $cartItem->product_id,
                    'quantity' => $cartItem->quantity,
                    'unit_price' => $cartItem->unit_price,
                    'total' => $cartItem->total,
                    'product_name' => $cartItem->product->name,
                    'product_sku' => $cartItem->product->sku,
                ]);

                $cartItem->product->decrement('stock', $cartItem->quantity);
            }

            $cart->items()->delete();
            $this->updateCartTotals($cart);

            DB::commit();

            $order->load('items.product');

            return response()->json([
                'message' => 'Order created successfully',
                'order' => new OrderResource($order)
            ], 201);

        } catch (\Exception $e) {
            DB::rollBack();
            
            return response()->json([
                'message' => 'Error creating order: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * @OA\Get(
     *     path="/api/orders/{id}",
     *     summary="Get order details",
     *     tags={"Orders"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="Order ID",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Order")
     *     ),
     *     @OA\Response(
     *         response=403,
     *         description="Unauthorized"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Order not found"
     *     )
     * )
     */
    public function show(Order $order)
    {
        if ($order->user_id !== auth()->id()) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $order->load('items.product');

        return new OrderResource($order);
    }

    private function getCurrentCart(Request $request)
    {
        if (auth()->check()) {
            return Cart::where('user_id', auth()->id())->first();
        }

        $sessionId = $request->header('X-Cart-Session') ?? $request->session()->get('cart_session_id');
        return Cart::where('session_id', $sessionId)->first();
    }

    private function updateCartTotals(Cart $cart)
    {
        $cart->load('items');
        
        $cart->update([
            'items_count' => $cart->items->sum('quantity'),
            'total' => $cart->items->sum('total')
        ]);
    }
}