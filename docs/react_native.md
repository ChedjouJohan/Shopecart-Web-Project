## 🚚 Endpoints API pour l'Application Livreur (React Native)

| Catégorie | Méthode | Endpoint | Contrôleur | Rôle / Fonctionnalité Mobile |
| :--- | :--- | :--- | :--- | :--- |
| **Authentification & Profil** | `POST` | `/api/login` | `AuthController@login` | Connexion du livreur (retourne le token JWT/Sanctum). |
| | `GET` | `/api/user` | `AuthController@user` | Récupération des informations de l'utilisateur connecté (pour vérifier le rôle `DELIVERY`). |
| | `POST` | `/api/logout` | `AuthController@logout` | Déconnexion. |
| **Gestion des Livraisons** | `GET` | `/api/deliveries/my` | `DeliveryController@getMyDeliveries` | **Liste des livraisons assignées** (Commandes du jour pour le livreur). |
| | `GET` | `/api/orders/{order}` | `OrderController@show` | **Détails de la livraison** (Client, adresse, montant). |
| | `GET` | `/api/deliveries/pending` | `DeliveryController@getPendingDeliveries` | (Optionnel pour le self-assignement) Liste des livraisons prêtes non assignées. |
| | `POST` | `/api/deliveries/{order}/assign` | `DeliveryController@assignDelivery` | (Optionnel) Permet au livreur de s'assigner une commande en attente. |
| **Mise à Jour du Statut** | `PUT` | `/api/deliveries/{order}/status` | `DeliveryController@updateStatus` | **Mise à jour du statut** (`En route`, `En cours de livraison`, `Livré`, `Échec`). |
| **Preuve de Livraison** | `POST` | `/api/deliveries/{order}/proof` | `DeliveryController@uploadProof` | **Validation de livraison** : Téléchargement de la photo/signature/QR code de preuve. |
| | `GET` | `/api/deliveries/{order}/proof` | `DeliveryController@getProof` | Récupération de la preuve (pour historique ou vérification). |
| **Géolocalisation** | `POST` | `/api/deliveries/location` | `DeliveryController@updateLocation` | **Mise à jour de la position du livreur** (envoi régulier de LAT/LNG au serveur pour suivi temps réel). |
| | `GET` | `/api/deliveries/live/map` | `DeliveryController@getLiveLocation` | (Utilisé par l'interface Angular/Admin) Récupère la position en direct pour l'affichage sur carte. |

-----

## 🔎 Focus sur les Contrats API

Pour faciliter le développement de l'application React Native, il est crucial de savoir ce que l'API attend et retourne pour les endpoints principaux :

### 1\. ⚙️ `GET /api/deliveries/my` (Liste des Livraisons)

**Requête :** Authentification via `Authorization: Bearer <token>`
**Réponse (200 OK) :** Une liste d'objets commandes, incluant les informations essentielles (ID, numéro, statut, adresse de livraison, total, nom du client).

```json
[
  {
    "id": 101,
    "order_number": "ORD-12345",
    "status": "IN_DELIVERY",
    "customer_name": "Jean Dupont",
    "shipping_address": "15 Rue de la Paix",
    "shipping_city": "Paris",
    "total": 75.50
  },
  // ... autres commandes ...
]
```

### 2\. 🔄 `PUT /api/deliveries/{order}/status` (Mise à jour du Statut)

**Requête :**
| Paramètre | Type | Explication | Valeurs possibles |
| :--- | :--- | :--- | :--- |
| `status` | string | Le nouveau statut de la commande. | `SHIPPED`, `DELIVERED`, `FAILED` |

**Exemple de Body :**

```json
{
  "status": "DELIVERED"
}
```

### 3\. 📸 `POST /api/deliveries/{order}/proof` (Envoi de la Preuve)

**Requête :**
| Paramètre | Type | Explication |
| :--- | :--- | :--- |
| `proof_file` | file | Le fichier image (photo de preuve) ou la signature. |
| `proof_type` | string | Le type de preuve (ex: `PHOTO`, `SIGNATURE`, `QR`). |

**Exemple de Body (form-data) :**
`proof_file`: [Le fichier image]
`proof_type`: PHOTO

