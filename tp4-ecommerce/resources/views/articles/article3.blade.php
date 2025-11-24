<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Createurs de souvenirs</title>
  <link rel="stylesheet" href="{{ asset('assets/css/article.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
  <!-- Utilisation de Font Awesome pour les icônes -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inria+Serif&display=swap');
  </style>
  <script defer src="{{ asset('assets/js/newsletter.js') }}"></script>
 
  <script src="{{ asset('assets/js/header.js') }}"></script>
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
          <!-- Checkbox pour le sous-menu des catégories -->
          <label for="categories-toggle">
            Catégories <span class="dropdown-arrow">▼</span>
          </label>
          <div class="dropdown-content">
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

      <div class="search-bar"  id="searchBar">
        <input type="text" placeholder="Rechercher un produit..." class="search-input">
      </div>

      <div class="user-actions"  id="userActions">
        <a href="/account.html" class="account-icon"><i class="fa-regular fa-user"></i> <span>Mon Compte</span></a>
        <a href="/panier.html" class="cart-icon"><i class="fas fa-shopping-cart"></i> <span>Panier</span> <span
            class="cart-count">3</span></a>
      </div>
    </nav>

    <!-- Overlay pour fermer le menu (utilise l'ancre) -->
    <a href="#" class="overlay" id="overlay"></a>
  </header>
<main class="article-content">
    <a href="/Blog.html" class="back-to-blog">
      <i class="fas fa-arrow-left"></i> Retour au blog
    </a>

    <article class="article-header">
      <h1>Les créateurs de souvenirs</h1>
      <div class="date">
        <i class="far fa-calendar"></i> Publié le 3 octobre 2025
      </div>
      <div class="author">
        <i class="far fa-user"></i> Par l'équipe Shopcart
      </div>
    </article>

    <img src="/assets/images/laptopcamera.jpg" alt="Appareils photo et équipement de création" class="article-featured-image">

    <p>Afin de capturer les moments qui comptent, notre gamme de caméras est là pour vous accompagner. Que ce soit pour immortaliser un coucher de soleil, un anniversaire en famille ou une aventure en voyage, une caméra de qualité transforme chaque instant en un souvenir précieux.</p>

    <h2>Des caméras pour tous les besoins</h2>
    <p>Des appareils photo reflex pour les passionnés aux caméras compactes pour les débutants, notre sélection couvre tous les profils. Les modèles comme le Canon EOS R5 offrent une qualité d'image exceptionnelle avec des vidéos en 8K, tandis que les caméras instantanées Fujifilm Instax apportent une touche rétro amusante.</p>

    <blockquote>
      "Une image vaut mille mots, mais une photo de qualité raconte toute une histoire."
    </blockquote>

    <h3>Comment choisir sa caméra ?</h3>
    <ul>
      <li><strong>Débutants :</strong> Caméras compactes ou hybrides entry-level</li>
      <li><strong>Amateurs :</strong> Hybrides polyvalentes comme la Sony A7 III</li>
      <li><strong>Professionnels :</strong> Reflex ou hybrides haut de gamme</li>
      <li><strong>Vloggers :</strong> Caméras légères avec bon autofocus et stabilisation</li>
    </ul>

    <h2>Technologie au service de la créativité</h2>
    <p>Avec des fonctionnalités comme la mise au point automatique ultra-rapide et les modes nocturnes avancés, capturer des images nettes n'a jamais été aussi simple. Ajoutez à cela des accessoires comme des trépieds ou des objectifs interchangeables, et laissez libre cours à votre créativité.</p>

    <h3>Notre sélection créative</h3>
    <ol>
      <li>Canon EOS R5 - L'excellence professionnelle</li>
      <li>Sony A7 IV - Le polyvalent haute performance</li>
      <li>Fujifilm X-T5 - Le rétro moderne</li>
      <li>GoPro Hero 12 - L'aventure en action</li>
      <li>Instax Mini 12 - L'instantané magique</li>
    </ol>

    <p>Chez Shopcart, nous avons les outils pour faire de chaque moment un chef-d'œuvre. Parcourez notre collection de caméras et commencez à créer des souvenirs qui dureront toute une vie. Notre équipe d'experts est disponible pour vous conseiller selon votre niveau et vos projets.</p>

    <blockquote>
      "La meilleure caméra n'est pas la plus chère, mais celle qui vous donne envie de créer tous les jours."
    </blockquote>

    <div style="margin-top: 50px; padding-top: 30px; border-top: 2px solid #e5e7eb;">
      <a href="/Blog.html" class="back-to-blog">
        <i class="fas fa-arrow-left"></i> Retour au blog
      </a>
    </div>
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