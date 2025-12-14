import { Component, OnInit, inject } from '@angular/core';
import { CommonModule } from '@angular/common';
import { MatCardModule } from '@angular/material/card';
import { MatIconModule } from '@angular/material/icon';
import { MatProgressSpinnerModule } from '@angular/material/progress-spinner';
import { DashboardService } from '../../core/services/dashboard.service';
import { DashboardKPIs } from '../../core/models/models';

interface KPICard {
  title: string;
  value: string | number;
  icon: string;
  color: string;
  trend?: string;
}

@Component({
  selector: 'app-dashboard',
  standalone: true,
  imports: [CommonModule, MatCardModule, MatIconModule, MatProgressSpinnerModule],
  templateUrl: './dashboard.component.html',
  styleUrl: './dashboard.component.scss',
})
export class DashboardComponent implements OnInit {
  private dashboardService = inject(DashboardService);

  kpis: DashboardKPIs | null = null;
  kpiCards: KPICard[] = [];
  loading = true;
  error = '';

  ngOnInit(): void {
    this.loadKpis();
  }

  loadKpis(): void {
    this.loading = true;
    this.error = '';

    this.dashboardService.getKpis().subscribe({
      next: (response) => {
        this.kpis = response.data;
        this.buildKpiCards();
        this.loading = false;
      },
      error: (err) => {
        this.error = 'Erreur lors du chargement des données';
        this.loading = false;
        console.error('Error loading KPIs:', err);
      },
    });
  }

  buildKpiCards(): void {
    if (!this.kpis) return;

    this.kpiCards = [
      {
        title: 'Revenu Total',
        value: this.formatCurrency(this.kpis.total_revenue),
        icon: 'attach_money',
        color: '#4caf50',
      },
      {
        title: 'Commandes Totales',
        value: this.kpis.total_orders,
        icon: 'shopping_cart',
        color: '#2196f3',
      },
      {
        title: 'Utilisateurs Actifs',
        value: this.kpis.active_users,
        icon: 'people',
        color: '#ff9800',
      },
      {
        title: 'Taux de Livraison',
        value: this.formatPercent(this.kpis.delivery_rate),
        icon: 'local_shipping',
        color: '#9c27b0',
      },
    ];
  }

  formatCurrency(value: number): string {
    return new Intl.NumberFormat('fr-FR', {
      style: 'currency',
      currency: 'XAF',
      minimumFractionDigits: 0,
      maximumFractionDigits: 0,
    }).format(value);
  }

  formatPercent(value: number): string {
    return `${value.toFixed(1)}%`;
  }
}
