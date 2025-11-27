<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\ProductVariant;
use Illuminate\Http\Request;
use App\Exceptions\ProductInsufficientException;

class CartItemController extends Controller
{
       /**
     * @OA\Get(
     *     path="/api/cartItems/cart/{cartId}",
     *     summary="Get all cart items for a specific cart",
     *     tags={"CartItem"},
     *     @OA\Parameter(name="cartId", in="path", required=true, @OA\Schema(type="integer")),
     *     @OA\Response(
     *         response=200,
     *         description="List of cart items",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(
     *                 type="object",
     *                 @OA\Property(property="id", type="integer", example=1),
     *                 @OA\Property(property="cartId", type="integer", example=5),
     *                 @OA\Property(property="productVariantId", type="integer", example=10),
     *                 @OA\Property(property="quantity", type="integer", example=2),
     *                 @OA\Property(property="created_at", type="string", format="date-time"),
     *                 @OA\Property(property="updated_at", type="string", format="date-time")
     *             )
     *         )
     *     ),
     *     @OA\Response(response=404, description="Cart not found")
     * )
     */
    public function getAllCartItems($cartId){
        return CartItem::where("cart_id",$cartId)->get();
    }

 /**
 * @OA\Get(
 *     path="/api/cartItems/{cartItemId}",
 *     summary="Get a single cart item by ID",
 *     tags={"CartItem"},
 *     @OA\Parameter(
 *         name="cartItemId",
 *         in="path",
 *         description="ID of the cart item",
 *         required=true,
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Cart item retrieved successfully",
 *         @OA\JsonContent(
 *             type="object",
 *             @OA\Property(property="id", type="integer", example=1),
 *             @OA\Property(property="cartId", type="integer", example=5),
 *             @OA\Property(property="productVariantId", type="integer", example=10),
 *             @OA\Property(property="quantity", type="integer", example=2),
 *             @OA\Property(property="created_at", type="string", format="date-time", example="2025-11-13T12:00:00Z"),
 *             @OA\Property(property="updated_at", type="string", format="date-time", example="2025-11-13T12:05:00Z")
 *         )
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Cart item not found"
 *     )
 * )
 */

    public function getCartItem($cartItemId){
        return CartItem::find($cartItemId);
    }

    /**
 * @OA\Post(
 *     path="/api/cartItems",
 *     summary="Add a new cart item",
 *     tags={"CartItem"},
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             required={"quantity","cartId","productVariantId"},
 *             @OA\Property(property="quantity", type="integer", example=2),
 *             @OA\Property(property="cartId", type="integer", example=5),
 *             @OA\Property(property="productVariantId", type="integer", example=10)
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Cart item created successfully",
 *         @OA\JsonContent(
 *             type="object",
 *             @OA\Property(property="id", type="integer", example=1),
 *             @OA\Property(property="cartId", type="integer", example=5),
 *             @OA\Property(property="productVariantId", type="integer", example=10),
 *             @OA\Property(property="quantity", type="integer", example=2),
 *             @OA\Property(property="created_at", type="string", format="date-time", example="2025-11-13T12:00:00Z"),
 *             @OA\Property(property="updated_at", type="string", format="date-time", example="2025-11-13T12:05:00Z")
 *         )
 *     ),
 *     @OA\Response(response=404, description="Product variant not found"),
 *     @OA\Response(response=422, description="Validation error")
 * )
 */

    public function addCartItem(Request $request){
        $data=$request->validate([
            "quantity"=>"required",
            "cartId"=>"required",
            "productVariantId"=>"required"
        ]);
        $productVariant=ProductVariant::find($data["productVariantId"]);
        if(!$productVariant){
            return response()->json(["error"=>"product Variant does not exists"],404);
        }
        if($productVariant->stock<$data["quantity"]){
            throw new ProductInsufficientException();
        }
        $cartItem=CartItem::create([
            "quantity"=>$data['quantity'],
            "cartId"=>$data["cartId"],
            "productVariantId"=>$data["productVariantId"]
        ]);

        return response()->json($cartItem);
    }

   /**
 * @OA\Put(
 *     path="/api/cartItems/{cartItemId}",
 *     summary="Update an existing cart item",
 *     tags={"CartItem"},
 *     @OA\Parameter(
 *         name="cartItemId",
 *         in="path",
 *         description="ID of the cart item to update",
 *         required=true,
 *         @OA\Schema(type="integer", example=1)
 *     ),
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             required={"quantity","cartId","productVariantId"},
 *             @OA\Property(property="quantity", type="integer", example=3),
 *             @OA\Property(property="cartId", type="integer", example=5),
 *             @OA\Property(property="productVariantId", type="integer", example=10)
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Cart item updated successfully",
 *         @OA\JsonContent(
 *             type="object",
 *             @OA\Property(property="message", type="string", example="Cart item updated successfully"),
 *             @OA\Property(
 *                 property="cartItem",
 *                 type="object",
 *                 @OA\Property(property="id", type="integer", example=1),
 *                 @OA\Property(property="cartId", type="integer", example=5),
 *                 @OA\Property(property="productVariantId", type="integer", example=10),
 *                 @OA\Property(property="quantity", type="integer", example=3),
 *                 @OA\Property(property="created_at", type="string", format="date-time", example="2025-11-13T12:00:00Z"),
 *                 @OA\Property(property="updated_at", type="string", format="date-time", example="2025-11-13T12:05:00Z")
 *             )
 *         )
 *     ),
 *     @OA\Response(response=404, description="Cart item or product variant not found")
 * )
 */

    public function updateCartItem(Request $request, $cartItemId){
        $data=$request->validate([
            "quantity"=>"required",
            "cartId"=>"required",
            "productVariantId"=>"required"
        ]);
        $productVariant=ProductVariant::find($data["productVariantId"]);
        if(!$productVariant){
            return response()->json(["error"=>"product Variant does not exists"],404);
        }
        if($productVariant->stock<$data["quantity"]){
            throw new ProductInsufficientException();
        }
        $cartItem=CartItem::find($cartItemId);
        if(!$cartItem){
            return response()->json(["error"=>"CartItem does not exists"],404);
        }
        $cartItem->update($data);

        return response()->json([
            'message' => 'Cart item updated successfully',
            'cartItem' => $cartItem
        ]);
    }

    /**
     * @OA\Delete(
     *     path="/api/cartItems/{cartItemId}",
     *     summary="Delete a cart item",
     *     tags={"CartItem"},
     *     @OA\Parameter(
     *         name="cartItemId",
     *         in="path",
     *         description="ID of the cart item to delete",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=200, description="Cart item deleted successfully"),
     *     @OA\Response(response=404, description="Cart item not found")
     * )
     */
    public function deleteCartItem($cartItemId){
        $cartItem=CartItem::find($cartItemId);
        $cartItem->delete();
        return response()->json("cart Item deleted");
    }
}
