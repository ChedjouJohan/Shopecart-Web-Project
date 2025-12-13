# Guide d'Installation - Shopecart E-Commerce

Ce guide vous accompagne dans l'installation complète de la plateforme e-commerce Shopecart, comprenant :
- **Backend**: Laravel 10 (API REST)
- **Frontend**: Angular 18 (Interface d'administration)

---

## 📋 Table des matières

1. [Prérequis](#prérequis)
2. [Installation du Backend Laravel](#installation-du-backend-laravel)
3. [Installation du Frontend Angular](#installation-du-frontend-angular)
4. [Configuration VSCode](#configuration-vscode)
5. [Lancement de l'application](#lancement-de-lapplication)
6. [Troubleshooting](#troubleshooting)

---

## Prérequis

### Backend Laravel
- **PHP** >= 8.1
- **Composer** >= 2.0
- **MySQL** >= 8.0 ou **PostgreSQL** >= 13
- **Node.js** >= 18.x (pour la compilation des assets)
- **Git**

### Frontend Angular
- **Node.js** >= 18.x
- **npm** >= 10.x
- **Angular CLI** >= 18.x

### Outils recommandés
- **VSCode** (éditeur de code)
- **Postman** ou **Thunder Client** (test d'API)
- **Git Bash** (Windows uniquement)

---

## Installation du Backend Laravel

### 1. Cloner le projet et basculer sur la branche Laravel

```bash
# Cloner le dépôt
git clone https://github.com/ChedjouJohan/Shopecart-Web-Project.git
cd Shopecart-Web-Project

# Basculer sur la branche Laravel backend
git checkout tp/4-laravel-full

# Accéder au dossier Laravel
cd tp4-ecommerce
```

### 2. Installer les dépendances PHP

```bash
composer install
```

Si vous rencontrez des erreurs de mémoire :
```bash
php -d memory_limit=-1 /usr/local/bin/composer install
```

### 3. Configuration de l'environnement

```bash
# Copier le fichier d'environnement d'exemple
cp .env.example .env

# Générer la clé de l'application
php artisan key:generate
```

### 4. Configurer la base de données

Éditez le fichier `.env` et configurez vos paramètres de base de données :

```env
# Configuration de la base de données
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=shopcart
DB_USERNAME=root
DB_PASSWORD=

# URLs de l'application
APP_URL=http://localhost:8000
FRONTEND_URL=http://localhost:4200

# Configuration Sanctum (pour l'authentification)
SANCTUM_STATEFUL_DOMAINS=localhost:4200
SESSION_DOMAIN=localhost

# Stripe (optionnel pour les paiements)
STRIPE_KEY=pk_test_xxxxx
STRIPE_SECRET=sk_test_xxxxx
```

### 5. Créer la base de données

#### MySQL
```bash
mysql -u root -p
```

```sql
CREATE DATABASE shopcart CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
EXIT;
```

#### PostgreSQL
```bash
psql -U postgres
```

```sql
CREATE DATABASE shopcart ENCODING 'UTF8';
\q
```

### 6. Exécuter les migrations et seeders

```bash
# Exécuter les migrations
php artisan migrate

# Remplir la base avec des données de test (optionnel)
php artisan db:seed
```

### 7. Créer le lien symbolique pour le storage

```bash
php artisan storage:link
```

### 8. Configurer les permissions (Linux/Mac uniquement)

```bash
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

### 9. Lancer le serveur de développement Laravel

```bash
php artisan serve
```

Le backend sera accessible sur : **http://localhost:8000**

### 10. Tester l'API

#### Via curl
```bash
curl http://localhost:8000/api/products
```

#### Via Postman/Thunder Client
- **GET** `http://localhost:8000/api/products` (Liste des produits)
- **POST** `http://localhost:8000/api/register` (Créer un compte)
- **POST** `http://localhost:8000/api/login` (Se connecter)

### 11. Documentation API Swagger (optionnelle)

Si Swagger est configuré, accédez à :
```
http://localhost:8000/api/documentation
```

---

## Installation du Frontend Angular

### 1. Retourner à la racine du projet

```bash
cd /chemin/vers/Shopecart-Web-Project
```

### 2. Installer Angular CLI globalement

```bash
npm install -g @angular/cli@18
```

Vérifier l'installation :
```bash
ng version
```

### 3. Accéder au dossier Angular

```bash
cd angular-admin
```

### 4. Installer les dépendances npm

```bash
npm install
```

En cas d'erreurs de compatibilité :
```bash
npm install --legacy-peer-deps
```

### 5. Configuration de l'environnement

Le fichier de configuration est déjà créé dans `src/environments/environment.ts` :

```typescript
export const environment = {
  production: false,
  apiUrl: 'http://localhost:8000/api',
  appName: 'Shopecart Admin',
  version: '1.0.0'
};
```

**Important** : Si votre backend Laravel tourne sur un port différent, modifiez `apiUrl` en conséquence.

### 6. Lancer le serveur de développement Angular

#### Sans proxy (CORS doit être configuré sur Laravel)
```bash
ng serve
```

#### Avec proxy (recommandé pour éviter les problèmes CORS)
```bash
ng serve --proxy-config proxy.conf.json
```

L'application sera accessible sur : **http://localhost:4200**

### 7. Build de production

```bash
ng build --configuration production
```

Les fichiers compilés seront dans `dist/angular-admin/`

---

## Configuration VSCode

### Extensions recommandées pour Laravel

Créez `.vscode/extensions.json` dans le dossier `tp4-ecommerce` :

```json
{
  "recommendations": [
    "bmewburn.vscode-intelephense-client",
    "xdebug.php-debug",
    "amiralizadeh9480.laravel-extra-intellisense",
    "onecentlin.laravel-blade",
    "MehediDracula.php-namespace-resolver",
    "mikestead.dotenv"
  ]
}
```

### Extensions recommandées pour Angular

Les extensions sont déjà configurées dans `angular-admin/.vscode/extensions.json` :

```json
{
  "recommendations": [
    "angular.ng-template",
    "esbenp.prettier-vscode",
    "dbaeumer.vscode-eslint",
    "formulahendry.auto-rename-tag",
    "christian-kohler.path-intellisense",
    "eamodio.gitlens"
  ]
}
```

### Configuration de l'espace de travail VSCode

Créez `angular-admin/.vscode/settings.json` :

```json
{
  "editor.formatOnSave": true,
  "editor.defaultFormatter": "esbenp.prettier-vscode",
  "editor.codeActionsOnSave": {
    "source.fixAll.eslint": "explicit"
  },
  "typescript.preferences.importModuleSpecifier": "relative",
  "files.eol": "\n"
}
```

---

## Lancement de l'application

### Démarrage complet (backend + frontend)

#### Terminal 1 : Laravel
```bash
cd tp4-ecommerce
php artisan serve
```

#### Terminal 2 : Angular
```bash
cd angular-admin
ng serve --proxy-config proxy.conf.json
```

### Accès à l'application

- **Frontend Admin** : http://localhost:4200
- **Backend API** : http://localhost:8000/api
- **Documentation API** : http://localhost:8000/api/documentation (si Swagger configuré)

### Comptes de test (si seeders exécutés)

Après avoir exécuté `php artisan db:seed`, vous aurez probablement ces comptes :

```
Admin:
Email: admin@shopcart.com
Password: password

Vendor:
Email: vendor@shopcart.com
Password: password

Customer:
Email: customer@shopcart.com
Password: password
```

---

## Troubleshooting

### Problèmes Laravel

#### Erreur "SQLSTATE[HY000] [2002] Connection refused"
- Vérifiez que MySQL/PostgreSQL est démarré
- Vérifiez les credentials dans `.env`
- Testez la connexion : `mysql -u root -p`

#### Erreur "Class 'X' not found"
```bash
composer dump-autoload
php artisan config:clear
php artisan cache:clear
```

#### Erreur "The stream or file could not be opened"
```bash
chmod -R 775 storage
chmod -R 775 bootstrap/cache
```

#### CORS Errors
Vérifiez le fichier `config/cors.php` :

```php
'allowed_origins' => ['http://localhost:4200'],
'allowed_methods' => ['*'],
'allowed_headers' => ['*'],
'supports_credentials' => true,
```

### Problèmes Angular

#### Erreur "ng: command not found"
```bash
npm install -g @angular/cli@18
```

#### Port 4200 déjà utilisé
```bash
ng serve --port 4201
```

#### Erreurs de dépendances npm
```bash
rm -rf node_modules package-lock.json
npm install --legacy-peer-deps
```

#### CORS lors des appels API
- Utilisez le proxy : `ng serve --proxy-config proxy.conf.json`
- Ou configurez CORS sur Laravel (voir ci-dessus)

#### Erreur "Cannot find module '@angular/material'"
```bash
npm install @angular/material@18 @angular/cdk@18 --legacy-peer-deps
```

### Problèmes de base de données

#### Reset complet de la base
```bash
php artisan migrate:fresh --seed
```

⚠️ **Attention** : Cela supprime toutes les données !

### Problèmes de performance

#### Laravel lent
```bash
# Optimiser l'application
php artisan config:cache
php artisan route:cache
php artisan view:cache

# En développement, pour désactiver les caches :
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

#### Angular lent en développement
- Activez le cache npm : `npm config set cache ~/.npm-cache`
- Utilisez `ng serve --hmr` pour le Hot Module Replacement

---

## Notes importantes

### Sécurité

1. **Ne committez JAMAIS le fichier `.env`** (déjà dans `.gitignore`)
2. Changez toutes les clés secrètes en production
3. Utilisez HTTPS en production
4. Configurez des mots de passe forts pour la base de données

### Performance

1. Activez les caches en production (Laravel)
2. Utilisez `ng build --configuration production` pour Angular
3. Configurez un CDN pour les assets statiques
4. Activez la compression GZIP sur le serveur

### Développement

1. Utilisez des branches Git pour les nouvelles fonctionnalités
2. Testez toujours avant de commit
3. Suivez les conventions de code (PSR-12 pour PHP, Angular Style Guide)
4. Documentez votre code

---

## Commandes utiles

### Laravel
```bash
# Lancer les tests
php artisan test

# Lister les routes
php artisan route:list

# Créer un controller
php artisan make:controller NomController

# Créer un model avec migration
php artisan make:model NomModel -m

# Exécuter les migrations
php artisan migrate

# Rollback migrations
php artisan migrate:rollback
```

### Angular
```bash
# Générer un composant
ng generate component features/nom-composant

# Générer un service
ng generate service core/services/nom-service

# Lancer les tests
ng test

# Build de production
ng build --configuration production

# Analyser la taille du bundle
ng build --stats-json
npm install -g webpack-bundle-analyzer
webpack-bundle-analyzer dist/angular-admin/stats.json
```

---

## Support

Pour toute question ou problème :

1. Consultez la documentation Laravel : https://laravel.com/docs
2. Consultez la documentation Angular : https://angular.io/docs
3. Ouvrez une issue sur GitHub
4. Contactez l'équipe de développement

---

## Licence

MIT License - Voir le fichier `LICENSE` pour plus de détails.
