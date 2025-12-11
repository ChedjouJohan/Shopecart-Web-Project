<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @OA\Schema(
 * schema="Order",
 * title="Order",
 * description="Modèle de données pour une commande client.",
 * @OA\Property(property="id", type="integer", format="int64", description="ID unique de la commande."),
 * @OA\Property(property="user_id", type="integer", format="int64", description="ID de l'utilisateur qui a passé la commande."),
 * @OA\Property(property="order_number", type="string", description="Numéro unique de la commande (ex: ORD-20251114-abcxyz)."),
 * @OA\Property(property="status", type="string", description="Statut de la commande (ex: pending, processing, shipped, completed).", enum={"pending", "processing", "shipped", "completed", "cancelled"}),
 * @OA\Property(property="subtotal", type="number", format="float", description="Sous-total des articles."),
 * @OA\Property(property="shipping", type="number", format="float", description="Frais de livraison."),
 * @OA\Property(property="tax", type="number", format="float", description="Taxes appliquées."),
 * @OA\Property(property="total", type="number", format="float", description="Prix total final de la commande."),
 * @OA\Property(property="customer_first_name", type="string", description="Prénom du client."),
 * @OA\Property(property="customer_last_name", type="string", description="Nom de famille du client."),
 * @OA\Property(property="customer_email", type="string", format="email", description="Email du client."),
 * @OA\Property(property="customer_phone", type="string", description="Téléphone du client."),
 * @OA\Property(property="shipping_address", type="string", description="Adresse de livraison."),
 * @OA\Property(property="shipping_city", type="string", description="Ville de livraison."),
 * @OA\Property(property="shipping_zipcode", type="string", description="Code postal de livraison."),
 * @OA\Property(property="shipping_country", type="string", description="Pays de livraison."),
 * @OA\Property(property="payment_method", type="string", description="Méthode de paiement utilisée."),
 * @OA\Property(
 * property="items",
 * type="array",
 * description="Articles inclus dans la commande (relation OrderItem).",
 * @OA\Items(ref="#/components/schemas/OrderItem")
 * ),
 * @OA\Property(property="created_at", type="string", format="date-time"),
 * @OA\Property(property="updated_at", type="string", format="date-time"),
 * example={
 * "id": 1,
 * "order_number": "ORD-20251114-ABCDEF",
 * "status": "pending",
 * "total": 125.00,
 * "customer_email": "jane.doe@example.com",
 * "shipping_city": "Paris",
 * "items": {}
 * }
 * )
 */
class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_number', 'status', 'subtotal', 'shipping', 'tax', 'discount', 'total',
        'user_id', 'customer_email', 'customer_name', 'customer_phone',
        'shipping_address', 'shipping_city', 'shipping_zipcode', 'shipping_country',
        'billing_address', 'billing_city', 'billing_zipcode', 'billing_country',
        'payment_method', 'payment_status', 'transaction_id', 'shipping_method', 'notes',
        'processed_at', 'completed_at', 'cancelled_at','delivery_user_id'
    ];

    protected $casts = [
        'subtotal' => 'decimal:2',
        'shipping' => 'decimal:2',
        'tax' => 'decimal:2',
        'discount' => 'decimal:2',
        'total' => 'decimal:2',
        'processed_at' => 'datetime',
        'completed_at' => 'datetime',
        'cancelled_at' => 'datetime',
    ];

    // Relations


    public function items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}