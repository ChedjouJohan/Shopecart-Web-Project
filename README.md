# Shopecart Web Project — E-Commerce Full-Stack  
**Projet de Programmation Web — Semestre 1, 2025**  
**Ecole  Nationale Supérieure Polytechnique de Yaoundé— Département Informatique**  
**Groupe de 12 étudiants (E1 à E4) — Rotation des rôles**

---

## Aperçu du Projet

**Shopecart** est une **plateforme e-commerce moderne** spécialisée dans la vente d’appareils électroniques, d’accessoires et de gadgets high-tech.  
Le projet est structuré en **4 TPs progressifs**, permettant une montée en compétence complète :

| TP | Objectif | Technologies |
|----|---------|--------------|
| **TP1** | Site statique from scratch | HTML5, CSS3, Responsive Design |
| **TP2** | Interactions dynamiques | JavaScript (vanilla), `localStorage`, DOM |
| **TP3** | E-commerce avec CMS | WordPress + WooCommerce + Thème personnalisé |
| **TP4** | Backend full-stack API-first | **Laravel 11**, MySQL, Sanctum, Notifications, Tests |

---

## Objectifs Pédagogiques

- Maîtriser le **cycle complet de développement web**
- Appliquer les **bonnes pratiques Git** (branches, PR, messages clairs)
- Comprender l’**intégration frontend/backend**
- Gérer une **base de données relationnelle**
- Implémenter **authentification, panier, paiement simulé, notifications**
- Assurer **qualité via tests unitaires et d’intégration**

---

## Charte Graphique & UX

- **Palette** : `#1E40AF` (bleu primaire), `#F59E0B` (accent), `#F3F4F6` (fond)
- **Typographie** : `Inter` (Google Fonts) — `font-weight: 400, 600, 700`
- **Grille** : 12 colonnes, `max-width: 1280px`, mobile-first
- **Navigation** : Header fixe, menu burger < 768px
- **Accessibilité** : Contraste ≥ 4.5:1, `aria-label`, focus visible

> Voir `/docs/design-system.pdf` pour le guide complet

---

## Structure du Dépôt

```bash
shopecart-web-project/
├── assets/                 # Ressources communes
│   ├── css/                # Styles globaux
│   ├── js/                 # Scripts partagés
│   └── images/             # Logos, icônes, placeholders
│
├── tp/
│   ├── 1-static/           # Site statique (HTML/CSS)
│   ├── 2-js-dynamics/      # Panier, filtres, formulaires
│   ├── 3-cms-ecommerce/    # WordPress + WooCommerce
│   └── 4-laravel-full/     # API Laravel + Tests
│
├── docs/                   # Documentation
│   ├── figma/              # Maquettes interactives
│   ├── roadmap.md          # Répartition des tâches
│   └── design-system.pdf   # Charte graphique
│
├── .gitignore
├── README.md
└── LICENSE
```

---

## Installation & Démarrage Rapide

### Prérequis

| Outil | Version |
|------|--------|
| Git | `2.30+` |
| PHP | `8.1+` |
| Composer | `2.5+` |
| MySQL | `8.0+` |
| Node.js (optionnel) | `18+` |
| Navigateur | Chrome / Firefox (dernières versions) |

---

### Étapes par TP

#### TP1 & TP2 — Frontend statique
```bash
git checkout tp1-static
# ou
git checkout tp2-js-dynamics
open index.html
```

#### TP3 — CMS (WordPress)
```bash
git checkout tp3-cms
# 1. Installez XAMPP / Laragon
# 2. Créez DB `shopecart_cms`
# 3. Importez `/tp/3-cms-ecommerce/database/dump.sql`
# 4. Copiez le thème dans wp-content/themes/
# 5. Activez WooCommerce
```

#### TP4 — Laravel API (Backend)
```bash
git checkout tp4-laravel-full
cd tp/4-laravel-full

# 1. Copiez .env
cp .env.example .env

# 2. Installez les dépendances
composer install

# 3. Générez la clé
php artisan key:generate

# 4. Configurez la base
# DB_DATABASE=shopecart_tp4
# DB_USERNAME=root
# DB_PASSWORD=

# 5. Migrez & seedez
php artisan migrate --seed

# 6. Lancez le serveur
php artisan serve
# → http://localhost:8000
```

---

## Fonctionnalités TP4 (Laravel)

| Module | Fonctionnalités |
|-------|-----------------|
| **Auth** | Inscription, login, logout, rôles (`USER`, `ADMIN`) |
| **Produits** | CRUD, variantes (couleur, prix, stock), filtres, recherche |
| **Panier** | Ajout, mise à jour, suppression, persistance |
| **Commandes** | Création, statut, historique, total dynamique |
| **Paiement** | Simulation (4242... → succès) |
| **Notifications** | Emails automatiques (confirmation, échec, promo) via **Mailtrap** |
| **Admin** | Dashboard stats, gestion produits/commandes |
| **Tests** | PHPUnit ≥ 80% coverage |

> Voir `/tp/4-laravel-full/README_ROADMAP.md` pour la répartition détaillée

---

## Tests & Qualité

```bash
# Tous les tests
php artisan test

# Tests unitaires
php artisan test --filter=NotificationServiceTest

# Couverture
php artisan test --coverage-html coverage
```

> Objectif : **≥ 80% coverage** sur les contrôleurs et services

---

## Répartition des Tâches (TP4)

| Membre | Rôle | Responsabilité |
|--------|------|----------------|
| **A** | Architecture & Notifications | Setup Laravel, emails, events |
| **C** | Base de données | Migrations, modèles, seeders |
| **G** | Authentification | Sanctum, rôles, tokens |
| **D** | Produits | CRUD, variantes, filtres |
| **E** | Commandes | Cycle de vie, statuts |
| **I** | Panier & Paiement | API panier, paiement mock |
| **B** | Dashboard Admin | Stats, endpoints protégés |
| **F** | Remises & Rayons | Codes promo, organisation |
| **K** | Tests & Docs | PHPUnit, OpenAPI, Postman |

> **H, J, L** → TP3 (CMS) → **exclus du TP4**

---

## Intégration TP2 ↔ TP4

- **TP2** consomme **TP4 via `fetch()`**
- **CORS activé** sur Laravel
- **Tokens** stockés dans `localStorage`
- **Images** servies via `storage:link`

```js
// Exemple TP2
fetch('http://localhost:8000/api/v1/products')
  .then(r => r.json())
  .then(data => renderProducts(data));
```

---

## Contribution & Git Workflow

```bash
# 1. Créez une branche
git checkout -b feat/panier-api

# 2. Commitez souvent
git add .
git commit -m "feat: ajout endpoint POST /cart/items"

# 3. Push & PR
git push origin feat/panier-api
# → Ouvrez une Pull Request
```

> **Messages conventionnels** : `feat:`, `fix:`, `docs:`, `test:`, `refactor:`

---

## Difficultés & Solutions

| Problème | Solution |
|--------|---------|
| `Mail::fake()` ne capte pas `Mail::raw()` | → Utilisé `Mailable` + `app()` dans tests |
| CORS bloqué | → `fruitcake/laravel-cors` + `allowed_origins` |
| Images non chargées | → `php artisan storage:link` |
| Stock non décrémenté | → Transaction DB + événements |

---

## Documentation Complémentaire

- [`/docs/roadmap.md`](docs/roadmap.md) — Répartition complète
- [`/tp/4-laravel-full/README_ROADMAP.md`](tp/4-laravel-full/README_ROADMAP.md) — Détail TP4
- [`/docs/design-system.pdf`](docs/design-system.pdf) — Charte graphique
- [Figma](https://figma.com/file/...) — Maquettes interactives

---

## Évaluation

| Critère | Pondération |
|--------|-------------|
| Organisation Git | 20% |
| Contribution individuelle | 30% |
| Qualité technique | 30% |
| Présentation finale | 20% |

---

## Licence

```
MIT License

Copyright (c) 2025 Équipe Shopecart

Permission is hereby granted, free of charge, to any person obtaining a copy...
```

---

**Projet maintenu par l’équipe Shopecart 2025**  
**Contact** : `azangueleonel9@gmail.com`  
**Dépôt** : [github.com/Delmat237/shopecart-web-project](https://github.com/Delmat237/shopecart-web-project)

---
