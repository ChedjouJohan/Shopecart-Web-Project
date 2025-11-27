<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Http\Resources\Json\JsonResource as CartResource;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

/**
 * @OA\Tag(
 *     name="Cart",
 *     description="API Endpoints for Shopping Cart"
 * )
 */
class CartController extends Controller
{
    /**
     * @OA\Get(
     *     path="/cart",
     *     summary="Get user's cart",
     *     tags={"Cart"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(
     *             @OA\Property(property="data", ref="#/components/schemas/Cart")
     *         )
     *     )
     * )
     */
    public function show()
    {
    
     try{
            $carts = Cart::where('user_id', auth()->id())
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        if ($carts ->isEmpty()){

            
            return response()->json([
                'status' => 'succes',
                'data' => [],
                'message' => 'commande non trouvee',
                'code' => 200
            ],200);
        }
        return new CartResource($carts);

        }
        catch (\Exception $e){

            return response()->json(['status' => 'error', 'message' => 'Erreur serveur', 'code' => 500], 500);

        }

       
    }

    /**
     * @OA\Post(
     *     path="/api/cart/add",
     *     summary="CReate Cart",
     *     tags={"Cart"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Response(
     *         response=200,
     *         description="ICReate cart",
     *         @OA\JsonContent(
     *             @OA\Property(property="data", ref="#/components/schemas/Cart")
     *         )
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Validation error"
     *     )
     * )
     */
    public function addItem(Request $request)
    {
      
        $cart = $this->getOrCreateCart($request);
        $cart->load('items.product');
      
        return new CartResource($cart);
    }

    /**
     * @OA\Put(
     *     path="/api/cart/items/{cartItem}",
     *     summary="Update cart item quantity",
     *     tags={"Cart"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="cartItem",
     *         in="path",
     *         required=true,
     *         description="Cart Item ID",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"quantity"},
     *             @OA\Property(property="quantity", type="integer", example=2)
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Cart item updated",
     *         @OA\JsonContent(
     *             @OA\Property(property="data", ref="#/components/schemas/Cart")
     *         )
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Validation error"
     *     )
     * )
     */
    public function updateItem(Request $request, CartItem $cartItem)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1'
        ]);

        if ($request->quantity > $cartItem->product->stock) {
            return response()->json([
                'message' => 'Requested quantity not available in stock'
            ], 422);
        }

        $cartItem->update([
            'quantity' => $request->quantity,
            'total' => $cartItem->unit_price * $request->quantity
        ]);

        $this->updateCartTotals($cartItem->cart);
        $cartItem->cart->load('items.product');

        return new CartResource($cartItem->cart);
    }

    /**
     * @OA\Delete(
     *     path="/api/cart/items/{cartItem}",
     *     summary="Remove item from cart",
     *     tags={"Cart"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="cartItem",
     *         in="path",
     *         required=true,
     *         description="Cart Item ID",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Item removed from cart",
     *         @OA\JsonContent(
     *             @OA\Property(property="data", ref="#/components/schemas/Cart")
     *         )
     *     )
     * )
     */
    public function removeItem(CartItem $cartItem)
    {
        $cartItem->delete();
        $this->updateCartTotals($cartItem->cart);
        $cartItem->cart->load('items.product');

        return new CartResource($cartItem->cart);
    }

    /**
     * @OA\Delete(
     *     path="/api/cart/clear",
     *     summary="Clear the cart",
     *     tags={"Cart"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Response(
     *         response=200,
     *         description="Cart cleared successfully",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string"),
     *             @OA\Property(property="data", ref="#/components/schemas/Cart")
     *         )
     *     )
     * )
     */
    public function clear(Request $request)
    {
         $cart = $this->getOrCreateCart($request);
        $cart->items()->delete();
        $this->updateCartTotals($cart);

        return response()->json([
            'message' => 'Cart cleared successfully',
            'cart' => new CartResource($cart)
        ]);
    }

    private function getOrCreateCart(Request $request)
    {
        if (auth()->check()) {
            return Cart::firstOrCreate([
                'user_id' => auth()->id()
            ]);
        }

        $sessionId = $request->header('X-Cart-Session') ?? $request->session()->get('cart_session_id');
        
        if (!$sessionId) {
            $sessionId = Str::random(32);
            $request->session()->put('cart_session_id', $sessionId);
        }

        return Cart::firstOrCreate([
            'session_id' => $sessionId
        ]);
    }

    private function updateCartTotals(Cart $cart)
    {
        $cart->load('items');
        
        $cart->update([
            'items_count' => $cart->items->sum('quantity'),
            'total' => $cart->items->sum('total')
        ]);
    }

    // ... vos méthodes privées existantes
}