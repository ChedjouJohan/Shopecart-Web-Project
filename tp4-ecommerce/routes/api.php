<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\ProductVariantController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DeliveryController;
use App\Http\Controllers\Api\DashboardController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Ces routes sont chargées par le RouteServiceProvider et sont assignées
| au groupe de middleware "api".
|
*/

// =======================================================
// 1. ROUTES PUBLIQUES & ACCESSIBLES À TOUS
// =======================================================

// --- AUTHENTIFICATION ---
// Les routes d'enregistrement et de connexion doivent toujours être publiques
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// --- PRODUITS & CATÉGORIES (Lecture publique) ---
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/featured', [ProductController::class, 'featured']);
Route::get('/products/{product}', [ProductController::class, 'show']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{category}', [CategoryController::class, 'show']);
Route::get('/categories/{category}/products', [CategoryController::class, 'products']);

// --- PANIER NON AUTHENTIFIÉ (Si supporté) ---
// Note: Ces routes sont souvent obsolètes ou fusionnées avec le panier authentifié.
Route::prefix("cart")->group(function(){
    // Exemple d'ajout/création de panier anonyme (abs) ou de vidage par ID utilisateur (userId)
    Route::post("/abs", [CartController::class, "store"]);
    Route::get("/user/{userId}/empty", [CartController::class, "emptyCart"]);
});


// =======================================================
// 2. ROUTES PROTÉGÉES (Requiert le middleware 'auth:sanctum')
// =======================================================

Route::middleware('auth:sanctum')->group(function () {
    
    // --- A. AUTHENTIFICATION & UTILISATEUR ---
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', [AuthController::class, 'user']);
    Route::post('user/fcm-token', [UserController::class, 'updateFcmToken']); // Notifications Push
    
    // --- B. PANIER & ARTICLES DE PANIER ---
    Route::prefix('cart')->group(function () {
        Route::get('/', [CartController::class, 'show']);                    // GET /api/cart
        Route::post('/', [CartController::class, 'store']);                  // POST /api/cart (créer/récupérer)
        Route::post('/add', [CartController::class, 'addItem']);             // POST /api/cart/add (ajouter article)
        Route::put('/items/{cartItem}', [CartController::class, 'updateItem']);  // PUT /api/cart/items/{id}
        Route::delete('/items/{cartItem}', [CartController::class, 'removeItem']); // DELETE /api/cart/items/{id}
        Route::delete('/clear', [CartController::class, 'clear']);           // DELETE /api/cart/clear
    });

    // --- C. COMMANDES & PAIEMENTS ---
    Route::get('/orders', [OrderController::class, 'index']);
    Route::post('/orders', [OrderController::class, 'store']); // Création de commande
    Route::get('orders/my', [OrderController::class, 'myOrders']);
    Route::get('/orders/{order}', [OrderController::class, 'show']);

    Route::prefix('payment')->group(function () {
        Route::post('/create-payment-intent/order/{orderId}', [PaymentController::class, 'createPaymentIntentWithCardd']);
        Route::post('/registerPayment', [PaymentController::class, 'storePayment']);
    });
    
    // --- D. LOGISTIQUE & LIVRAISON (CORRIGÉ : Toutes ces routes sont maintenant protégées) ---
    Route::prefix('deliveries')->controller(DeliveryController::class)->group(function () {
        
        // Routes Livreur (React Native)
        Route::get('my', 'getMyDeliveries');
        Route::get('history', 'getDeliveryHistory');
        Route::put('{order}/status', 'updateStatus');
        Route::post('location', 'updateLocation'); 
        Route::post('{order}/proof', 'uploadProof');
        Route::get('{order}/proof', 'getProof');
    });

    // --- E. TEST (Temporaire) ---
    Route::get('/test-auth', function (Request $request) {
        return response()->json([
            'message' => 'Auth Success',
            'user_id' => $request->user()->id,
            'user_role' => $request->user()->role,
        ]);
    });
});


// =======================================================
// 3. ROUTES À ACCÈS RESTREINT PAR RÔLE
// (Nécessite 'auth:sanctum' + middleware de rôle)
// =======================================================

// --- A. ADMIN / MANAGER / SUPERVISOR (Rôles de Gestion) ---
Route::middleware(['auth:sanctum', 'role:ADMIN,MANAGER,SUPERVISOR'])->group(function () {
    
    // Commandes (Mise à jour du statut par un rôle de gestion)
    Route::put('orders/{order}/status', [OrderController::class, 'updateStatus']);

    // Tableau de Bord (Dashboard)
    Route::prefix('dashboard')->controller(DashboardController::class)->group(function () {
        Route::get('kpis', 'getKpis');
        Route::get('sales-over-time', 'getSalesOverTime');
        Route::get('top-products', 'getTopProducts');
        Route::get('order-status-distribution', 'getOrderStatusDistribution');
    });

    // Logistique (Assignation, suivi carte)
    Route::prefix('deliveries')->controller(DeliveryController::class)->group(function () {
        Route::get('pending', 'getPendingDeliveries');
        Route::post('{order}/assign', 'assignDelivery');
        Route::get('live/map', 'getLiveLocations');
    });

    // Gestion des Utilisateurs (API Resource)
    Route::apiResource('users', UserController::class); // Index, Store, Show, Update, Destroy
    Route::get('/users/roles/stats', [UserController::class, 'roleStats']);
});


// --- B. ADMIN / VENDOR (Gestion des Produits/Variantes) ---
Route::middleware(['auth:sanctum', 'role:ADMIN,VENDOR'])->group(function () {
    
    // Gestion des Produits
    Route::get('/products/vendor/my-products', [ProductController::class, 'myProducts']);
    Route::post('products', [ProductController::class, 'store']);
    Route::put('/products/{product}', [ProductController::class, 'update']);
    Route::delete('/products/{product}', [ProductController::class, 'destroy']);
    Route::get('/products/vendor/stats', [ProductController::class, 'vendorStats']);

    // Gestion des Catégories (Souvent Admin/Manager seulement, ajusté selon votre logique)
    Route::post('/categories', [CategoryController::class, 'store']);
    Route::put('/categories/{category}', [CategoryController::class, 'update']);
    Route::delete('/categories/{category}', [CategoryController::class, 'destroy']);

    // Gestion des Variantes
    Route::prefix('products/{product}/variants')->group(function () {
        Route::post('/', [ProductVariantController::class, 'store']);
    });
    Route::prefix('variants')->group(function () {
        Route::put('/{variant}', [ProductVariantController::class, 'update']);
        Route::delete('/{variant}', [ProductVariantController::class, 'destroy']);
    });
});