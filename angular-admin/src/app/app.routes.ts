import { Routes } from '@angular/router';
import { authGuard } from './core/guards/auth.guard';
import { MainLayoutComponent } from './layout/main-layout/main-layout.component';
import { LoginComponent } from './features/auth/login/login.component';
import { DashboardComponent } from './features/dashboard/dashboard.component';
import { ProductListComponent } from './features/products/product-list/product-list.component';
import { ProductFormComponent } from './features/products/product-form/product-form.component';
import { OrderListComponent } from './features/orders/order-list/order-list.component';
import { CategoryListComponent } from './features/categories/category-list/category-list.component';
import { UserListComponent } from './features/users/user-list/user-list.component';

export const routes: Routes = [
  // Redirection par défaut
  { path: '', redirectTo: '/dashboard', pathMatch: 'full' },

  // Route de login (publique)
  { path: 'login', component: LoginComponent },
  { path: 'auth/login', redirectTo: '/login', pathMatch: 'full' },

  // Routes protégées avec layout
  {
    path: '',
    component: MainLayoutComponent,
    canActivate: [authGuard],
    children: [
      { path: 'dashboard', component: DashboardComponent },
      { path: 'products', component: ProductListComponent },
      { path: 'products/new', component: ProductFormComponent },
      { path: 'products/edit/:id', component: ProductFormComponent },
      { path: 'orders', component: OrderListComponent },
      { path: 'categories', component: CategoryListComponent },
      { path: 'users', component: UserListComponent },
    ],
  },

  // Route wildcard pour les pages non trouvées
  { path: '**', redirectTo: '/dashboard' },
];
