<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Http\Resources\ProductResource;
use App\Http\Resources\ProductCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

/**
 * @OA\Tag(
 *     name="Product",
 *     description="API Endpoints for Products"
 * )
 * @OA\Schema(
 *     schema="ProductsForProduct",
 *     type="object",
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="name", type="string", example="iPhone 15 Pro"),
 *     @OA\Property(property="slug", type="string", example="iphone-15-pro"),
 *     @OA\Property(property="description", type="string", example="Latest iPhone with advanced features"),
 *     @OA\Property(property="price", type="number", format="float", example=999.99),
 *     @OA\Property(property="compare_price", type="number", format="float", example=1099.99),
 *     @OA\Property(property="stock", type="integer", example=50),
 *     @OA\Property(property="sku", type="string", example="IP15PRO256"),
 *     @OA\Property(property="is_visible", type="boolean", example=true),
 *     @OA\Property(property="is_featured", type="boolean", example=true),
 *     @OA\Property(property="image", type="string", example="products/iphone15.jpg"),
 *     @OA\Property(property="category_id", type="integer", example=1),
 *     @OA\Property(property="created_at", type="string", format="date-time"),
 *     @OA\Property(property="updated_at", type="string", format="date-time")
 * )
 * 
 * @OA\Schema(
 *     schema="CategoryForProduct",
 *     type="object",
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="name", type="string", example="Electronics"),
 *     @OA\Property(property="slug", type="string", example="electronics"),
 *     @OA\Property(property="description", type="string", example="Electronic devices and accessories"),
 *     @OA\Property(property="is_visible", type="boolean", example=true),
 *     @OA\Property(property="position", type="integer", example=1),
 *     @OA\Property(property="created_at", type="string", format="date-time"),
 *     @OA\Property(property="updated_at", type="string", format="date-time")
 * )
 * 
 * @OA\Schema(
 *     schema="CartForProduct",
 *     type="object",
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="total", type="number", format="float", example=199.98),
 *     @OA\Property(property="items_count", type="integer", example=2),
 *     @OA\Property(property="items", type="array", @OA\Items(ref="#/components/schemas/CartItem"))
 * )
 * 
 * @OA\Schema(
 *     schema="CartItemForProduct",
 *     type="object",
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="quantity", type="integer", example=2),
 *     @OA\Property(property="unit_price", type="number", format="float", example=99.99),
 *     @OA\Property(property="total", type="number", format="float", example=199.98),
 *     @OA\Property(property="product", ref="#/components/schemas/Product")
 * )
 * 
 * @OA\Schema(
 *     schema="OrderForProduct",
 *     type="object",
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="order_number", type="string", example="ORD-20231215-ABC123"),
 *     @OA\Property(property="status", type="string", example="pending"),
 *     @OA\Property(property="subtotal", type="number", format="float", example=199.98),
 *     @OA\Property(property="shipping", type="number", format="float", example=10.00),
 *     @OA\Property(property="tax", type="number", format="float", example=20.00),
 *     @OA\Property(property="total", type="number", format="float", example=229.98),
 *     @OA\Property(property="customer_email", type="string", example="john@example.com"),
 *     @OA\Property(property="customer_first_name", type="string", example="John"),
 *     @OA\Property(property="customer_last_name", type="string", example="Doe"),
 *     @OA\Property(property="shipping_address", type="string", example="123 Main St"),
 *     @OA\Property(property="shipping_city", type="string", example="New York"),
 *     @OA\Property(property="shipping_zipcode", type="string", example="10001"),
 *     @OA\Property(property="shipping_country", type="string", example="USA"),
 *     @OA\Property(property="created_at", type="string", format="date-time")
 * )
 */
class ProductController extends Controller
{

    function generateUniqueSlug($name)
    {

        $slug = Str::slug($name);
        $originalSlug = $slug;
        $count = 1;

        // boucle tant que le slug existe deja dans la table products
        while (Product::where('slug', $slug)->exists()){

            $slug = $originalSlug .'-'.$count;
            $count++;
        }
        return $slug;
    }
    /**
     * @OA\Get(
     * path="/api/products",
     * summary="Get a list of all visible products (Public Access)",
     * tags={"Products"},
     * @OA\Parameter(name="search", in="query", @OA\Schema(type="string"), description="Search term for product name/description."),
     * @OA\Parameter(name="category", in="query", @OA\Schema(type="integer"), description="Filter by category ID."),
     * @OA\Parameter(name="per_page", in="query", @OA\Schema(type="integer", default=10), description="Number of products per page."),
     * @OA\Response(
     * response=200,
     * description="Products retrieved successfully",
     * @OA\JsonContent(
     * type="object",
     * @OA\Property(property="message", type="string", example="Products retrieved successfully"),
     * @OA\Property(property="data", type="array", @OA\Items(ref="#/components/schemas/ProductsForProduct")),
     * @OA\Property(property="meta", type="object")
     * )
     * )
     * )
     */
    public function index(Request $request)
    {
        $query = Product::query();
        
        // 1. Filtrage par Visibilité
        // Seuls les produits visibles sont affichés au public
        $query->where('is_visible', true);
        
        // 2. Filtrage par Catégorie
        if ($request->has('category')) {
            $categoryId = $request->query('category');
            if (Category::where('id', $categoryId)->exists()) {
                $query->where('category_id', $categoryId);
            }
        }
        
        // 3. Recherche (par nom ou description)
        if ($request->has('search')) {
            $search = $request->query('search');
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
                  ->orWhere('description', 'like', '%' . $search . '%');
            });
        }
        
        // 4. Tri par défaut (peut être rendu dynamique)
        $query->orderBy('is_featured', 'desc') // Les produits mis en avant d'abord
              ->orderBy('updated_at', 'desc');

        // 5. Pagination
        $perPage = $request->get('per_page', 10);
        $products = $query->paginate($perPage);

        return response()->json([
            'message' => 'Products retrieved successfully',
            'data' => ProductResource::collection($products->items()),
            'meta' => [
                'total' => $products->total(),
                'per_page' => $products->perPage(),
                'current_page' => $products->currentPage(),
                'last_page' => $products->lastPage(),
            ]
        ], 200);
    }

    /**
     * @OA\Post(
     *     path="/api/products",
     *     summary="Create a new product",
     *     tags={"Products"},
     *     security={{"bearerAuth":{}}},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"name", "price", "stock", "category_id"},
     *             @OA\Property(property="name", type="string", example="New Product"),
     *             @OA\Property(property="description", type="string", example="Product description"),
     *             @OA\Property(property="price", type="number", format="float", example=99.99),
     *             @OA\Property(property="compare_price", type="number", format="float", example=129.99),
     *             @OA\Property(property="stock", type="integer", example=100),
     *             @OA\Property(property="sku", type="string", example="SKU12345"),
     *             @OA\Property(property="category_id", type="integer", example=1),
     *             @OA\Property(property="is_visible", type="boolean", example=true),
     *             @OA\Property(property="is_featured", type="boolean", example=false)
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Product created successfully",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Product created successfully"),
     *             @OA\Property(property="product", ref="#/components/schemas/Product")
     *         )
     *     ),
     *     @OA\Response(
     *         response=403,
     *         description="Access denied. Admin or Vendor role required."
     *     )
     * )
     */
    public function store(Request $request)
    {
        // Vérification supplémentaire dans le contrôleur (double sécurité)
        /** @var \App\Models\User $user */
        $user = auth()->user();
        if (!$user->isAdmin() && !$user->isVendor()) {
            return response()->json([
                'message' => 'Access denied. Admin or Vendor role required.'
            ], 403);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'compare_price' => 'nullable|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'sku' => 'nullable|string|unique:products,sku',
            'category_id' => 'required|exists:categories,id',
            'is_visible' => 'boolean',
            'is_featured' => 'boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Gestion de l'image (si présente)
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('products', 'public');
            $validated['image'] = $path;
        }
        // Les vendeurs ne peuvent créer que des produits visibles par défaut
        if ($user->isVendor()) {
            $validated['is_visible'] = true;

        }
        $validated['slug'] = $this->generateUniqueSlug($validated['name']);
        $product = Product::create($validated);

        return response()->json([
            'message' => 'Product created successfully',
            'data' => new ProductResource($product) // Utilisation de 'data'
        ], 201);
    }

    /**
     * @OA\Put(
     *     path="/api/products/{id}",
     *     summary="Update product",
     *     tags={"Products"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="Product ID",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"name", "price", "stock", "category_id"},
     *             @OA\Property(property="name", type="string", example="Updated Product Name"),
     *             @OA\Property(property="description", type="string", example="Updated description"),
     *             @OA\Property(property="price", type="number", format="float", example=89.99),
     *             @OA\Property(property="compare_price", type="number", format="float", example=119.99),
     *             @OA\Property(property="stock", type="integer", example=50),
     *             @OA\Property(property="sku", type="string", example="SKU12345-UPDATED"),
     *             @OA\Property(property="category_id", type="integer", example=1),
     *             @OA\Property(property="is_visible", type="boolean", example=true),
     *             @OA\Property(property="is_featured", type="boolean", example=true)
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Product updated successfully",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Product updated successfully"),
     *             @OA\Property(property="product", ref="#/components/schemas/Product")
     *         )
     *     ),
     *     @OA\Response(
     *         response=403,
     *         description="Access denied"
     *     )
     * )
     */
    public function update(Request $request, Product $product)
    {
        /** @var \App\Models\User $user */
        $user = auth()->user();
        
        // Les vendeurs ne peuvent modifier que leurs propres produits
        if ($user->isVendor()) {
            // Ici vous pourriez ajouter une logique pour vérifier la propriété du produit
            // Pour l'instant, on autorise tous les vendeurs à modifier tous les produits
           if (!$user || (!$user->isAdmin() && !$user->isVendor())) {
                return response()->json([
                    'message' => 'Access denied. Admin or Vendor role required.'
                ], 403);
            }
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'compare_price' => 'nullable|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'sku' => ['nullable', 'string', Rule::unique('products', 'sku')->ignore($product->id)],
            'category_id' => 'required|exists:categories,id',
            'is_visible' => 'boolean',
            'is_featured' => 'boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // 1. Suppression de l'ancienne image si demandée
        if ($request->boolean('remove_image') && $product->image) {
            Storage::disk('public')->delete($product->image);
            $validated['image'] = null;
        }

        // 2. Upload de la nouvelle image
        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image si elle existe
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $path = $request->file('image')->store('products', 'public');
            $validated['image'] = $path;
        }

        $product->update($validated);

        return response()->json([
            'message' => 'Product updated successfully',
            'product' => new ProductResource($product)
        ]);
    }

    /**
     * @OA\Delete(
     *     path="/api/products/{id}",
     *     summary="Delete product",
     *     tags={"Products"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="Product ID",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Product deleted successfully",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Product deleted successfully")
     *         )
     *     ),
     *     @OA\Response(
     *         response=403,
     *         description="Access denied"
     *     )
     * )
     */
    public function destroy(Product $product)
    {
        /** @var \App\Models\User $user */
        $user = auth()->user();
        
        if (!$user->isAdmin() && !$user->isVendor()) {
            return response()->json([
                'message' => 'Access denied. Admin or Vendor role required.'
            ], 403);
        }

        // Supprimer l'image si elle existe
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return response()->json([
            'message' => 'Product deleted successfully'
        ]);
    }

    /**
     * @OA\Get(
     * path="/api/products/vendor/my-products",
     * summary="Get vendor's products (Minimal Pagination)",
     * tags={"Products"},
     * security={{"bearerAuth":{}}},
     * @OA\Response(
     * response=200,
     * description="Vendor's products list",
     * @OA\JsonContent(
     * type="object",
     * @OA\Property(property="message", type="string", example="Products retrieved successfully"),
     * @OA\Property(property="data", type="array", @OA\Items(ref="#/components/schemas/ProductsForProduct")),
     * @OA\Property(property="total", type="integer", example=100),
     * @OA\Property(property="per_page", type="integer", example=12)
     * )
     * ),
     * @OA\Response(
     * response=403,
     * description="Access denied. Vendor role required."
     * )
     * )
     */
    public function myProducts(Request $request)
    {
        /** @var \App\Models\User $user */
        $user = auth()->user();
        
        if (!$user || (!$user->isVendor() && !$user->isAdmin())) {
            return response()->json([
                'message' => 'Access denied. Vendor or Admin role required.'
            ], 403);
        }

        // Ici vous pourriez filtrer par vendeur si vous ajoutez un champ vendor_id aux produits
        $products = Product::where('is_visible', true)
            ->orderBy('created_at', 'desc')
            ->paginate($request->get('per_page', 12));
        
        // Remplacement de ProductCollection pour un format de réponse minimal
        return response()->json([
            'message' => 'Products retrieved successfully',
            'data' => ProductResource::collection($products->items()),
            'total' => $products->total(),
            'per_page' => $products->perPage(),
            // Vous pouvez ajouter current_page, last_page si nécessaire, mais je les ai omis pour le "minimal"
        ]);
    }

    /**
     * @OA\Get(
     * path="/api/products/vendor/stats",
     * summary="Get vendor statistics (Admin/Vendor)",
     * tags={"Products"},
     * security={{"bearerAuth":{}}},
     * @OA\Response(
     * response=200,
     * description="Vendor statistics",
     * @OA\JsonContent(
     * type="object",
     * @OA\Property(property="message", type="string", example="Statistics retrieved successfully"),
     * @OA\Property(property="data", type="object",
     * @OA\Property(property="total_products", type="integer", example=50),
     * @OA\Property(property="visible_products", type="integer", example=45),
     * @OA\Property(property="featured_products", type="integer", example=10),
     * @OA\Property(property="out_of_stock", type="integer", example=5)
     * )
     * )
     * ),
     * @OA\Response(
     * response=403,
     * description="Access denied. Admin or Vendor role required."
     * )
     * )
     */
    public function vendorStats()
    {
        /** @var \App\Models\User $user */
        $user = auth()->user();
        
        if (!$user->isAdmin() && !$user->isVendor()) {
            return response()->json([
                'message' => 'Access denied. Admin or Vendor role required.'
            ], 403);
        }

        // Ici vous pourriez filtrer par vendeur si vous ajoutez un champ vendor_id aux produits
        $stats = [
            'total_products' => Product::count(),
            'visible_products' => Product::where('is_visible', true)->count(),
            'featured_products' => Product::where('is_featured', true)->count(),
            'out_of_stock' => Product::where('stock', 0)->count(),
        ];

        return response()->json([
            'message' => 'Statistics retrieved successfully',
            'data' => $stats
        ]);
    }
}