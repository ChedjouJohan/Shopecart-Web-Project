import { Injectable, inject } from '@angular/core';
import { HttpClient, HttpParams } from '@angular/common/http';
import { Observable } from 'rxjs';
import { environment } from '../../../environments/environment';
import {
  DashboardKPIs,
  SalesDataPoint,
  TopProduct,
  OrderStatusDistribution,
  ApiResponse,
} from '../models/models';

@Injectable({
  providedIn: 'root',
})
export class DashboardService {
  private readonly http = inject(HttpClient);
  private readonly apiUrl = `${environment.apiUrl}/dashboard`;

  /**
   * Récupère les KPIs du dashboard
   */
  getKpis(): Observable<ApiResponse<DashboardKPIs>> {
    return this.http.get<ApiResponse<DashboardKPIs>>(`${this.apiUrl}/kpis`);
  }

  /**
   * Récupère les ventes dans le temps
   */
  getSalesOverTime(params?: {
    period?: 'day' | 'week' | 'month';
    days?: number;
  }): Observable<ApiResponse<SalesDataPoint[]>> {
    let httpParams = new HttpParams();

    if (params) {
      Object.keys(params).forEach((key) => {
        const value = (params as any)[key];
        if (value !== undefined && value !== null) {
          httpParams = httpParams.set(key, value.toString());
        }
      });
    }

    return this.http.get<ApiResponse<SalesDataPoint[]>>(`${this.apiUrl}/sales-over-time`, {
      params: httpParams,
    });
  }

  /**
   * Récupère les produits les plus vendus
   */
  getTopProducts(limit: number = 10): Observable<ApiResponse<TopProduct[]>> {
    const params = new HttpParams().set('limit', limit.toString());
    return this.http.get<ApiResponse<TopProduct[]>>(`${this.apiUrl}/top-products`, { params });
  }

  /**
   * Récupère la distribution des statuts de commandes
   */
  getOrderStatusDistribution(): Observable<ApiResponse<OrderStatusDistribution>> {
    return this.http.get<ApiResponse<OrderStatusDistribution>>(
      `${this.apiUrl}/order-status-distribution`
    );
  }
}
