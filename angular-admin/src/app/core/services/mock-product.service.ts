import { Injectable } from '@angular/core';
import { Observable, of, delay } from 'rxjs';
import {
  Product,
  PaginatedResponse,
  ApiResponse,
  CreateProductRequest,
  UpdateProductRequest,
} from '../models/models';

/**
 * Service mocké pour tester le frontend sans backend
 * Pour l'utiliser, remplacez ProductService par MockProductService dans app.config.ts
 */
@Injectable({
  providedIn: 'root',
})
export class MockProductService {
  // Données mockées
  private mockProducts: Product[] = [
    {
      id: 1,
      name: 'iPhone 15 Pro',
      slug: 'iphone-15-pro',
      description: 'Le dernier iPhone avec puce A17 Pro',
      price: 1199.99,
      compare_price: 1299.99,
      stock: 50,
      sku: 'IP15PRO256',
      is_visible: true,
      is_featured: true,
      image: 'https://via.placeholder.com/300x300?text=iPhone+15+Pro',
      category_id: 1,
      created_at: new Date().toISOString(),
      updated_at: new Date().toISOString(),
    },
    {
      id: 2,
      name: 'MacBook Pro M3',
      slug: 'macbook-pro-m3',
      description: 'MacBook Pro avec puce M3 ultra-rapide',
      price: 2499.99,
      stock: 30,
      sku: 'MBP14M3',
      is_visible: true,
      is_featured: true,
      image: 'https://via.placeholder.com/300x300?text=MacBook+Pro',
      category_id: 2,
      created_at: new Date().toISOString(),
      updated_at: new Date().toISOString(),
    },
    {
      id: 3,
      name: 'AirPods Pro 2',
      slug: 'airpods-pro-2',
      description: 'Écouteurs sans fil avec réduction de bruit active',
      price: 279.99,
      stock: 100,
      sku: 'APP2',
      is_visible: true,
      is_featured: false,
      image: 'https://via.placeholder.com/300x300?text=AirPods+Pro',
      category_id: 3,
      created_at: new Date().toISOString(),
      updated_at: new Date().toISOString(),
    },
  ];

  /**
   * Récupère tous les produits (simulé)
   */
  getAll(): Observable<PaginatedResponse<Product>> {
    const response: PaginatedResponse<Product> = {
      data: this.mockProducts,
      links: {
        first: 'http://localhost/api/products?page=1',
        last: 'http://localhost/api/products?page=1',
        prev: null,
        next: null,
      },
      meta: {
        current_page: 1,
        from: 1,
        last_page: 1,
        path: 'http://localhost/api/products',
        per_page: 15,
        to: this.mockProducts.length,
        total: this.mockProducts.length,
      },
    };

    // Simule un délai réseau de 500ms
    return of(response).pipe(delay(500));
  }

  /**
   * Récupère un produit par ID
   */
  getById(id: number): Observable<Product> {
    const product = this.mockProducts.find((p) => p.id === id);
    if (!product) {
      throw new Error('Produit non trouvé');
    }
    return of(product).pipe(delay(300));
  }

  /**
   * Récupère les produits mis en avant
   */
  getFeatured(): Observable<Product[]> {
    const featured = this.mockProducts.filter((p) => p.is_featured);
    return of(featured).pipe(delay(400));
  }

  /**
   * Crée un nouveau produit (simulé)
   */
  create(data: CreateProductRequest): Observable<ApiResponse<Product>> {
    const newProduct: Product = {
      id: Math.max(...this.mockProducts.map((p) => p.id)) + 1,
      ...data,
      slug: data.name.toLowerCase().replace(/\s+/g, '-'),
      created_at: new Date().toISOString(),
      updated_at: new Date().toISOString(),
    };

    this.mockProducts.push(newProduct);

    const response: ApiResponse<Product> = {
      message: 'Produit créé avec succès',
      data: newProduct,
    };

    return of(response).pipe(delay(600));
  }

  /**
   * Met à jour un produit (simulé)
   */
  update(id: number, data: UpdateProductRequest): Observable<ApiResponse<Product>> {
    const index = this.mockProducts.findIndex((p) => p.id === id);
    if (index === -1) {
      throw new Error('Produit non trouvé');
    }

    this.mockProducts[index] = {
      ...this.mockProducts[index],
      ...data,
      updated_at: new Date().toISOString(),
    };

    const response: ApiResponse<Product> = {
      message: 'Produit mis à jour avec succès',
      data: this.mockProducts[index],
    };

    return of(response).pipe(delay(600));
  }

  /**
   * Supprime un produit (simulé)
   */
  delete(id: number): Observable<ApiResponse<null>> {
    const index = this.mockProducts.findIndex((p) => p.id === id);
    if (index === -1) {
      throw new Error('Produit non trouvé');
    }

    this.mockProducts.splice(index, 1);

    const response: ApiResponse<null> = {
      message: 'Produit supprimé avec succès',
      data: null,
    };

    return of(response).pipe(delay(500));
  }

  // Méthodes pour les variantes (mockées simplement)
  getVariants() {
    return of([]).pipe(delay(300));
  }

  createVariant() {
    return of({ message: 'Variante créée', data: {} } as any).pipe(delay(400));
  }

  updateVariant() {
    return of({ message: 'Variante mise à jour', data: {} } as any).pipe(delay(400));
  }

  deleteVariant() {
    return of({ message: 'Variante supprimée', data: null }).pipe(delay(300));
  }

  getMyProducts() {
    return this.getAll();
  }

  getVendorStats() {
    return of({
      message: 'Stats récupérées',
      data: {
        total_products: this.mockProducts.length,
        total_sales: 150,
        total_revenue: 125000,
        active_products: this.mockProducts.filter((p) => p.is_visible).length,
      },
    }).pipe(delay(400));
  }
}
