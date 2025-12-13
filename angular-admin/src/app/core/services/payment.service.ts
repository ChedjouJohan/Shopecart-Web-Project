import { Injectable, inject } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { environment } from '../../../environments/environment';
import { ApiResponse } from '../models/models';

@Injectable({
  providedIn: 'root',
})
export class PaymentService {
  private readonly http = inject(HttpClient);
  private readonly apiUrl = `${environment.apiUrl}/payment`;

  /**
   * Crée une intention de paiement Stripe pour une commande
   */
  createPaymentIntent(orderId: number): Observable<ApiResponse<{ client_secret: string }>> {
    return this.http.post<ApiResponse<{ client_secret: string }>>(
      `${this.apiUrl}/create-payment-intent/order/${orderId}`,
      {}
    );
  }

  /**
   * Enregistre un paiement
   */
  registerPayment(data: {
    order_id: number;
    amount: number;
    method: string;
    transaction_id: string;
  }): Observable<ApiResponse<null>> {
    return this.http.post<ApiResponse<null>>(`${this.apiUrl}/registerPayment`, data);
  }
}
