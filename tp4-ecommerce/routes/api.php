<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\PaymentController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Public routes
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/featured', [ProductController::class, 'featured']);
Route::get('/products/{product}', [ProductController::class, 'show']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{category}', [CategoryController::class, 'show']);

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
Route::prefix("payment")->group(
    function(){
        Route::post("/create-payment-intent/order/{orderId}",[PaymentController::class,"createPaymentIntentWithCardd"]);
        Route::post("/registerPayment",[PaymentController::class,"storePayment"]);

    }
);

// Protected routes
Route::middleware('auth:sanctum')->group(function () {
    // User
    Route::get('/user', [AuthController::class, 'user']);
    Route::post('/logout', [AuthController::class, 'logout']);

    // Cart
    Route::get('/cart', [CartController::class, 'show']);
    Route::post('/cart/add/{product}', [CartController::class, 'addItem']);
    Route::put('/cart/items/{cartItem}', [CartController::class, 'updateItem']);
    Route::delete('/cart/items/{cartItem}', [CartController::class, 'removeItem']);
    Route::delete('/cart/clear', [CartController::class, 'clear']);

    // Orders
    Route::get('/orders', [OrderController::class, 'index']);
    Route::post('/orders', [OrderController::class, 'store']);
    Route::get('/orders/{order}', [OrderController::class, 'show']);

     // === ROUTES ADMIN SEULEMENT ===
    Route::middleware('admin')->group(function () {
        // Gestion des utilisateurs (Admin seulement)
        Route::apiResource('users', UserController::class);
        Route::get('/users/roles/stats', [UserController::class, 'roleStats']);
        
        // Gestion des catégories (Admin seulement)
        Route::post('/categories', [CategoryController::class, 'store']);
        Route::put('/categories/{category}', [CategoryController::class, 'update']);
        Route::delete('/categories/{category}', [CategoryController::class, 'destroy']);
    });

    // === ROUTES ADMIN OU VENDEUR ===
    Route::middleware('admin_or_vendor')->group(function () {
        // Gestion des produits (Admin et Vendeurs)
        Route::post('/products', [ProductController::class, 'store']);
        Route::put('/products/{product}', [ProductController::class, 'update']);
        Route::delete('/products/{product}', [ProductController::class, 'destroy']);
        
        // Statistiques produits (Admin et Vendeurs)
        Route::get('/products/vendor/stats', [ProductController::class, 'vendorStats']);
    });

    // Routes accessibles à tous les rôles authentifiés mais avec restrictions dans les contrôleurs
    Route::get('/products/vendor/my-products', [ProductController::class, 'myProducts']);
});