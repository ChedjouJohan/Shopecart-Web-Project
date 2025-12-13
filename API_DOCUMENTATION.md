# Documentation API Backend Laravel - Shopecart

## 📋 Informations générales

### Base URL
- **Développement**: `http://localhost:8000/api`
- **Production**: À définir

### Authentification
- **Type**: Laravel Sanctum (Token-based)
- **Header**: `Authorization: Bearer {token}`
- **Token**: Obtenu via `/login` ou `/register`

## 👥 Rôles et permissions

### Rôles disponibles
1. **ADMIN** - Accès complet à toutes les fonctionnalités
2. **MANAGER** - Gestion (dashboard, users, orders, deliveries)
3. **SUPERVISOR** - Supervision (dashboard, deliveries)
4. **VENDOR** - Gestion des produits et catégories
5. **DELIVERY** - Gestion des livraisons assignées
6. **CUSTOMER** - Client standard (commandes, panier)

### Restrictions par rôle
- **Routes publiques**: Produits (lecture), Catégories (lecture), Login, Register
- **Routes authentifiées**: Panier, Commandes personnelles, Profil
- **ADMIN/MANAGER/SUPERVISOR**: Dashboard, Gestion utilisateurs, Attribution livraisons
- **ADMIN/VENDOR**: CRUD Produits, CRUD Catégories

## 📦 Modèles de données

### User
```typescript
{
  id: number;
  name: string;
  email: string;
  role: 'ADMIN' | 'VENDOR' | 'CUSTOMER' | 'DELIVERY' | 'MANAGER' | 'SUPERVISOR';
  phone?: string;
  address?: string;
  created_at: string;
  updated_at: string;
}
```

### Product
```typescript
{
  id: number;
  category_id?: number;
  name: string;
  slug: string;
  description?: string;
  price: number;
  compare_price?: number;
  stock: number;
  sku?: string;
  barcode?: string;
  is_visible: boolean;
  is_featured: boolean;
  published_at?: string;
  image?: string;
  gallery?: string[];
  formatted_price: string; // Accessor
  has_discount: boolean; // Accessor
  discount_percentage?: number; // Accessor
  variants?: ProductVariant[];
  created_at: string;
  updated_at: string;
}
```

### ProductVariant
```typescript
{
  id: number;
  productId: number; // Note: camelCase dans le modèle
  name: string;
  sku: string;
  price: number;
  stock: number;
  color?: string;
  attributes?: object;
  image?: string;
  created_at: string;
  updated_at: string;
}
```

### Category
```typescript
{
  id: number;
  name: string;
  slug: string;
  description?: string;
  image?: string;
  is_visible: boolean;
  position: number;
  created_at: string;
  updated_at: string;
}
```

### Order
```typescript
{
  id: number;
  user_id: number;
  order_number: string;
  status: 'PENDING' | 'PROCESSING' | 'PAID' | 'SHIPPED' | 'DELIVERED' | 'CANCELED' | 'FAILED' | 'IN_DELIVERY' | 'ASSIGNED' | 'EN_ROUTE';
  subtotal: number;
  shipping: number;
  tax: number;
  discount?: number;
  total: number;
  customer_email: string;
  customer_name: string;
  customer_phone?: string;
  shipping_address: string;
  shipping_city: string;
  shipping_zipcode: string;
  shipping_country: string;
  billing_address?: string;
  billing_city?: string;
  billing_zipcode?: string;
  billing_country?: string;
  payment_method?: string;
  payment_status?: string;
  transaction_id?: string;
  shipping_method?: string;
  notes?: string;
  delivery_user_id?: number;
  proof_path?: string;
  proof_type?: string;
  processed_at?: string;
  completed_at?: string;
  cancelled_at?: string;
  items?: OrderItem[];
  created_at: string;
  updated_at: string;
}
```

### OrderItem
```typescript
{
  id: number;
  order_id: number;
  product_id: number;
  product_variant_id?: number;
  product_name: string;
  product_sku: string;
  quantity: number;
  unit_price: number;
  total: number;
}
```

### Cart
```typescript
{
  id: number;
  user_id?: number;
  session_id?: string;
  items_count: number;
  total: number;
  items?: CartItem[];
  created_at: string;
  updated_at: string;
}
```

### CartItem
```typescript
{
  id: number;
  cart_id: number;
  productVariantId: number; // Note: camelCase
  quantity: number;
  unit_price: number;
  total: number;
}
```

### Payment
```typescript
{
  id: number;
  order_id: number;
  amount: number;
  method: string;
  status: string;
  transaction_id?: string;
  created_at: string;
  updated_at: string;
}
```

### DeliveryGeolocation
```typescript
{
  id: number;
  user_id: number; // Delivery user
  latitude: number;
  longitude: number;
  updated_at: string;
}
```

## 🔌 Endpoints API

### Authentification

#### POST /register
Enregistrement d'un nouvel utilisateur.

**Body:**
```json
{
  "name": "John Doe",
  "email": "john@example.com",
  "password": "password123",
  "password_confirmation": "password123",
  "phone": "+237653982736",
  "address": "Yaounde, Cameroun"
}
```

**Response (201):**
```json
{
  "message": "Registered",
  "token": "1|xxxxx",
  "user": { ... }
}
```

#### POST /login
Connexion d'un utilisateur.

**Body:**
```json
{
  "email": "john@example.com",
  "password": "password123"
}
```

**Response (200):**
```json
{
  "message": "Login successful",
  "token": "2|xxxxx",
  "user": { ... }
}
```

#### POST /logout
Déconnexion (requiert authentification).

**Headers:** `Authorization: Bearer {token}`

**Response (200):**
```json
{
  "message": "Logged out"
}
```

#### GET /user
Obtenir l'utilisateur authentifié.

**Headers:** `Authorization: Bearer {token}`

**Response (200):**
```json
{
  "id": 1,
  "name": "John Doe",
  "email": "john@example.com",
  "role": "CUSTOMER",
  ...
}
```

#### POST /user/fcm-token
Mettre à jour le token FCM (notifications push).

**Headers:** `Authorization: Bearer {token}`

**Body:**
```json
{
  "fcm_token": "xxxxx"
}
```

### Produits

#### GET /products
Liste tous les produits (public avec filtres).

**Query params:**
- `page` (pagination)
- `category_id` (filtrer par catégorie)
- `featured` (produits mis en avant)
- `search` (recherche)

**Response (200):**
```json
{
  "data": [
    { ... }
  ],
  "meta": {
    "current_page": 1,
    "total": 100,
    ...
  }
}
```

#### GET /products/featured
Produits mis en avant (public).

#### GET /products/{id}
Détails d'un produit (public).

#### POST /products
Créer un produit (ADMIN/VENDOR uniquement).

**Headers:** `Authorization: Bearer {token}`

**Body:**
```json
{
  "name": "iPhone 15 Pro",
  "description": "...",
  "price": 999.99,
  "compare_price": 1099.99,
  "stock": 50,
  "category_id": 1,
  "is_visible": true,
  "is_featured": false,
  "image": "...",
  "sku": "IP15PRO256"
}
```

#### PUT /products/{id}
Mettre à jour un produit (ADMIN/VENDOR).

#### DELETE /products/{id}
Supprimer un produit (ADMIN/VENDOR).

#### GET /products/vendor/my-products
Mes produits (VENDOR).

#### GET /products/vendor/stats
Statistiques vendeur (VENDOR).

### Variantes de produits

#### GET /products/{id}/variants
Liste des variantes d'un produit.

#### POST /products/{id}/variants
Créer une variante (ADMIN/VENDOR).

**Body:**
```json
{
  "name": "iPhone 15 Pro - 256GB - Noir",
  "sku": "IP15PRO256BLK",
  "price": 999.99,
  "stock": 20,
  "color": "Noir",
  "attributes": {
    "storage": "256GB",
    "color": "Noir"
  }
}
```

#### PUT /variants/{id}
Mettre à jour une variante (ADMIN/VENDOR).

#### DELETE /variants/{id}
Supprimer une variante (ADMIN/VENDOR).

### Catégories

#### GET /categories
Liste toutes les catégories (public).

#### GET /categories/{id}
Détails d'une catégorie (public).

#### GET /categories/{id}/products
Produits d'une catégorie (public).

#### POST /categories
Créer une catégorie (ADMIN/VENDOR).

**Body:**
```json
{
  "name": "Électronique",
  "description": "...",
  "is_visible": true,
  "position": 1,
  "image": "..."
}
```

#### PUT /categories/{id}
Mettre à jour une catégorie (ADMIN/VENDOR).

#### DELETE /categories/{id}
Supprimer une catégorie (ADMIN/VENDOR).

### Panier

#### GET /cart
Obtenir le panier de l'utilisateur (authentifié).

#### POST /cart
Créer/récupérer un panier (authentifié).

#### POST /cart/add
Ajouter un article au panier (authentifié).

**Body:**
```json
{
  "productVariantId": 5,
  "quantity": 2
}
```

#### PUT /cart/items/{cartItem}
Mettre à jour la quantité d'un article (authentifié).

**Body:**
```json
{
  "quantity": 3
}
```

#### DELETE /cart/items/{cartItem}
Supprimer un article du panier (authentifié).

#### DELETE /cart/clear
Vider le panier (authentifié).

### Commandes

#### GET /orders
Liste toutes les commandes (ADMIN/MANAGER).

#### GET /orders/my
Mes commandes (authentifié).

#### GET /orders/{id}
Détails d'une commande (authentifié).

#### POST /orders
Créer une commande (authentifié).

**Body:**
```json
{
  "customer_name": "John Doe",
  "customer_email": "john@example.com",
  "customer_phone": "+237653982736",
  "shipping_address": "123 Main St",
  "shipping_city": "Yaoundé",
  "shipping_zipcode": "00000",
  "shipping_country": "Cameroun",
  "payment_method": "card",
  "items": [
    {
      "product_variant_id": 5,
      "quantity": 2,
      "unit_price": 999.99
    }
  ]
}
```

#### PUT /orders/{id}/status
Mettre à jour le statut d'une commande (ADMIN/MANAGER/SUPERVISOR).

**Body:**
```json
{
  "status": "SHIPPED"
}
```

### Utilisateurs

#### GET /users
Liste tous les utilisateurs (ADMIN/MANAGER/SUPERVISOR).

#### GET /users/{id}
Détails d'un utilisateur (ADMIN/MANAGER/SUPERVISOR).

#### POST /users
Créer un utilisateur (ADMIN/MANAGER/SUPERVISOR).

#### PUT /users/{id}
Mettre à jour un utilisateur (ADMIN/MANAGER/SUPERVISOR).

#### DELETE /users/{id}
Supprimer un utilisateur (ADMIN/MANAGER/SUPERVISOR).

#### GET /users/roles/stats
Statistiques par rôle (ADMIN/MANAGER/SUPERVISOR).

### Livraisons

#### GET /deliveries/my
Mes livraisons (DELIVERY).

#### GET /deliveries/pending
Commandes en attente d'attribution (ADMIN/MANAGER/SUPERVISOR).

#### POST /deliveries/{order}/assign
Attribuer une commande à un livreur (ADMIN/MANAGER/SUPERVISOR).

**Body:**
```json
{
  "delivery_user_id": 15
}
```

#### PUT /deliveries/{order}/status
Mettre à jour le statut de livraison (DELIVERY).

**Body:**
```json
{
  "status": "IN_DELIVERY"
}
```

#### POST /deliveries/location
Mettre à jour la position du livreur (DELIVERY).

**Body:**
```json
{
  "latitude": 3.8480,
  "longitude": 11.5021
}
```

#### POST /deliveries/{order}/proof
Uploader une preuve de livraison (DELIVERY).

**Body (multipart/form-data):**
```
proof: File
proof_type: "image" | "signature"
```

#### GET /deliveries/{order}/proof
Récupérer la preuve de livraison (authentifié).

#### GET /deliveries/live/map
Carte en temps réel des livreurs (ADMIN/MANAGER/SUPERVISOR).

#### GET /deliveries/history
Historique des livraisons (DELIVERY).

### Dashboard (KPIs)

#### GET /dashboard/kpis
Indicateurs clés de performance (ADMIN/MANAGER/SUPERVISOR).

**Response:**
```json
{
  "message": "KPIs retrieved successfully",
  "data": {
    "total_revenue": 125000.50,
    "total_orders": 520,
    "active_users": 300,
    "delivery_rate": 0.92,
    "orders_ready_to_ship": 20,
    "deliveries_in_progress": 5,
    "deliveries_successful": 478,
    "deliveries_failed": 2
  }
}
```

#### GET /dashboard/sales-over-time
Ventes dans le temps (ADMIN/MANAGER/SUPERVISOR).

**Query params:**
- `period`: "day" | "week" | "month" (default: "day")
- `days`: number (default: 30)

**Response:**
```json
{
  "message": "Sales data retrieved successfully",
  "data": [
    {
      "label": "2025-12-01",
      "revenue": 1500.50,
      "order_count": 10
    },
    ...
  ]
}
```

#### GET /dashboard/top-products
Produits les plus vendus (ADMIN/MANAGER/SUPERVISOR).

**Query params:**
- `limit`: number (default: 10)

**Response:**
```json
{
  "message": "Top selling products retrieved successfully",
  "data": [
    {
      "product_name": "iPhone 15 Pro",
      "total_quantity": 150,
      "total_revenue": 149998.50
    },
    ...
  ]
}
```

#### GET /dashboard/order-status-distribution
Distribution des statuts de commandes (ADMIN/MANAGER/SUPERVISOR).

**Response:**
```json
{
  "message": "Order status distribution retrieved successfully",
  "data": {
    "PENDING": 10,
    "PAID": 50,
    "DELIVERED": 400,
    "CANCELED": 5
  }
}
```

### Paiements

#### POST /payment/create-payment-intent/order/{orderId}
Créer une intention de paiement Stripe (authentifié).

#### POST /payment/registerPayment
Enregistrer un paiement (authentifié).

**Body:**
```json
{
  "order_id": 123,
  "amount": 999.99,
  "method": "card",
  "transaction_id": "pi_xxxxx"
}
```

## 🚨 Codes de réponse HTTP

- **200**: Succès
- **201**: Créé avec succès
- **400**: Mauvaise requête
- **401**: Non authentifié
- **403**: Accès interdit (permissions insuffisantes)
- **404**: Ressource non trouvée
- **422**: Erreur de validation
- **500**: Erreur serveur

## 📝 Notes importantes

1. **Authentification**: Tous les endpoints protégés nécessitent le header `Authorization: Bearer {token}`
2. **Pagination**: Laravel utilise la pagination par défaut avec les meta `current_page`, `total`, `per_page`, etc.
3. **Validation**: Les erreurs de validation (422) retournent les champs en erreur avec leurs messages
4. **CORS**: Assurez-vous que le backend autorise les requêtes depuis `http://localhost:4200` (Angular dev server)
5. **Soft Deletes**: Certains modèles utilisent le soft delete (Product notamment)
6. **Timestamps**: Tous les modèles incluent `created_at` et `updated_at` au format ISO 8601
