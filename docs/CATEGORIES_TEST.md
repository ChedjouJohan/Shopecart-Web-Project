# 🛍️ Tests d'Endpoints API des Catégories (`CategoryController`)

Ce document contient les commandes cURL pour tester les endpoints de l'API de gestion des catégories.

**Prérequis :**

  * Le serveur API doit être accessible à `http://localhost:8000`.
  * Vous devez obtenir un jeton d'authentification pour un utilisateur ayant le rôle **ADMIN**.

## 🔑 Jeton d'Authentification (Admin)

Nous allons utiliser le jeton généré précédemment pour l'utilisateur ADMIN.

> **Rappel :** Ce jeton est un exemple. Remplacez `[VOTRE_JETON_ADMIN]` par un jeton valide obtenu via la route `/api/login`.

```bash
# Exemple de Jeton Admin (à remplacer)
ADMIN_TOKEN="10|LLjJ9ThgAfay4pKRmXHoDk9gVsfsYLnfK3VDLKls6ea3acd9"
```

## 1\. Tests d'Accès Public (Lecture)

Ces routes sont accessibles à tous (non authentifiés).

### 1.1. Récupérer toutes les catégories (`GET /api/categories`)

```bash
curl -X 'GET' \
  'http://localhost:8000/api/categories' \
  -H 'accept: application/json'
```

### 1.2. Récupérer les détails d'une catégorie spécifique (`GET /api/categories/{id}`)

> **NOTE :** Remplacez `1` par l'ID d'une catégorie existante.

```bash
curl -X 'GET' \
  'http://localhost:8000/api/categories/1' \
  -H 'accept: application/json'
```

### 1.3. Récupérer les produits d'une catégorie (`GET /api/categories/{id}/products`)

> **NOTE :** Remplacez `1` par l'ID d'une catégorie existante.

```bash
curl -X 'GET' \
  'http://localhost:8000/api/categories/1/products?per_page=5' \
  -H 'accept: application/json'
```

-----

## 2\. Tests d'Accès Administrateur (Gestion)

Ces routes nécessitent le jeton `ADMIN_TOKEN`.

### 2.1. Créer une nouvelle catégorie (`POST /api/categories`)

Ceci utilise l'encodage `multipart/form-data` pour envoyer des données et un fichier image (facultatif).

```bash
# Assurez-vous d'avoir un fichier image (ex: 'test_image.jpg') dans votre répertoire de travail
curl -X 'POST' \
  'http://localhost:8000/api/categories' \
  -H 'accept: application/json' \
  -H "Authorization: Bearer ${ADMIN_TOKEN}" \
  -F 'name=Appareils Photo' \
  -F 'description=Appareils et accessoires de photographie' \
  -F 'position=10' \
  -F 'image=@/chemin/vers/votre/test_image.jpg' # OPTIONNEL : Chemin d'accès à l'image
```

### 2.2. Mettre à jour une catégorie existante (`POST /api/categories/{id}`)

La mise à jour d'une catégorie avec support de fichier nécessite la méthode `POST` avec l'entête `_method: PUT`.

> **NOTE :** Remplacez `2` par l'ID de la catégorie à mettre à jour.

#### A. Mise à jour du nom et de la description (sans changer l'image)

```bash
curl -X 'POST' \
  'http://localhost:8000/api/categories/2' \
  -H 'accept: application/json' \
  -H "Authorization: Bearer ${ADMIN_TOKEN}" \
  -F '_method=PUT' \
  -F 'name=Appareils Photo Pro' \
  -F 'description=Description mise à jour pour les professionnels' \
  -F 'position=5'
```

#### B. Mise à jour avec suppression de l'image

```bash
curl -X 'POST' \
  'http://localhost:8000/api/categories/2' \
  -H 'accept: application/json' \
  -H "Authorization: Bearer ${ADMIN_TOKEN}" \
  -F '_method=PUT' \
  -F 'name=Appareils Photo Pro (Sans Image)' \
  -F 'remove_image=true'
```

#### C. Mise à jour avec remplacement de l'image

```bash
# Assurez-vous d'avoir un fichier image (ex: 'nouvelle_image.png')
curl -X 'POST' \
  'http://localhost:8000/api/categories/2' \
  -H 'accept: application/json' \
  -H "Authorization: Bearer ${ADMIN_TOKEN}" \
  -F '_method=PUT' \
  -F 'name=Appareils Photo Pro (Nouvelle Image)' \
  -F 'image=@/chemin/vers/votre/nouvelle_image.png'
```

### 2.3. Supprimer une catégorie (`DELETE /api/categories/{id}`)

> **ATTENTION :** Assurez-vous de supprimer une catégorie qui n'a **PAS** de produits associés pour éviter l'erreur `422`. Remplacez `3` par l'ID de la catégorie à supprimer.

```bash
curl -X 'DELETE' \
  'http://localhost:8000/api/categories/3' \
  -H 'accept: application/json' \
  -H "Authorization: Bearer ${ADMIN_TOKEN}"
```****

-----

## 3\. Test d'Accès Non-Admin (Restriction `403 Forbidden`)

Vérification que les routes de gestion sont bien protégées.

### 3.1. Tentative de création par un utilisateur non authentifié

```bash
curl -X 'POST' \
  'http://localhost:8000/api/categories' \
  -H 'accept: application/json' \
  -F 'name=Catégorie Tentative'
# Réponse attendue : 401 Unauthenticated
```

### 3.2. Tentative de création par un utilisateur CLIENT (supposé)

> **NOTE :** Ceci nécessite un jeton valide pour un rôle non-Admin (ex: CLIENT).

```bash
# CLIENT_TOKEN="..."
curl -X 'POST' \
  'http://localhost:8000/api/categories' \
  -H 'accept: application/json' \
  -H "Authorization: Bearer [CLIENT_TOKEN]" \
  -F 'name=Catégorie Tentative Client'
# Réponse attendue : 403 Access denied. Admin role required.
```