import { Injectable, inject } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { environment } from '../../../environments/environment';
import { Category, CreateCategoryRequest, Product, ApiResponse } from '../models/models';

@Injectable({
  providedIn: 'root',
})
export class CategoryService {
  private readonly http = inject(HttpClient);
  private readonly apiUrl = `${environment.apiUrl}/categories`;

  /**
   * Récupère toutes les catégories
   */
  getAll(): Observable<Category[]> {
    return this.http.get<Category[]>(this.apiUrl);
  }

  /**
   * Récupère une catégorie par son ID
   */
  getById(id: number): Observable<Category> {
    return this.http.get<Category>(`${this.apiUrl}/${id}`);
  }

  /**
   * Récupère les produits d'une catégorie
   */
  getProducts(categoryId: number): Observable<Product[]> {
    return this.http.get<Product[]>(`${this.apiUrl}/${categoryId}/products`);
  }

  /**
   * Crée une nouvelle catégorie
   */
  create(data: CreateCategoryRequest): Observable<ApiResponse<Category>> {
    return this.http.post<ApiResponse<Category>>(this.apiUrl, data);
  }

  /**
   * Met à jour une catégorie
   */
  update(id: number, data: Partial<CreateCategoryRequest>): Observable<ApiResponse<Category>> {
    return this.http.put<ApiResponse<Category>>(`${this.apiUrl}/${id}`, data);
  }

  /**
   * Supprime une catégorie
   */
  delete(id: number): Observable<ApiResponse<null>> {
    return this.http.delete<ApiResponse<null>>(`${this.apiUrl}/${id}`);
  }
}
