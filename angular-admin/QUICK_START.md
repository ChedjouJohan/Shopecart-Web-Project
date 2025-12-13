# 🚀 Quick Start - Tester sans Backend en 3 minutes

## Méthode la plus simple (Mock Services)

### 1️⃣ Activer les Mock Services

```bash
cd angular-admin

# Renommer les configs
mv src/app/app.config.ts src/app/app.config.real.ts
mv src/app/app.config.mock.ts src/app/app.config.ts
```

### 2️⃣ Lancer l'application

```bash
npm install  # Si pas déjà fait
ng serve
```

### 3️⃣ Tester l'authentification

Ouvrez http://localhost:4200

**Compte de test** :
- Email: `admin@test.com`
- Password: `password`

### 4️⃣ Exemple d'utilisation dans un composant

Créez un composant de test :

```bash
ng generate component features/test-products
```

**`test-products.component.ts`** :
```typescript
import { Component, OnInit } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ProductService } from '../../core/services/product.service';
import { Product } from '../../core/models/models';

@Component({
  selector: 'app-test-products',
  standalone: true,
  imports: [CommonModule],
  template: `
    <div class="container">
      <h1>Test des Produits (Mode Mock)</h1>

      <div *ngIf="loading">Chargement...</div>

      <div *ngIf="!loading && products.length > 0" class="products-grid">
        <div *ngFor="let product of products" class="product-card">
          <img [src]="product.image" [alt]="product.name">
          <h3>{{ product.name }}</h3>
          <p>{{ product.description }}</p>
          <p class="price">{{ product.price }}€</p>
          <p class="stock">Stock: {{ product.stock }}</p>
        </div>
      </div>

      <button (click)="addProduct()" class="btn-add">
        Ajouter un produit test
      </button>
    </div>
  `,
  styles: [`
    .container { padding: 20px; }
    .products-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
      gap: 20px;
      margin: 20px 0;
    }
    .product-card {
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 15px;
      background: white;
    }
    .product-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-radius: 4px;
    }
    .product-card h3 {
      margin: 10px 0;
      color: #333;
    }
    .price {
      font-size: 1.5em;
      font-weight: bold;
      color: #1e40af;
    }
    .stock {
      color: #666;
    }
    .btn-add {
      padding: 10px 20px;
      background: #1e40af;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    .btn-add:hover {
      background: #1e3a8a;
    }
  `]
})
export class TestProductsComponent implements OnInit {
  products: Product[] = [];
  loading = false;

  constructor(private productService: ProductService) {}

  ngOnInit() {
    this.loadProducts();
  }

  loadProducts() {
    this.loading = true;
    this.productService.getAll().subscribe({
      next: (response) => {
        this.products = response.data;
        this.loading = false;
        console.log('Produits chargés (mock):', this.products);
      },
      error: (error) => {
        console.error('Erreur:', error);
        this.loading = false;
      }
    });
  }

  addProduct() {
    const newProduct = {
      name: 'Nouveau Produit Test',
      description: 'Créé depuis le frontend',
      price: 999.99,
      stock: 10,
      is_visible: true,
      is_featured: false,
    };

    this.productService.create(newProduct).subscribe({
      next: (response) => {
        console.log('Produit créé:', response.data);
        this.loadProducts(); // Recharge la liste
        alert('Produit créé avec succès !');
      },
      error: (error) => {
        console.error('Erreur:', error);
        alert('Erreur lors de la création');
      }
    });
  }
}
```

Ajoutez la route dans `app.routes.ts` :
```typescript
export const routes: Routes = [
  { path: 'test-products', component: TestProductsComponent },
];
```

Accédez à http://localhost:4200/test-products

---

## 🎯 Ce que vous pouvez tester

### ✅ Authentification
```typescript
// Dans votre composant login
this.authService.login({ email: 'admin@test.com', password: 'password' })
  .subscribe(response => {
    console.log('Token:', response.token);
    console.log('User:', response.user);
  });
```

### ✅ Produits
```typescript
// Liste
this.productService.getAll().subscribe(response => {
  console.log('Produits:', response.data);
});

// Créer
this.productService.create({
  name: 'Test',
  price: 99.99,
  stock: 10,
  is_visible: true,
  is_featured: false
}).subscribe(response => {
  console.log('Créé:', response.data);
});

// Modifier
this.productService.update(1, { price: 1299.99 })
  .subscribe(response => {
    console.log('Modifié:', response.data);
  });

// Supprimer
this.productService.delete(1).subscribe(response => {
  console.log('Supprimé');
});
```

### ✅ Dashboard
```typescript
// KPIs
this.dashboardService.getKpis().subscribe(response => {
  console.log('KPIs:', response.data);
  // total_revenue, total_orders, active_users, etc.
});

// Graphique ventes
this.dashboardService.getSalesOverTime().subscribe(response => {
  console.log('Sales data:', response.data);
  // Utilisez avec Chart.js
});

// Top produits
this.dashboardService.getTopProducts(5).subscribe(response => {
  console.log('Top 5:', response.data);
});
```

---

## 🔄 Revenir au mode normal (avec backend)

```bash
# Restaurer la config réelle
mv src/app/app.config.ts src/app/app.config.mock.ts
mv src/app/app.config.real.ts src/app/app.config.ts

# Relancer
ng serve
```

Assurez-vous que le backend Laravel tourne :
```bash
cd tp4-ecommerce
php artisan serve
```

---

## 📊 Données mockées disponibles

### Produits (3 produits)
- iPhone 15 Pro (1199.99€)
- MacBook Pro M3 (2499.99€)
- AirPods Pro 2 (279.99€)

### Utilisateur
- ID: 1
- Name: Admin Test
- Email: admin@test.com
- Role: ADMIN

### Dashboard
- Total revenue: 125,450.75€
- Total orders: 542
- Active users: 1,234
- Deliveries successful: 498

---

## 💡 Conseils

1. **Console DevTools** : Ouvrez la console pour voir les logs des appels mockés
2. **Rechargez la page** : Les données mockées sont en mémoire, rechargez pour réinitialiser
3. **Créez vos propres mocks** : Suivez le pattern des fichiers `mock-*.service.ts`
4. **Testez les erreurs** : Modifiez les mocks pour simuler des erreurs (throw new Error())

---

## 🐛 Problèmes courants

### "Cannot find module 'mock-product.service'"
➡️ Vérifiez que le fichier existe dans `src/app/core/services/`

### Les changements ne sont pas sauvegardés
➡️ Normal ! Les mocks sont en mémoire. Utilisez json-server pour persister les données.

### Erreur 401 Unauthorized
➡️ Connectez-vous d'abord avec `admin@test.com` / `password`

---

**C'est tout !** 🎉

Vous pouvez maintenant développer et tester vos composants Angular sans avoir besoin du backend Laravel.

Pour plus de détails, consultez [TESTING.md](./TESTING.md)
