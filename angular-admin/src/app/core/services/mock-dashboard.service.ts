import { Injectable } from '@angular/core';
import { Observable, of, delay } from 'rxjs';
import {
  DashboardKPIs,
  SalesDataPoint,
  TopProduct,
  OrderStatusDistribution,
  ApiResponse,
} from '../models/models';

/**
 * Service Dashboard mocké pour tester sans backend
 */
@Injectable({
  providedIn: 'root',
})
export class MockDashboardService {
  /**
   * KPIs mockés
   */
  getKpis(): Observable<ApiResponse<DashboardKPIs>> {
    const kpis: DashboardKPIs = {
      total_revenue: 125450.75,
      total_orders: 542,
      active_users: 1234,
      delivery_rate: 0.94,
      orders_ready_to_ship: 23,
      deliveries_in_progress: 8,
      deliveries_successful: 498,
      deliveries_failed: 3,
    };

    return of({
      message: 'KPIs retrieved successfully',
      data: kpis,
    }).pipe(delay(600));
  }

  /**
   * Données de ventes mockées (derniers 30 jours)
   */
  getSalesOverTime(): Observable<ApiResponse<SalesDataPoint[]>> {
    const salesData: SalesDataPoint[] = [];
    const today = new Date();

    // Génère 30 jours de données
    for (let i = 29; i >= 0; i--) {
      const date = new Date(today);
      date.setDate(date.getDate() - i);
      const dateStr = date.toISOString().split('T')[0];

      salesData.push({
        label: dateStr,
        revenue: Math.random() * 5000 + 1000, // Entre 1000 et 6000
        order_count: Math.floor(Math.random() * 30 + 5), // Entre 5 et 35 commandes
      });
    }

    return of({
      message: 'Sales data retrieved successfully',
      data: salesData,
    }).pipe(delay(700));
  }

  /**
   * Top produits mockés
   */
  getTopProducts(limit: number = 10): Observable<ApiResponse<TopProduct[]>> {
    const topProducts: TopProduct[] = [
      {
        product_name: 'iPhone 15 Pro',
        total_quantity: 156,
        total_revenue: 187144.44,
      },
      {
        product_name: 'MacBook Pro M3',
        total_quantity: 89,
        total_revenue: 222499.11,
      },
      {
        product_name: 'AirPods Pro 2',
        total_quantity: 234,
        total_revenue: 65517.66,
      },
      {
        product_name: 'iPad Air',
        total_quantity: 123,
        total_revenue: 73770.0,
      },
      {
        product_name: 'Apple Watch Series 9',
        total_quantity: 178,
        total_revenue: 71200.0,
      },
      {
        product_name: 'Magic Keyboard',
        total_quantity: 145,
        total_revenue: 21750.0,
      },
      {
        product_name: 'HomePod mini',
        total_quantity: 201,
        total_revenue: 20100.0,
      },
      {
        product_name: 'AirTag (Pack de 4)',
        total_quantity: 312,
        total_revenue: 31200.0,
      },
    ].slice(0, limit);

    return of({
      message: 'Top selling products retrieved successfully',
      data: topProducts,
    }).pipe(delay(600));
  }

  /**
   * Distribution des statuts de commandes mockée
   */
  getOrderStatusDistribution(): Observable<ApiResponse<OrderStatusDistribution>> {
    const distribution: OrderStatusDistribution = {
      PENDING: 23,
      PROCESSING: 15,
      PAID: 34,
      SHIPPED: 12,
      DELIVERED: 498,
      IN_DELIVERY: 8,
      CANCELED: 7,
      FAILED: 3,
    };

    return of({
      message: 'Order status distribution retrieved successfully',
      data: distribution,
    }).pipe(delay(500));
  }
}
