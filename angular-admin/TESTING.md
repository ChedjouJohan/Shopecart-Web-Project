# Guide de Test - Frontend Angular Sans Backend

Ce guide explique comment tester l'application Angular **sans avoir le backend Laravel en cours d'exécution**.

---

## 🎯 Méthodes disponibles

### **Option 1 : Services Mockés (Recommandé pour débutants)**

Les services mockés simulent les réponses de l'API avec des données en mémoire.

#### **Avantages**
✅ Rapide à mettre en place
✅ Pas de configuration externe
✅ Données modifiables facilement
✅ Pas besoin du backend Laravel

#### **Comment l'utiliser**

**Méthode A : Swap de configuration (Temporaire)**

```bash
# 1. Renommer la config réelle
mv src/app/app.config.ts src/app/app.config.real.ts

# 2. Activer la config mock
mv src/app/app.config.mock.ts src/app/app.config.ts

# 3. Lancer l'application
ng serve
```

**Méthode B : Provider manuel dans un composant**

Dans votre composant de test :
```typescript
import { Component } from '@angular/core';
import { MockProductService } from './core/services/mock-product.service';
import { ProductService } from './core/services/product.service';

@Component({
  // ...
  providers: [
    { provide: ProductService, useClass: MockProductService }
  ]
})
export class MyTestComponent { }
```

#### **Comptes de test disponibles**

**Mock AuthService** :
```
Email: admin@test.com
Password: password
```

Une fois connecté, vous aurez accès à tous les endpoints mockés.

#### **Services mockés disponibles**

- ✅ **MockAuthService** - Authentification complète
- ✅ **MockProductService** - CRUD produits avec 3 produits pré-remplis
- ✅ **MockDashboardService** - KPIs, graphiques, statistiques

**À créer** (suivez le même pattern) :
- `MockOrderService`
- `MockCategoryService`
- `MockUserService`
- `MockCartService`
- `MockDeliveryService`

---

### **Option 2 : json-server (API REST complète simulée)**

`json-server` crée une API REST complète à partir d'un fichier JSON.

#### **Installation**

```bash
# Installer json-server globalement
npm install -g json-server

# Ou en dev dependency
npm install --save-dev json-server
```

#### **Configuration**

Créez `db.json` à la racine du projet Angular :

```json
{
  "users": [
    {
      "id": 1,
      "name": "Admin Test",
      "email": "admin@test.com",
      "role": "ADMIN",
      "phone": "+237653982736"
    }
  ],
  "products": [
    {
      "id": 1,
      "name": "iPhone 15 Pro",
      "slug": "iphone-15-pro",
      "price": 1199.99,
      "stock": 50,
      "is_visible": true,
      "is_featured": true,
      "category_id": 1
    },
    {
      "id": 2,
      "name": "MacBook Pro M3",
      "slug": "macbook-pro-m3",
      "price": 2499.99,
      "stock": 30,
      "is_visible": true,
      "category_id": 2
    }
  ],
  "categories": [
    {
      "id": 1,
      "name": "Smartphones",
      "slug": "smartphones",
      "is_visible": true
    },
    {
      "id": 2,
      "name": "Ordinateurs",
      "slug": "ordinateurs",
      "is_visible": true
    }
  ],
  "orders": [],
  "cart": {
    "id": 1,
    "user_id": 1,
    "items_count": 0,
    "total": 0,
    "items": []
  }
}
```

#### **Lancer json-server**

```bash
# Lancer sur le port 3000
json-server --watch db.json --port 3000

# Avec délai de 500ms pour simuler le réseau
json-server --watch db.json --port 3000 --delay 500
```

#### **Modifier environment.ts**

```typescript
export const environment = {
  production: false,
  apiUrl: 'http://localhost:3000', // ← Pointer vers json-server
  appName: 'Shopecart Admin',
  version: '1.0.0'
};
```

#### **Endpoints disponibles**

json-server génère automatiquement :

```
GET    /products          # Liste tous les produits
GET    /products/1        # Produit avec id=1
POST   /products          # Créer un produit
PUT    /products/1        # Mettre à jour
PATCH  /products/1        # Mise à jour partielle
DELETE /products/1        # Supprimer

# Filtres, tri, pagination
GET /products?_page=1&_limit=10
GET /products?is_featured=true
GET /products?_sort=price&_order=desc
GET /products?q=iPhone   # Recherche
```

**Limitations** :
- ⚠️ Pas d'authentification JWT
- ⚠️ Pas de validation des rôles
- ⚠️ Structure de réponse différente de Laravel

---

### **Option 3 : Angular In-Memory Web API**

Module Angular officiel pour simuler une API en mémoire.

#### **Installation**

```bash
npm install angular-in-memory-web-api --save-dev
```

#### **Configuration**

Créez `src/app/core/services/in-memory-data.service.ts` :

```typescript
import { Injectable } from '@angular/core';
import { InMemoryDbService } from 'angular-in-memory-web-api';

@Injectable({ providedIn: 'root' })
export class InMemoryDataService implements InMemoryDbService {
  createDb() {
    const products = [
      { id: 1, name: 'iPhone 15 Pro', price: 1199.99, stock: 50 },
      { id: 2, name: 'MacBook Pro M3', price: 2499.99, stock: 30 },
    ];

    const categories = [
      { id: 1, name: 'Smartphones', slug: 'smartphones' },
      { id: 2, name: 'Ordinateurs', slug: 'ordinateurs' },
    ];

    return { products, categories };
  }
}
```

Modifiez `app.config.ts` :

```typescript
import { HttpClientInMemoryWebApiModule } from 'angular-in-memory-web-api';
import { InMemoryDataService } from './core/services/in-memory-data.service';
import { importProvidersFrom } from '@angular/core';

export const appConfig: ApplicationConfig = {
  providers: [
    // ... autres providers
    importProvidersFrom(
      HttpClientInMemoryWebApiModule.forRoot(InMemoryDataService, {
        delay: 500, // Simule un délai réseau
        passThruUnknownUrl: true // Laisse passer les URLs non mockées
      })
    ),
  ],
};
```

**Avantages** :
✅ Simulation complète d'une API REST
✅ Gère automatiquement GET, POST, PUT, DELETE
✅ Support de la pagination, filtres, tri

**Inconvénients** :
⚠️ Configuration plus complexe
⚠️ Pas de support JWT natif

---

## 🚀 Workflow Recommandé

### **Étape 1 : Démarrage rapide (Services Mockés)**

```bash
# Utilisez les services mockés pour commencer
mv src/app/app.config.ts src/app/app.config.real.ts
mv src/app/app.config.mock.ts src/app/app.config.ts

ng serve
```

👉 Connectez-vous avec `admin@test.com` / `password`

### **Étape 2 : Développement avancé (json-server)**

```bash
# Terminal 1 : json-server
json-server --watch db.json --port 3000 --delay 300

# Terminal 2 : Angular
ng serve
```

Modifiez `environment.ts` :
```typescript
apiUrl: 'http://localhost:3000'
```

### **Étape 3 : Tests avec le vrai backend**

```bash
# Terminal 1 : Backend Laravel
cd tp4-ecommerce
php artisan serve

# Terminal 2 : Frontend Angular
cd angular-admin
ng serve --proxy-config proxy.conf.json
```

Modifiez `environment.ts` :
```typescript
apiUrl: 'http://localhost:8000/api'
```

---

## 🛠️ Créer vos propres Mock Services

Suivez ce template pour créer d'autres services mockés :

```typescript
import { Injectable } from '@angular/core';
import { Observable, of, delay } from 'rxjs';
import { MyModel, ApiResponse } from '../models/models';

@Injectable({ providedIn: 'root' })
export class MockMyService {
  private mockData: MyModel[] = [
    // Vos données mockées
  ];

  getAll(): Observable<MyModel[]> {
    return of(this.mockData).pipe(delay(500));
  }

  getById(id: number): Observable<MyModel> {
    const item = this.mockData.find(i => i.id === id);
    if (!item) throw new Error('Not found');
    return of(item).pipe(delay(300));
  }

  create(data: any): Observable<ApiResponse<MyModel>> {
    const newItem = { id: Date.now(), ...data };
    this.mockData.push(newItem);
    return of({ message: 'Créé', data: newItem }).pipe(delay(600));
  }

  update(id: number, data: any): Observable<ApiResponse<MyModel>> {
    const index = this.mockData.findIndex(i => i.id === id);
    if (index === -1) throw new Error('Not found');

    this.mockData[index] = { ...this.mockData[index], ...data };
    return of({ message: 'Mis à jour', data: this.mockData[index] }).pipe(delay(600));
  }

  delete(id: number): Observable<ApiResponse<null>> {
    const index = this.mockData.findIndex(i => i.id === id);
    if (index !== -1) this.mockData.splice(index, 1);
    return of({ message: 'Supprimé', data: null }).pipe(delay(500));
  }
}
```

---

## 📊 Comparaison des méthodes

| Critère | Mock Services | json-server | In-Memory API |
|---------|--------------|-------------|---------------|
| **Facilité** | ⭐⭐⭐⭐⭐ | ⭐⭐⭐ | ⭐⭐ |
| **Rapidité** | ⭐⭐⭐⭐⭐ | ⭐⭐⭐⭐ | ⭐⭐⭐⭐ |
| **Flexibilité** | ⭐⭐⭐ | ⭐⭐⭐⭐⭐ | ⭐⭐⭐⭐ |
| **API REST complète** | ❌ | ✅ | ✅ |
| **Configuration** | Minimale | Moyenne | Complexe |
| **Persistance** | Mémoire | Fichier JSON | Mémoire |

---

## 🎯 Conseils

1. **Commencez simple** : Utilisez les Mock Services pour les premiers tests
2. **Évoluez progressivement** : Passez à json-server pour tester les appels HTTP réels
3. **Finalisez avec le backend** : Une fois les composants prêts, testez avec Laravel
4. **Documentez vos mocks** : Ajoutez des commentaires pour faciliter la maintenance

---

## 🔧 Troubleshooting

### Erreur "Cannot find module 'mock-*.service'"
```bash
# Vérifiez que les fichiers mock existent
ls src/app/core/services/mock-*.ts
```

### Les données ne changent pas
Les mock services stockent les données en mémoire. Rechargez la page pour réinitialiser.

### CORS errors avec json-server
```bash
# Ajoutez --no-cors
json-server --watch db.json --port 3000 --no-cors
```

---

**Prêt à tester !** 🚀

Choisissez la méthode qui vous convient et commencez à développer vos composants sans attendre le backend.
