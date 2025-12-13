# Shopecart Admin - Frontend Angular

Interface d'administration moderne pour la plateforme e-commerce Shopecart, construite avec **Angular 18** et **Angular Material**.

---

## 📋 Table des matières

- [Fonctionnalités](#fonctionnalités)
- [Architecture](#architecture)
- [Technologies utilisées](#technologies-utilisées)
- [Installation rapide](#installation-rapide)
- [Structure du projet](#structure-du-projet)
- [Conventions de code](#conventions-de-code)
- [Scripts disponibles](#scripts-disponibles)
- [Documentation](#documentation)

---

## Fonctionnalités

### 🔐 Authentification & Autorisation
- Connexion / Inscription avec Laravel Sanctum
- Gestion de session avec JWT tokens
- Guards de route basés sur les rôles (ADMIN, VENDOR, MANAGER, SUPERVISOR, DELIVERY, CUSTOMER)
- Interceptors HTTP automatiques (auth, error handling)

### 📊 Dashboard
- KPIs en temps réel (ventes, commandes, utilisateurs, livraisons)
- Graphiques interactifs (Chart.js + ng2-charts)
- Top produits les plus vendus
- Distribution des statuts de commandes (pie chart)

### 🛍️ Gestion des produits
- CRUD complet avec validation
- Gestion des variantes (taille, couleur, etc.)
- Upload d'images multiples
- Filtres, tri et pagination
- Recherche avancée

### 📦 Gestion des commandes
- Liste avec filtres par statut et date
- Détails complets (items, client, livraison)
- Mise à jour de statut
- Historique des modifications

### 🗂️ Gestion des catégories
- CRUD complet
- Association produits-catégories
- Upload d'images de catégorie

### 👥 Gestion des utilisateurs
- CRUD complet avec gestion des rôles
- Statistiques par rôle
- Filtrage et recherche

### 🚚 Gestion des livraisons
- Attribution automatique/manuelle des livreurs
- Carte en temps réel avec position GPS
- Upload de preuve de livraison (photo/signature)
- Historique complet des livraisons

### 🛒 Gestion du panier
- Ajout/Suppression d'articles
- Mise à jour des quantités
- Calcul automatique du total avec taxes

---

## Architecture

L'application suit une architecture modulaire et scalable :

```
src/app/
├── core/                      # Services singleton et fonctionnalités core
│   ├── auth/                 # Logique d'authentification
│   ├── guards/               # Route guards (auth, role)
│   ├── interceptors/         # HTTP interceptors (auth, error)
│   ├── models/               # Interfaces TypeScript (strictement typées)
│   └── services/             # Services API (8 services principaux)
│
├── shared/                   # Composants, directives, pipes partagés
│   ├── components/           # Composants réutilisables
│   ├── directives/           # Directives personnalisées
│   └── pipes/                # Pipes de transformation
│
├── features/                 # Modules fonctionnels (lazy-loaded)
│   ├── auth/                # Module d'authentification
│   ├── dashboard/           # Tableau de bord avec KPIs
│   ├── products/            # Gestion des produits
│   ├── orders/              # Gestion des commandes
│   ├── categories/          # Gestion des catégories
│   ├── users/               # Gestion des utilisateurs
│   ├── deliveries/          # Gestion des livraisons
│   └── cart/                # Gestion du panier
│
└── layout/                  # Layout principal (sidebar, navbar, footer)
```

### Principes architecturaux

✅ **Separation of Concerns** - Chaque module a sa responsabilité propre
✅ **Lazy Loading** - Modules chargés à la demande pour optimiser les performances
✅ **Reactive Programming** - RxJS pour la gestion d'état asynchrone
✅ **Type Safety** - TypeScript strict mode activé (pas de `any`)
✅ **DRY** - Réutilisation maximale du code
✅ **SOLID Principles** - Code maintenable et extensible

---

## Technologies utilisées

### Core
- **Angular 18** - Framework frontend moderne
- **TypeScript 5** - Langage de programmation typé
- **RxJS** - Programmation réactive

### UI/UX
- **Angular Material 18** - Composants UI Material Design
- **Chart.js + ng2-charts 6** - Graphiques interactifs
- **ngx-toastr 19** - Notifications toast élégantes
- **SCSS** - Préprocesseur CSS

### Outils
- **Angular CLI 18** - CLI officiel
- **Prettier** - Formatage automatique du code
- **ESLint** - Analyse statique TypeScript

---

## Installation rapide

```bash
# Installer Angular CLI globalement
npm install -g @angular/cli@18

# Installer les dépendances
npm install

# Lancer le serveur de développement
ng serve

# Avec proxy (recommandé pour éviter CORS)
ng serve --proxy-config proxy.conf.json
```

**L'application sera accessible sur** : http://localhost:4200

Pour une installation complète (backend + frontend), consultez **[INSTALLATION.md](../INSTALLATION.md)**

---

## Structure du projet

### Core Services (8 services API)

Tous dans `src/app/core/services/` :

| Service | Description |
|---------|-------------|
| `auth.service.ts` | Authentification (login, register, logout, getCurrentUser) |
| `product.service.ts` | CRUD produits + variantes |
| `category.service.ts` | CRUD catégories |
| `order.service.ts` | CRUD commandes + statuts |
| `cart.service.ts` | Gestion complète du panier |
| `user.service.ts` | CRUD utilisateurs + stats rôles |
| `delivery.service.ts` | Gestion livraisons + carte GPS |
| `dashboard.service.ts` | KPIs, graphiques, statistiques |
| `payment.service.ts` | Paiements Stripe |

### Guards & Interceptors

#### Guards (`core/guards/`)
- **auth.guard.ts** - Protège les routes authentifiées
- **role.guard.ts** - Vérifie les rôles utilisateur

Utilisation :
```typescript
{
  path: 'admin',
  canActivate: [authGuard, roleGuard],
  data: { roles: ['ADMIN', 'MANAGER'] },
  loadChildren: () => import('./features/admin/admin.routes')
}
```

#### Interceptors (`core/interceptors/`)
- **auth.interceptor.ts** - Ajoute automatiquement le token JWT aux requêtes
- **error.interceptor.ts** - Gestion globale des erreurs HTTP (401, 403, 422, 500)

### Modèles TypeScript (`core/models/models.ts`)

Interfaces strictement typées pour :
- **Entités** : User, Product, ProductVariant, Category, Order, OrderItem, Cart, CartItem, Payment, DeliveryGeolocation
- **Réponses API** : ApiResponse<T>, PaginatedResponse<T>, ErrorResponse
- **Requêtes** : LoginRequest, RegisterRequest, CreateProductRequest, etc.
- **Dashboard** : DashboardKPIs, SalesDataPoint, TopProduct, OrderStatusDistribution

---

## Conventions de code

### TypeScript Strict Mode ✅

Mode strict activé dans `tsconfig.json` :
```json
{
  "strict": true,
  "noImplicitAny": true,
  "strictNullChecks": true
}
```

**Interdictions** :
- ❌ Pas de type `any`
- ❌ Pas de null/undefined implicites
- ❌ Pas de code non typé

### Nommage

- **Fichiers** : kebab-case (`user.service.ts`, `product-list.component.ts`)
- **Classes** : PascalCase (`UserService`, `ProductListComponent`)
- **Variables/Méthodes** : camelCase (`currentUser`, `getProducts()`)
- **Constantes** : SCREAMING_SNAKE_CASE (`API_URL`, `MAX_ITEMS`)
- **Observables** : suffixe `$` (`user$`, `products$`)

### RxJS Best Practices

Toujours se désabonner ou utiliser `async` pipe :

```typescript
// ✅ Option 1 : async pipe (recommandé)
products$ = this.productService.getAll();

// ✅ Option 2 : takeUntil + destroy$
private destroy$ = new Subject<void>();

ngOnInit() {
  this.service.getData()
    .pipe(takeUntil(this.destroy$))
    .subscribe(data => { });
}

ngOnDestroy() {
  this.destroy$.next();
  this.destroy$.complete();
}
```

---

## Scripts disponibles

```bash
# Développement
npm start                               # Équivalent à ng serve
ng serve                               # Serveur de dev sur http://localhost:4200
ng serve --proxy-config proxy.conf.json # Avec proxy (évite CORS)
ng serve --port 4201                   # Sur un port différent

# Build
ng build                               # Build de développement
ng build --configuration production    # Build de production (optimisé)

# Tests
ng test                                # Tests unitaires (Karma + Jasmine)
ng test --code-coverage                # Tests avec couverture de code

# Génération de code
ng generate component features/mon-module/components/list
ng generate service core/services/mon-service
ng generate guard core/guards/mon-guard
ng generate interceptor core/interceptors/mon-interceptor

# Analyse
ng build --stats-json                  # Génère stats.json
# Ensuite analyser avec webpack-bundle-analyzer
```

---

## Documentation

### Documentation complète

- **[INSTALLATION.md](../INSTALLATION.md)** - Guide d'installation complet (backend + frontend)
- **[API_DOCUMENTATION.md](../API_DOCUMENTATION.md)** - Documentation complète de l'API Laravel
- **Angular Docs** : https://angular.io/docs
- **Angular Material** : https://material.angular.io

### Structure de l'API Backend

L'application consomme une API Laravel Sanctum sur `http://localhost:8000/api`

Endpoints principaux :
- `POST /login` - Connexion
- `POST /register` - Inscription
- `GET /products` - Liste des produits
- `GET /orders` - Liste des commandes
- `GET /dashboard/kpis` - KPIs du dashboard
- ...et bien plus (voir API_DOCUMENTATION.md)

### Environnements

Configurez `src/environments/environment.ts` :

```typescript
export const environment = {
  production: false,
  apiUrl: 'http://localhost:8000/api', // ← URL de votre backend Laravel
  appName: 'Shopecart Admin',
  version: '1.0.0'
};
```

---

## Déploiement

### Build de production

```bash
ng build --configuration production
```

Les fichiers optimisés sont dans `dist/angular-admin/browser/`

### Configuration serveur

#### Nginx
```nginx
server {
  listen 80;
  server_name admin.shopecart.com;
  root /var/www/angular-admin/browser;
  index index.html;

  location / {
    try_files $uri $uri/ /index.html;
  }
}
```

#### Variables d'environnement production

Éditez `src/environments/environment.prod.ts` :
```typescript
export const environment = {
  production: true,
  apiUrl: 'https://api.shopecart.com/api',
  appName: 'Shopecart Admin',
  version: '1.0.0'
};
```

---

## Support & Contribution

### Obtenir de l'aide

1. Consultez [INSTALLATION.md](../INSTALLATION.md) pour les problèmes d'installation
2. Consultez [API_DOCUMENTATION.md](../API_DOCUMENTATION.md) pour les endpoints API
3. Ouvrez une issue sur GitHub
4. Contactez l'équipe de développement

### Contribuer

1. Fork le projet
2. Créer une branche feature (`git checkout -b feature/ma-fonctionnalite`)
3. Commit les changements (`git commit -m 'Ajout de ma fonctionnalité'`)
4. Push vers la branche (`git push origin feature/ma-fonctionnalite`)
5. Ouvrir une Pull Request

---

## Licence

MIT License - Voir le fichier [LICENSE](../LICENSE) pour plus de détails.

---

**Construit avec ❤️ par l'équipe Shopecart**
