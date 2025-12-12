<?php

namespace App\Http\Controllers;

use App\Models\ProductVariant;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class ProductVariantController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/products/{product}/variants",
     *     summary="Get all variants for a product",
     *     tags={"Product Variants"},
     *     @OA\Parameter(
     *         name="product",
     *         in="path",
     *         required=true,
     *         description="Product ID",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="List of product variants",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="status", type="string", example="success"),
     *             @OA\Property(
     *                 property="data",
     *                 type="array",
     *                 @OA\Items(ref="#/components/schemas/ProductVariant")
     *             ),
     *             @OA\Property(property="message", type="string", example="Variantes récupérées"),
     *             @OA\Property(property="code", type="integer", example=200)
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Product not found"
     *     )
     * )
     */
    public function index($productId)
    {
        try {
            $product = Product::findOrFail($productId);
            $variants = ProductVariant::where('productId', $productId) // CHANGÉ: productId
                ->get();
            
            return response()->json([
                'status' => 'success',
                'data' => $variants,
                'message' => 'Variantes récupérées',
                'code' => 200
            ], 200);
            
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Produit non trouvé',
                'code' => 404
            ], 404);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Erreur serveur: ' . $e->getMessage(),
                'code' => 500
            ], 500);
        }
    }

  /**
 * @OA\Post(
 *     path="/api/products/{product}/variants",
 *     summary="Create a new product variant",
 *     tags={"Product Variants"},
 *     security={{"bearerAuth":{}}},
 *     @OA\Parameter(
 *         name="product",
 *         in="path",
 *         required=true,
 *         description="Product ID",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             required={"name", "sku", "price", "stock", "color"},
 *             @OA\Property(
 *                 property="name",
 *                 type="string",
 *                 example="T-Shirt Rouge - L"
 *             ),
 *             @OA\Property(
 *                 property="sku",
 *                 type="string",
 *                 example="TSH-RED-L"
 *             ),
 *             @OA\Property(
 *                 property="price",
 *                 type="number",
 *                 format="float",
 *                 example=29.99
 *             ),
 *             @OA\Property(
 *                 property="stock",
 *                 type="integer",
 *                 example=50
 *             ),
 *             @OA\Property(
 *                 property="color",
 *                 type="string",
 *                 example="red"
 *             ),
 *             @OA\Property(
 *                 property="attributes",
 *                 type="object",
 *                 example={"color": "red", "size": "L"}
 *             )
 *         )
 *     ),
 *     @OA\Response(
 *         response=201,
 *         description="Variant created successfully",
 *         @OA\JsonContent(
 *             type="object",
 *             @OA\Property(property="status", type="string", example="success"),
 *             @OA\Property(property="data", ref="#/components/schemas/ProductVariant"),
 *             @OA\Property(property="message", type="string", example="Variante créée avec succès"),
 *             @OA\Property(property="code", type="integer", example=201)
 *         )
 *     ),
 *     @OA\Response(
 *         response=422,
 *         description="Validation error"
 *     )
 * )
 */
    public function store(Request $request, $productId)
    {
        try {
            $product = Product::findOrFail($productId);
            
            $request->validate([
                'name' => 'required|string|max:255',
                'sku' => [
                    'required',
                    'string',
                    'max:100',
                    Rule::unique('product_variants')->where(function ($query) use ($productId) {
                        return $query->where('productId', $productId); // CHANGÉ: productId
                    })
                ],
                'price' => 'required|numeric|min:0',
                'stock' => 'required|integer|min:0',
                'color' => 'required|string|max:50', // AJOUTÉ: color est requis
                'attributes' => 'nullable|array'
            ]);
            
            DB::beginTransaction();
            
            $variant = ProductVariant::create([
                'productId' => $productId, // CHANGÉ: productId
                'name' => $request->name,
                'sku' => $request->sku,
                'price' => $request->price,
                'stock' => $request->stock,
                'color' => $request->color, // AJOUTÉ
                'attributes' => $request->attributes ?? []
            ]);
            
            // Mettre à jour le stock du produit
            $totalStock = ProductVariant::where('productId', $productId)->sum('stock'); // CHANGÉ: productId
            $product->update(['stock' => $totalStock]);
            
            DB::commit();
            
            return response()->json([
                'status' => 'success',
                'data' => $variant,
                'message' => 'Variante créée avec succès',
                'code' => 201
            ], 201);
            
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Erreur de validation',
                'errors' => $e->errors(),
                'code' => 422
            ], 422);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Produit non trouvé',
                'code' => 404
            ], 404);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => 'error',
                'message' => 'Erreur serveur: ' . $e->getMessage(),
                'code' => 500
            ], 500);
        }
    }

    /**
     * @OA\Get(
     *     path="/api/variants/{variant}",
     *     summary="Get a specific product variant",
     *     tags={"Product Variants"},
     *     @OA\Parameter(
     *         name="variant",
     *         in="path",
     *         required=true,
     *         description="Variant ID",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Variant details",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="status", type="string", example="success"),
     *             @OA\Property(property="data", ref="#/components/schemas/ProductVariant"),
     *             @OA\Property(property="message", type="string", example="Variante récupérée"),
     *             @OA\Property(property="code", type="integer", example=200)
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Variant not found"
     *     )
     * )
     */
    public function show($variantId)
    {
        try {
            $variant = ProductVariant::findOrFail($variantId);
            
            return response()->json([
                'status' => 'success',
                'data' => $variant,
                'message' => 'Variante récupérée',
                'code' => 200
            ], 200);
            
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Variante non trouvée',
                'code' => 404
            ], 404);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Erreur serveur: ' . $e->getMessage(),
                'code' => 500
            ], 500);
        }
    }

    /**
     * @OA\Put(
     *     path="/api/variants/{variant}",
     *     summary="Update a product variant",
     *     tags={"Product Variants"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="variant",
     *         in="path",
     *         required=true,
     *         description="Variant ID",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(property="name", type="string", example="T-Shirt Rouge - L"),
     *             @OA\Property(property="sku", type="string", example="TSH-RED-L"),
     *             @OA\Property(property="price", type="number", format="float", example=29.99),
     *             @OA\Property(property="stock", type="integer", example=50),
     *             @OA\Property(property="color", type="string", example="red"),
     *             @OA\Property(
     *                 property="attributes",
     *                 type="object",
     *                 example={"color": "red", "size": "L"}
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Variant updated successfully",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="status", type="string", example="success"),
     *             @OA\Property(property="data", ref="#/components/schemas/ProductVariant"),
     *             @OA\Property(property="message", type="string", example="Variante mise à jour"),
     *             @OA\Property(property="code", type="integer", example=200)
     *         )
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Validation error"
     *     )
     * )
     */
    public function update(Request $request, $variantId)
    {
        try {
            $variant = ProductVariant::findOrFail($variantId);
            
            $request->validate([
                'name' => 'sometimes|string|max:255',
                'sku' => [
                    'sometimes',
                    'string',
                    'max:100',
                    Rule::unique('product_variants')
                        ->ignore($variantId)
                        ->where(function ($query) use ($variant) {
                            return $query->where('productId', $variant->productId); // CHANGÉ: productId
                        })
                ],
                'price' => 'sometimes|numeric|min:0',
                'stock' => 'sometimes|integer|min:0',
                'color' => 'sometimes|string|max:50',
                'attributes' => 'sometimes|array'
            ]);
            
            DB::beginTransaction();
            
            $variant->update($request->only(['name', 'sku', 'price', 'stock', 'color', 'attributes']));
            
            // Mettre à jour le stock du produit parent
            $product = Product::find($variant->productId); // CHANGÉ: productId
            if ($product) {
                $totalStock = ProductVariant::where('productId', $variant->productId)->sum('stock'); // CHANGÉ
                $product->update(['stock' => $totalStock]);
            }
            
            DB::commit();
            
            return response()->json([
                'status' => 'success',
                'data' => $variant,
                'message' => 'Variante mise à jour',
                'code' => 200
            ], 200);
            
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Erreur de validation',
                'errors' => $e->errors(),
                'code' => 422
            ], 422);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Variante non trouvée',
                'code' => 404
            ], 404);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => 'error',
                'message' => 'Erreur serveur: ' . $e->getMessage(),
                'code' => 500
            ], 500);
        }
    }

    /**
     * @OA\Delete(
     *     path="/api/variants/{variant}",
     *     summary="Delete a product variant",
     *     tags={"Product Variants"},
     *     security={{"bearerAuth":{}}},
     *     @OA\Parameter(
     *         name="variant",
     *         in="path",
     *         required=true,
     *         description="Variant ID",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Variant deleted successfully",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="status", type="string", example="success"),
     *             @OA\Property(property="message", type="string", example="Variante supprimée"),
     *             @OA\Property(property="code", type="integer", example=200)
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Variant not found"
     *     )
     * )
     */
    public function destroy($variantId)
    {
        try {
            $variant = ProductVariant::findOrFail($variantId);
            
            DB::beginTransaction();
            
            $productId = $variant->productId; // CHANGÉ: productId
            $variant->delete();
            
            // Mettre à jour le stock du produit parent
            $product = Product::find($productId);
            if ($product) {
                $totalStock = ProductVariant::where('productId', $productId)->sum('stock'); // CHANGÉ
                $product->update(['stock' => $totalStock]);
            }
            
            DB::commit();
            
            return response()->json([
                'status' => 'success',
                'message' => 'Variante supprimée',
                'code' => 200
            ], 200);
            
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Variante non trouvée',
                'code' => 404
            ], 404);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => 'error',
                'message' => 'Erreur serveur: ' . $e->getMessage(),
                'code' => 500
            ], 500);
        }
    }
}  