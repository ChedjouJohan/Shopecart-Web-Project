<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * @OA\Schema(
 * schema="CartItem",
 * title="CartItem",
 * description="Modèle de données pour un article dans un panier.",
 * @OA\Property(
 * property="product_id",
 * type="integer",
 * format="int64",
 * description="ID du produit."
 * ),
 * @OA\Property(
 * property="quantity",
 * type="integer",
 * description="Quantité de ce produit dans le panier."
 * ),
 * @OA\Property(
 * property="unit_price",
 * type="number",
 * format="float",
 * description="Prix unitaire au moment de l'ajout."
 * ),
 * example={
 * "product_id": 5,
 * "quantity": 2,
 * "unit_price": 24.99
 * }
 * )
 */
class CartItem extends Model
{
    use HasFactory;
    protected $fillable=[
        "quantity",
        "cartId",
        "productVariantId"
    ];
}
