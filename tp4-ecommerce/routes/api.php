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
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// ==================== PUBLIC ROUTES ====================

// Auth routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Product & Category routes
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/featured', [ProductController::class, 'featured']);
Route::get('/products/{product}', [ProductController::class, 'show']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{category}', [CategoryController::class, 'show']);

// ==================== PROTECTED ROUTES ====================

// Auth routes 
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/logout', [AuthController::class, 'logout']);
        Route::get('/user', [AuthController::class, 'user']);

        
    });


Route::prefix("cart")->group(function(){
    Route::post("/abs",[CartController::class,"store"]);
    Route::get("/user/{userId}/empty",[CartController::class,"emptyCart"]);
});

Route::prefix("cartItems")->group(function(){
    //get cart items
    //add cart item
    //remove cart item
    //update cart item
    Route::get("/cart/{cartId}",[CartItemController::class,"getAllCartItems"]);
    Route::get("/{cartItemId}",[CartItemController::class,"getCartItem"]);
    Route::post("/",[CartItemController::class,"addCartItem"]);
    Route::put("/{cartItemId}",[CartItemController::class,"updateCartItem"]);
     Route::delete("/{cartItemId}",[CartItemController::class,"deleteCartItem"]);

});


// ========== PRODUCT VARIANTS ROUTES ==========
Route::prefix('products/{product}/variants')->group(function () {
    Route::get('/', [ProductVariantController::class, 'index']); // GET /api/products/{id}/variants
    Route::post('/', [ProductVariantController::class, 'store'])
        ->middleware(['auth:sanctum', 'admin_or_vendor']); // POST /api/products/{id}/variants
});

Route::prefix('variants')->group(function () {
    Route::get('/{variant}', [ProductVariantController::class, 'show']); // GET /api/variants/{id}
    Route::put('/{variant}', [ProductVariantController::class, 'update'])
        ->middleware(['auth:sanctum', 'admin_or_vendor']); // PUT /api/variants/{id}
    Route::delete('/{variant}', [ProductVariantController::class, 'destroy'])
        ->middleware(['auth:sanctum', 'admin_or_vendor']); // DELETE /api/variants/{id}
    Route::get('/search/by-sku/{sku}', [ProductVariantController::class, 'searchBySku']); // GET /api/variants/search/by-sku/{sku}
});


// --- NOUVELLES API LOGISTIQUE ---

Route::prefix("payment")->group(
    function(){
        Route::post("/create-payment-intent/order/{orderId}",[PaymentController::class,"createPaymentIntentWithCardd"]);
        Route::post("/registerPayment",[PaymentController::class,"storePayment"]);

    }
);

// Protected routes
Route::middleware('auth:sanctum')->group(function () {
    
    // ========== AUTH & USER ==========
    Route::get('/user', [AuthController::class, 'user']);
    Route::post('/logout', [AuthController::class, 'logout']);
    
    // ========== CART ROUTES ==========
    Route::prefix('cart')->group(function () {
        Route::get('/', [CartController::class, 'show']);                    // GET /api/cart
        Route::post('/', [CartController::class, 'store']);                  // POST /api/cart (créer/récupérer)
        Route::post('/add', [CartController::class, 'addItem']);             // POST /api/cart/add (ajouter article)
        Route::put('/items/{cartItem}', [CartController::class, 'updateItem']);  // PUT /api/cart/items/{id}
        Route::delete('/items/{cartItem}', [CartController::class, 'removeItem']); // DELETE /api/cart/items/{id}
        Route::delete('/clear', [CartController::class, 'clear']);           // DELETE /api/cart/clear
    });
    
    // ========== CART ITEMS (Legacy routes) ==========
    Route::prefix('cartItems')->group(function () {
        Route::get('/cart/{cartId}', [CartItemController::class, 'getAllCartItems']);
        Route::get('/{cartItemId}', [CartItemController::class, 'getCartItem']);
        Route::post('/', [CartItemController::class, 'addCartItem']);
        Route::put('/{cartItemId}', [CartItemController::class, 'updateCartItem']);
        Route::delete('/{cartItemId}', [CartItemController::class, 'deleteCartItem']);
    });
    
    // ========== ORDER ROUTES ==========
    Route::get('/orders', [OrderController::class, 'index']);
    Route::post('/orders', [OrderController::class, 'store']);
    Route::get('orders/my', [OrderController::class, 'myOrders']);
    Route::get('/orders/{order}', [OrderController::class, 'show']);
    
    // ========== PAYMENT ROUTES ==========
    Route::prefix('payment')->group(function () {
        Route::post('/create-payment-intent/order/{orderId}', [PaymentController::class, 'createPaymentIntentWithCardd']);
        Route::post('/registerPayment', [PaymentController::class, 'storePayment']);
    });
    
    // ========== PRODUCT ROUTES (Authenticated Users) ==========
    Route::get('/products/vendor/my-products', [ProductController::class, 'myProducts']);
    
    // ========== ADMIN ONLY ROUTES ==========
    Route::put('orders/{order}/status', [OrderController::class, 'updateStatus'])
    ->middleware(['auth:sanctum', 'role:ADMIN,MANAGER,SUPERVISOR']);

     // === ROUTES ADMIN SEULEMENT ===
    Route::middleware('admin')->group(function () {
        // User Management
        Route::apiResource('users', UserController::class);
        Route::get('/users/roles/stats', [UserController::class, 'roleStats']);
        
        // Category Management
        Route::post('/categories', [CategoryController::class, 'store']);
        Route::put('/categories/{category}', [CategoryController::class, 'update']);
        Route::delete('/categories/{category}', [CategoryController::class, 'destroy']);
    });
    
    // ========== ADMIN OR VENDOR ROUTES ==========

    // --- API DASHBOARD ET RAPPORTS (Réservé aux Rôles de Gestion) ---
    // Vous pouvez ajouter un middleware 'role:admin,manager,supervisor' ici si vous l'avez
    Route::prefix('dashboard')->controller(DashboardController::class)->group(function () {
        Route::get('kpis', 'getKpis');
        Route::get('sales-over-time', 'getSalesOverTime');
        Route::get('top-products', 'getTopProducts');
        Route::get('order-status-distribution', 'getOrderStatusDistribution');
    });

    Route::prefix('deliveries')->controller(DeliveryController::class)->group(function () {
        // Routes Administration (Angular)
        Route::get('pending', 'getPendingDeliveries');
        Route::post('{order}/assign', 'assignDelivery');

        // Routes Livreur (React Native)
        Route::get('my', 'getMyDeliveries');
        Route::put('{order}/status', 'updateStatus');
        
        // Géolocalisation (React Native)
        Route::post('location', 'updateLocation'); 

        // Suivi en temps réel (Angular)
        Route::get('live/map', 'getLiveLocations');

        // Preuve de livraison (React Native)
        Route::post('{order}/proof', 'uploadProof');
        Route::get('{order}/proof', 'getProof');

        // Notifications Push - Enregistrement du Token FCM
    Route::post('user/fcm-token', [UserController::class, 'updateFcmToken']);

    // Historique des Livraisons
    Route::get('deliveries/history', [DeliveryController::class, 'getDeliveryHistory']);
    });

    // === ROUTES ADMIN OU VENDEUR ===
    Route::middleware('admin_or_vendor')->group(function () {
        // Product Management
        Route::post('/products', [ProductController::class, 'store']);
        Route::put('/products/{product}', [ProductController::class, 'update']);
        Route::delete('/products/{product}', [ProductController::class, 'destroy']);
        
        // Vendor Stats
        Route::get('/products/vendor/stats', [ProductController::class, 'vendorStats']);
    });
});

// ==================== ROUTES EXTERNES ====================
// Ces routes étaient en dehors du groupe auth, je les ai réintégrées
Route::prefix("cart")->group(function(){
    Route::post("/abs", [CartController::class, "store"]);
    Route::get("/user/{userId}/empty", [CartController::class, "emptyCart"]);
});