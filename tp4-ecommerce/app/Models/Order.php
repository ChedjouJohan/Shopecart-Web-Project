<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_number', 'status', 'subtotal', 'shipping', 'tax', 'discount', 'total',
        'user_id', 'customer_email', 'customer_name', 'customer_phone',
        'shipping_address', 'shipping_city', 'shipping_zipcode', 'shipping_country',
        'billing_address', 'billing_city', 'billing_zipcode', 'billing_country',
        'payment_method', 'payment_status', 'transaction_id', 'shipping_method', 'notes',
        'processed_at', 'completed_at', 'cancelled_at'
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
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    // Méthodes métier
    public function markAsProcessing(): void
    {
        $this->status = 'processing';
        $this->processed_at = now();
        $this->save();
    }

    public function markAsCompleted(): void
    {
        $this->status = 'completed';
        $this->completed_at = now();
        $this->save();
    }

    public function markAsCancelled(): void
    {
        $this->status = 'cancelled';
        $this->cancelled_at = now();
        $this->save();
    }

    // Accessors
    public function getCustomerFullNameAttribute(): string
    {
        return $this->customer_first_name . ' ' . $this->customer_last_name;
    }

    public function getFormattedTotalAttribute(): string
    {
        return number_format($this->total, 2, ',', ' ') . ' €';
    }
}