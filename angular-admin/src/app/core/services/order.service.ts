import { Injectable, inject } from '@angular/core';
import { HttpClient, HttpParams } from '@angular/common/http';
import { Observable } from 'rxjs';
import { environment } from '../../../environments/environment';
import {
  Order,
  CreateOrderRequest,
  UpdateOrderStatusRequest,
  PaginatedResponse,
  ApiResponse,
} from '../models/models';

@Injectable({
  providedIn: 'root',
})
export class OrderService {
  private readonly http = inject(HttpClient);
  private readonly apiUrl = `${environment.apiUrl}/orders`;

  /**
   * Récupère toutes les commandes (Admin/Manager)
   */
  getAll(params?: {
    page?: number;
    per_page?: number;
    status?: string;
  }): Observable<PaginatedResponse<Order>> {
    let httpParams = new HttpParams();

    if (params) {
      Object.keys(params).forEach((key) => {
        const value = (params as any)[key];
        if (value !== undefined && value !== null) {
          httpParams = httpParams.set(key, value.toString());
        }
      });
    }

    return this.http.get<PaginatedResponse<Order>>(this.apiUrl, { params: httpParams });
  }

  /**
   * Récupère les commandes de l'utilisateur connecté
   */
  getMyOrders(params?: { page?: number; per_page?: number }): Observable<PaginatedResponse<Order>> {
    let httpParams = new HttpParams();

    if (params) {
      Object.keys(params).forEach((key) => {
        const value = (params as any)[key];
        if (value !== undefined && value !== null) {
          httpParams = httpParams.set(key, value.toString());
        }
      });
    }

    return this.http.get<PaginatedResponse<Order>>(`${this.apiUrl}/my`, { params: httpParams });
  }

  /**
   * Récupère une commande par son ID
   */
  getById(id: number): Observable<Order> {
    return this.http.get<Order>(`${this.apiUrl}/${id}`);
  }

  /**
   * Crée une nouvelle commande
   */
  create(data: CreateOrderRequest): Observable<ApiResponse<Order>> {
    return this.http.post<ApiResponse<Order>>(this.apiUrl, data);
  }

  /**
   * Met à jour le statut d'une commande
   */
  updateStatus(id: number, data: UpdateOrderStatusRequest): Observable<ApiResponse<Order>> {
    return this.http.put<ApiResponse<Order>>(`${this.apiUrl}/${id}/status`, data);
  }
}
