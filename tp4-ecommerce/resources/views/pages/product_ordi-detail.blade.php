
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="page-title">Détail Produit | Shopcart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/products_disk.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
    
</head>
@extends('layouts.app')

@section('title', 'Produit- Shopecart')

@section('content')
<body>

<main class="main-content-container">

    <!-- DÉTAIL PRODUIT -->
    <div class="product-detail-container">
        <div class="product-detail-flex">
            <!-- Galerie d'images (DYNAMIQUE) -->
            <div class="product-detail-left">
                <div class="image-gallery-box">
                    <div class="main-product-image">
                        <img id="main-image" src="" alt="Produit principal">
                    </div>
                    <div class="thumbnail-row" id="thumbnail-container">
                        <!-- Les miniatures seront générées par JS -->
                    </div>
                </div>
            </div>

            <!-- Informations produit -->
            <div class="product-detail-right">
                <div class="product-info-box">
                    <div class="new-tag-wrapper">
                        <span class="new-tag">Premium</span>
                    </div>
                    <h1 class="product-title">Produit</h1>
                    <p class="product-subtitle">Chargement.</p>
                    
                    <div class="rating-info">
                        <div class="stars-list">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="rating-text">(0 avis)</span>
                    </div>

                    <div class="price-info">
                        <span class="main-price">0 FCFA</span>
                        <span class="tax-info">TTC</span>
                    </div>

                    <div class="color-selection-area">
                        <h3 class="color-selection-title">Couleur</h3>
                        <div class="color-options-row">
                            <div class="color-option active" data-color="Argent" style="background-color: #C0C0C0;"></div>
                            <div class="color-option" data-color="Noir" style="background-color: #000000;"></div>
                            <div class="color-option" data-color="Blanc" style="background-color: #FFFFFF;"></div>
                            <div class="color-option" data-color="Bleu" style="background-color: #0000FF;"></div>
                        </div>
                        <span class="selected-color-text">Couleur sélectionnée : <span id="selected-color">Argent</span></span>
                    </div>

                    <div class="quantity-cart-area">
                        <div class="quantity-control">
                            <label class="quantity-label">Quantité</label>
                            <div class="quantity-buttons-wrapper">
                                <button class="quantity-btn"><i class="fas fa-minus"></i></button>
                                <span class="quantity-display">1</span>
                                <button class="quantity-btn"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="action-buttons-row">
                        <button class="btn-buy"><i class="fas fa-credit-card icon-margin"></i> Acheter maintenant</button>
                        <button class="btn-add"><i class="fas fa-shopping-cart icon-margin"></i> Ajouter au panier</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- PRODUITS SIMILAIRES -->
<section class="products-section">
    <h2 class="section-title">
        <span class="gradient-blue-purple">Produits Similaires</span>
    </h2>
    <p class="section-subtitle">Découvrez d'autres options</p>

    <!-- GRILLE PRINCIPALE -->
    <div class="products-grid" id="similar-grid">
        <!-- Produits injectés par JS -->
    </div>

    <!-- PAGINATION -->
    <div class="pagination" id="similar-pagin"></div>
</section>
</main>

<!-- Scripts -->
<script src="{{ asset('assets/js/pagination-detail-ordi.js') }}"></script> 
 <script src="{{ asset('assets/js/carousel_auto.js') }}"></script>
    <script defer src="{{ asset('assets/js/newsletter.js') }}"></script>

      <!-- Utilisation de Font Awesome pour les icônes -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script defer src="{{ asset('assets/js/newsletter.js') }}"></script>
  <script src="{{ asset('assets/js/cart-manager.js') }}" defer></script>

  <script src="{{ asset('assets/js/header.js') }}"></script>
  </body>
@endsection