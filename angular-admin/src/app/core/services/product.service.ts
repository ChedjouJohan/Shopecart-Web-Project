import { Injectable, inject } from '@angular/core';
import { HttpClient, HttpParams } from '@angular/common/http';
import { Observable } from 'rxjs';
import { environment } from '../../../environments/environment';
import {
  Product,
  ProductVariant,
  CreateProductRequest,
  UpdateProductRequest,
  CreateVariantRequest,
  PaginatedResponse,
  ApiResponse,
  VendorStats,
} from '../models/models';

@Injectable({
  providedIn: 'root',
})
export class ProductService {
  private readonly http = inject(HttpClient);
  private readonly apiUrl = `${environment.apiUrl}/products`;

  /**
   * Récupère la liste de tous les produits avec pagination et filtres
   */
  getAll(params?: {
    page?: number;
    per_page?: number;
    category_id?: number;
    search?: string;
    featured?: boolean;
  }): Observable<PaginatedResponse<Product>> {
    let httpParams = new HttpParams();

    if (params) {
      Object.keys(params).forEach((key) => {
        const value = (params as any)[key];
        if (value !== undefined && value !== null) {
          httpParams = httpParams.set(key, value.toString());
        }
      });
    }

    return this.http.get<PaginatedResponse<Product>>(this.apiUrl, { params: httpParams });
  }

  /**
   * Récupère un produit par son ID
   */
  getById(id: number): Observable<Product> {
    return this.http.get<Product>(`${this.apiUrl}/${id}`);
  }

  /**
   * Récupère les produits mis en avant
   */
  getFeatured(): Observable<Product[]> {
    return this.http.get<Product[]>(`${this.apiUrl}/featured`);
  }

  /**
   * Récupère les produits du vendor connecté
   */
  getMyProducts(params?: {
    page?: number;
    per_page?: number;
  }): Observable<PaginatedResponse<Product>> {
    let httpParams = new HttpParams();

    if (params) {
      Object.keys(params).forEach((key) => {
        const value = (params as any)[key];
        if (value !== undefined && value !== null) {
          httpParams = httpParams.set(key, value.toString());
        }
      });
    }

    return this.http.get<PaginatedResponse<Product>>(`${this.apiUrl}/vendor/my-products`, {
      params: httpParams,
    });
  }

  /**
   * Récupère les statistiques du vendor
   */
  getVendorStats(): Observable<ApiResponse<VendorStats>> {
    return this.http.get<ApiResponse<VendorStats>>(`${this.apiUrl}/vendor/stats`);
  }

  /**
   * Crée un nouveau produit
   */
  create(data: CreateProductRequest): Observable<ApiResponse<Product>> {
    return this.http.post<ApiResponse<Product>>(this.apiUrl, data);
  }

  /**
   * Met à jour un produit existant
   */
  update(id: number, data: UpdateProductRequest): Observable<ApiResponse<Product>> {
    return this.http.put<ApiResponse<Product>>(`${this.apiUrl}/${id}`, data);
  }

  /**
   * Supprime un produit
   */
  delete(id: number): Observable<ApiResponse<null>> {
    return this.http.delete<ApiResponse<null>>(`${this.apiUrl}/${id}`);
  }

  // --- GESTION DES VARIANTES ---

  /**
   * Récupère les variantes d'un produit
   */
  getVariants(productId: number): Observable<ProductVariant[]> {
    return this.http.get<ProductVariant[]>(`${this.apiUrl}/${productId}/variants`);
  }

  /**
   * Crée une nouvelle variante pour un produit
   */
  createVariant(
    productId: number,
    data: CreateVariantRequest
  ): Observable<ApiResponse<ProductVariant>> {
    return this.http.post<ApiResponse<ProductVariant>>(
      `${this.apiUrl}/${productId}/variants`,
      data
    );
  }

  /**
   * Met à jour une variante
   */
  updateVariant(
    variantId: number,
    data: Partial<CreateVariantRequest>
  ): Observable<ApiResponse<ProductVariant>> {
    return this.http.put<ApiResponse<ProductVariant>>(
      `${environment.apiUrl}/variants/${variantId}`,
      data
    );
  }

  /**
   * Supprime une variante
   */
  deleteVariant(variantId: number): Observable<ApiResponse<null>> {
    return this.http.delete<ApiResponse<null>>(`${environment.apiUrl}/variants/${variantId}`);
  }
}
