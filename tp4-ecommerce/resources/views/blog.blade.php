<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopcart - Blog</title>
  <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/blog.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/article.css') }}">
  <script src="{{ asset('assets/js/header.js') }}"></script>
<script defer src="{{ asset('assets/js/newsletter.js') }}"></script>
<script src="{{ asset('assets/js/Blog.js') }}"></script>
 <!-- Utilisation de Font Awesome pour les icônes -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inria+Serif&display=swap');
  </style>
 
  <script src="/assets/js/header.js"></script>
</head>

<body>
 <!-- Header -->
  <header>
    <!-- Checkbox cachée pour contrôler le menu mobile -->
    <nav class="navbar">
      <div class="logo">
        <div class="logo-img">
          <a href="/index.html">
            <img src="/assets/images/shopcart-logo.png" alt="Shopcart Logo" class="logo-img">
          </a>
        </div>
        <span class="logo-text">Shopcart</span>
      </div>
      <!-- Hamburger icon comme label pour la checkbox -->
      <label for="menu-toggle" class="hamburger" id="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </label>

      <ul class="nav-links" id="navLinks">
        <li class="categories-dropdown">
          <!-- Label pour le sous-menu des catégories -->
          <label for="categories-toggle" class="categories-label" id="categoriesLabel">
            Catégories <span class="dropdown-arrow">▼</span>
          </label>
          <div class="dropdown-content" id="dropdownContent">
            <a href="/pages/products_ordi.html"><i class="fas fa-laptop"></i> Ordinateurs portables</a>
            <a href="/pages/products_tel.html"><i class="fas fa-mobile-alt"></i> Téléphones</a>
            <a href="/pages/product_casque.html"><i class="fas fa-headphones"></i> Casques & Écouteurs</a>
            <a href="#"><i class="fas fa-tablet-alt"></i> Tablettes</a>
            <a href="/pages/products_ordi.html"><i class="fas fa-desktop"></i> Ordinateurs de bureau</a>
            <a href="/pages/products_disk.html"><i class="fas fa-keyboard"></i> Périphériques</a>
            <a href="#"><i class="fas fa-microchip"></i> Composants PC</a>
            <a href="#"><i class="fas fa-print"></i> Imprimantes</a>
            <a href="/pages/products_manettes.html"><i class="fas fa-gamepad"></i> Gaming</a>
            <a href="/pages/products_cam.html"><i class="fas fa-tv"></i> Caméras</a>
          </div>
        </li>
        <li><a href="#">Promotions</a></li>
        <li><a href="/about.html">À propos</a></li>
        <li><a href="/Blog.html">Blog</a></li>
      </ul>

      <div class="search-bar" id="searchBar">
        <input type="text" placeholder="Rechercher un produit..." class="search-input">
      </div>

      <div class="user-actions" id="userActions">
        <!-- Bouton conditionnel Mon compte / Se connecter -->
        <a href="/account.html" class="account-icon" id="accountButton" style="display: none;">
          <i class="fa-regular fa-user"></i> <span>Mon Compte</span>
        </a>
        <a href="/login.html" class="account-icon" id="loginButton" style="display: none;">
          <i class="fa-regular fa-user"></i> <span>Se connecter</span>
        </a>

        <a href="/panier.html" class="cart-icon">
          <i class="fas fa-shopping-cart"></i> <span>Panier</span>
          <span class="cart-count"></span>
        </a>

        <!-- Dark Mode Toggle amélioré -->
        <button class="dark-mode-toggle" id="darkModeToggle" aria-label="Basculer le mode sombre">
          <i class="fas fa-moon"></i>
          <i class="fas fa-sun"></i>
          <span class="dark-mode-text">Mode sombre</span>
        </button>
      </div>
      </div>
    </nav>

    <!-- Overlay pour fermer le menu (utilise l'ancre) -->
    <a href="#" class="overlay" id="overlay"></a>
  </header>
   <!-- Contenu principal du Blog -->
  <main class="blog-container">
    <!-- Hero Section -->
    <section class="blog-hero">
      <div class="hero-overlay">
        <h1>Le Monde de l'Électronique</h1>
        <p>Découvrez nos guides, comparatifs et actualités pour choisir les meilleurs appareils électroniques</p>
      </div>
    </section>

    <!-- Section Intro -->
    <section class="blog-intro">
      <h2>Nos Derniers Articles</h2>
      <p>Restez informés sur les tendances tech, nos conseils d'experts et les meilleures offres du moment</p>
    </section>
    
    <!-- Grille des articles -->
    <section class="articles">
      <!-- Article 5 -->
    <article class="card">
      <img src="/assets/images/femmecasque.jpg" alt="Femme avec casque audio">
      <div class="card-content">
        <span class="card-category">Tech & Lifestyle</span>
        <h2><a href="/articles/article5.html">Avec nos amis électroniques</a></h2>
        <p>Les appareils électroniques sont devenus des acteurs incontournables...</p>
        <div class="card-meta">
          <span><i class="far fa-clock"></i> 5 min</span>
          <span><i class="far fa-calendar"></i> 2 Oct 2025</span>
          <button class="like-btn" data-article-id="5">
            <i class="far fa-heart"></i>
            <span class="like-count"></span>
          </button>
        </div>
        <a class="read-more" href="/articles/article5.html">Lire l'article</a>
      </div>
    </article>

    <!-- Article 3 -->
    <article class="card">
      <img src="/assets/images/laptopcamera.jpg" alt="Laptop et caméra">
      <div class="card-content">
        <span class="card-category">Photographie</span>
        <h2><a href="/articles/article3.html">Les créateurs de souvenirs</a></h2>
        <p>Afin de capturer les moments qui comptent...</p>
        <div class="card-meta">
          <span><i class="far fa-clock"></i> 7 min</span>
          <span><i class="far fa-calendar"></i> 28 Sep 2025</span>
          <button class="like-btn" data-article-id="3">
            <i class="far fa-heart"></i>
            <span class="like-count"></span>
          </button>
        </div>
        <a class="read-more" href="/articles/article3.html">Lire l'article</a>
      </div>
    </article>

    <!-- Article 4 -->
    <article class="card">
      <img src="/assets/images/bazar.jpg" alt="Appareils électroniques variés">
      <div class="card-content">
        <span class="card-category">Guide d'Achat</span>
        <h2><a href="/articles/article4.html">Comment choisir ses appareils indispensables ?</a></h2>
        <p>Les critères essentiels pour ne pas se tromper...</p>
        <div class="card-meta">
          <span><i class="far fa-clock"></i> 10 min</span>
          <span><i class="far fa-calendar"></i> 25 Sep 2025</span>
          <button class="like-btn" data-article-id="4">
            <i class="far fa-heart"></i>
            <span class="like-count"></span>
          </button>
        </div>
        <a class="read-more" href="/articles/article4.html">Lire l'article</a>
      </div>
    </article>

    <!-- Article 2 -->
    <article class="card">
      <img src="/assets/images/desktopjeuenligne.jpg" alt="Setup gaming">
      <div class="card-content">
        <span class="card-category">Gaming</span>
        <h2><a href="/articles/article2.html">Le divertissement sans limite</a></h2>
        <p>Les outils électroniques ne sont pas qu'à but professionnel...</p>
        <div class="card-meta">
          <span><i class="far fa-clock"></i> 6 min</span>
          <span><i class="far fa-calendar"></i> 20 Sep 2025</span>
          <button class="like-btn" data-article-id="2">
            <i class="far fa-heart"></i>
            <span class="like-count"></span>
          </button>
        </div>
        <a class="read-more" href="/articles/article2.html">Lire l'article</a>
      </div>
    </article>

    <!-- Article 1 -->
    <article class="card">
      <img src="/assets/images/fille.jpg" alt="Femme avec smartphone">
      <div class="card-content">
        <span class="card-category">Smartphones</span>
        <h2><a href="/articles/article1.html">Au sommet du monde des smartphones</a></h2>
        <p>Vous cherchez un smartphone performant ? Ne cherchez plus !...</p>
        <div class="card-meta">
          <span><i class="far fa-clock"></i> 8 min</span>
          <span><i class="far fa-calendar"></i> 15 Sep 2025</span>
          <button class="like-btn" data-article-id="1">
            <i class="far fa-heart"></i>
            <span class="like-count"></span>
          </button>
        </div>
        <a class="read-more" href="/articles/article1.html">Lire l'article</a>
      </div>
    </article>

    <!-- Article 6 -->
    <article class="card">
      <img src="/assets/images/casqueetmanette.jpg" alt="Casque et manette de jeu">
      <div class="card-content">
        <span class="card-category">Gaming</span>
        <h2><a href="/articles/article6.html">Immersion totale dans vos jeux</a></h2>
        <p>Casques VR, manettes et accessoires gaming...</p>
        <div class="card-meta">
          <span><i class="far fa-clock"></i> 5 min</span>
          <span><i class="far fa-calendar"></i> 10 Sep 2025</span>
          <button class="like-btn" data-article-id="6">
            <i class="far fa-heart"></i>
            <span class="like-count"></span>
          </button>
        </div>
        <a class="read-more" href="/articles/article6.html">Lire l'article</a>
      </div>
    </article>

    </section>
  </main>

  <!-- Footer -->
<footer>
  <!-- Section des avantages -->
  <div class="footer-top">
    <div class="benefits">
      <div class="benefit">
        <i class="fas fa-truck"></i>
        <p>Livraison à domicile</p>
      </div>
      <div class="benefit">
        <i class="fas fa-lock"></i>
        <p>Paiement sécurisé</p>
      </div>
      <div class="benefit">
        <i class="fas fa-undo"></i>
        <p>Retours faciles</p>
      </div>
      <div class="benefit">
        <i class="fas fa-headset"></i>
        <p>Support client 24/7</p>
      </div>
    </div>
  </div>

  <!-- Grille principale -->
  <div class="footer-container">
  
    <!-- Section Navigation Rapide -->
    <div class="footer-section">
      <h3>Navigation Rapide</h3>
      <ul>
        <li><a href=""">Deals</a></li>
        <li><a href="/about.html">About Us</a></li>
        <li><a href="/Blog.html">Blog</a></li>
        <li><a href="#">Promotions</a></li>
      </ul>
    </div>

    <!-- Section À propos -->
    <div class="footer-section about-section">
      <h3>À propos de Shopcart</h3>
      <p>Votre destination en ligne pour les meilleurs appareils électroniques. Qualité, prix compétitifs et service client exceptionnel.</p>
      <div class="social-links">
        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
      </div>
    </div>

    <!-- Section Boutique -->
    <div class="footer-section">
      <h3>Boutique</h3>
      <div class="shop-categories">
        <ul>
          <li><a href="/pages/products_tel.html">Smartphones</a></li>
          <li><a href="/pages/products_ordi.html">Ordinateurs</a></li>
          <li><a href="/pages/products_casque.html">Casques</a></li>
          <li><a href="/pages/products_disk.html">Accessoires</a></li>
        </ul>
      </div>
    </div>

    <!-- Section Newsletter et Contact -->
    <div class="footer-section">
      <h3>Restez Informé</h3>
      <div class="newsletter-section">
        <p>Inscrivez-vous à notre newsletter</p>
        <form id="newsletter-form" class="newsletter-form">
          <div class="input-container">
            <i class="far fa-envelope"></i>
            <input type="email" id="newsletter-email" placeholder="Votre email" required>
          </div>
          <button type="submit">S'inscrire</button>
        </form>
      </div>
      
      <div class="contact-info" style="margin-top: 20px;">
        <p><i class="fas fa-envelope"></i> business@shopcart.com</p>
        <p><i class="fas fa-phone"></i> +237 657450314</p>
        <p><i class="fas fa-map-marker-alt"></i> Yaoundé, Cameroun</p>
        <p><i class="fas fa-clock"></i> Lun-Sam: 8h-18h</p>
      </div>
    </div>
  </div>

  <!-- Séparateur -->
  <div class="footer-divider"></div>

  <!-- Footer bottom -->
  <div class="footer-bottom">
    <div class="payment-methods">
      <p>Nous acceptons</p>
      <div class="payment-icons">
        <i class="fab fa-cc-visa"></i>
        <i class="fab fa-cc-mastercard"></i>
        <i class="fab fa-cc-paypal"></i>
        <i class="fab fa-cc-apple-pay"></i>
      </div>
    </div>
    
    <p>© Copyright 2025 Shopcart. Tous droits réservés.</p>
    
    <div class="footer-links">
      <a href="/security.html">Confidentialité</a>
      <a href="/conditions.html">Conditions d'utilisation</a>
      <a href="/cookies.html">Mentions légales</a>
    </div>
  </div>
</footer>

</body>

</html>