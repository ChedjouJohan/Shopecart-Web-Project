<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Builder; // Import de Builder pour le type hint

/**
 * @OA\Schema(
 * schema="User",
 * title="User",
 * description="Modèle de données pour un utilisateur",
 * @OA\Property(
 * property="id",
 * type="integer",
 * description="ID de l'utilisateur"
 * ),
 * @OA\Property(
 * property="name",
 * type="string",
 * description="Nom complet de l'utilisateur"
 * ),
 * @OA\Property(
 * property="email",
 * type="string",
 * format="email",
 * description="Adresse email unique"
 * ),
 * * @OA\Property(
 * property="phone",
 * type="string",
 * format="string",
 * description="Numero de telephone"
 * ),
 * * @OA\Property(
 * property="address",
 * type="string",
 * format="string",
 * description="Adresse"
 * ),
 * 
 * @OA\Property(
 * property="role",
 * type="string",
 * description="Rôle de l'utilisateur (ex: USER, ADMIN)",
 * enum={"USER", "ADMIN", "VENDOR", "CLIENT", "DELIVERY", "MANAGER", "SUPERVISOR"}
 * ),
 * @OA\Property(
 * property="created_at",
 * type="string",
 * format="date-time",
 * description="Date de création de l'utilisateur"
 * ),
 * @OA\Property(
 * property="updated_at",
 * type="string",
 * format="date-time",
 * description="Date de dernière mise à jour"
 * )
 * )
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // Définition des constantes de rôles
    const ROLE_ADMIN = 'ADMIN';
    const ROLE_VENDOR = 'VENDOR';
    const ROLE_CLIENT = 'CUSTOMER';
    const ROLE_DELIVERY = 'DELIVERY';
    const ROLE_MANAGER = 'MANAGER';
    const ROLE_SUPERVISOR = 'SUPERVISOR';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'phone',
        'address'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'role' => 'string',
    ];


    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    // public function notifications()
    // {
    //     return $this->hasMany(Notification::class);
    // }

    // Méthode utilitaire pour obtenir le panier actif
    public function cart()
    {
        return $this->carts()->latest()->first();
    }
     public function isAdmin(): bool
    {
        return $this->role === self::ROLE_ADMIN;
    }

    public function isVendor(): bool
    {
        return $this->role === self::ROLE_VENDOR;
    }

    public function isDelivery(): bool
    {
        return $this->role === self::ROLE_DELIVERY;
    }

    public function isClient(): bool
    {
        // Utilise la constante ROLE_CLIENT (CUSTOMER)
        return $this->role === self::ROLE_CLIENT; 
    }

    public function isSupervisor(): bool
    {
        return $this->role === self::ROLE_SUPERVISOR;
    }
    public function isManager(): bool
    {
        return $this->role === self::ROLE_MANAGER;
    }

    /**
     * Scope pour filtrer par rôle (méthode scope[NomDuScope])
     * @param Builder $query
     * @return Builder
     */
    public function scopeAdmins(Builder $query): Builder
    {
        return $query->where('role', self::ROLE_ADMIN);
    }

    public function scopeVendors(Builder $query): Builder
    {
        return $query->where('role', self::ROLE_VENDOR);
    }

    public function scopeDelivery(Builder $query): Builder
    {
        return $query->where('role', self::ROLE_DELIVERY);
    }

    public function scopeClients(Builder $query): Builder
    {
        // Utilise la constante ROLE_CLIENT (CUSTOMER)
        return $query->where('role', self::ROLE_CLIENT); 
    }
    
    // NOUVEAUX SCOPES AJOUTÉS
    public function scopeManagers(Builder $query): Builder
    {
        return $query->where('role', self::ROLE_MANAGER);
    }

    public function scopeSupervisors(Builder $query): Builder
    {
        return $query->where('role', self::ROLE_SUPERVISOR);
    }
}