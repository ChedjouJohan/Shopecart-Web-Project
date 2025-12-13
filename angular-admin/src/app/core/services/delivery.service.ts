import { Injectable, inject } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { environment } from '../../../environments/environment';
import {
  Order,
  AssignDeliveryRequest,
  UpdateLocationRequest,
  DeliveryGeolocation,
  ApiResponse,
  UpdateOrderStatusRequest,
} from '../models/models';

@Injectable({
  providedIn: 'root',
})
export class DeliveryService {
  private readonly http = inject(HttpClient);
  private readonly apiUrl = `${environment.apiUrl}/deliveries`;

  /**
   * Récupère les livraisons du livreur connecté
   */
  getMyDeliveries(): Observable<Order[]> {
    return this.http.get<Order[]>(`${this.apiUrl}/my`);
  }

  /**
   * Récupère les commandes en attente d'attribution (ADMIN/MANAGER/SUPERVISOR)
   */
  getPending(): Observable<ApiResponse<Order[]>> {
    return this.http.get<ApiResponse<Order[]>>(`${this.apiUrl}/pending`);
  }

  /**
   * Attribue une commande à un livreur (ADMIN/MANAGER/SUPERVISOR)
   */
  assign(orderId: number, data: AssignDeliveryRequest): Observable<ApiResponse<Order>> {
    return this.http.post<ApiResponse<Order>>(`${this.apiUrl}/${orderId}/assign`, data);
  }

  /**
   * Met à jour le statut d'une livraison
   */
  updateStatus(orderId: number, data: UpdateOrderStatusRequest): Observable<ApiResponse<Order>> {
    return this.http.put<ApiResponse<Order>>(`${this.apiUrl}/${orderId}/status`, data);
  }

  /**
   * Met à jour la position GPS du livreur
   */
  updateLocation(data: UpdateLocationRequest): Observable<ApiResponse<null>> {
    return this.http.post<ApiResponse<null>>(`${this.apiUrl}/location`, data);
  }

  /**
   * Récupère la carte en temps réel des livreurs (ADMIN/MANAGER/SUPERVISOR)
   */
  getLiveMap(): Observable<ApiResponse<DeliveryGeolocation[]>> {
    return this.http.get<ApiResponse<DeliveryGeolocation[]>>(`${this.apiUrl}/live/map`);
  }

  /**
   * Récupère l'historique des livraisons
   */
  getHistory(): Observable<Order[]> {
    return this.http.get<Order[]>(`${this.apiUrl}/history`);
  }

  /**
   * Upload une preuve de livraison
   */
  uploadProof(orderId: number, proof: File, proofType: 'image' | 'signature'): Observable<ApiResponse<null>> {
    const formData = new FormData();
    formData.append('proof', proof);
    formData.append('proof_type', proofType);

    return this.http.post<ApiResponse<null>>(`${this.apiUrl}/${orderId}/proof`, formData);
  }

  /**
   * Récupère la preuve de livraison
   */
  getProof(orderId: number): Observable<Blob> {
    return this.http.get(`${this.apiUrl}/${orderId}/proof`, {
      responseType: 'blob',
    });
  }
}
