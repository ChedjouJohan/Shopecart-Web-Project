
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disques Durs & SSD | Shopcart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/products_disk.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
  <script defer src="{{ asset('assets/js/newsletter.js') }}"></script>
  <script src="{{ asset('assets/js/cart-manager.js') }}" defer></script>
  <script src="{{ asset('assets/js/header.js') }}"></script>
</head>
@extends('layouts.app')

@section('title', 'Produit- Shopecart')

@section('content')
<body class="body-bg">
 <section class="hero-banner">
     <input type="radio" name="slide" id="slide4clone">
     <input type="radio" name="slide" id="slide1" checked>
     <input type="radio" name="slide" id="slide2">
     <input type="radio" name="slide" id="slide3">
     <input type="radio" name="slide" id="slide4">
     <input type="radio" name="slide" id="slide1clone">
     <div class="carousel-container">
         <div class="slides" id="slides">
             <!-- Slide 4 Clone -->
             <div class="slide">
                 <label class="left-arrow" for="slide3"><strong>&#60</strong></label>
                 <div class="banner-content">
                     <h1>Stockage Fiable<br>Pour Vos Données<br>Professionnelles</h1>
                     <button class="btn-primary">Découvrir</button>
                 </div>
                 <div class="banner-image">
                     <img src="https://images.unsplash.com/photo-1597852074816-d933c7d2b988?w=600" alt="Banner Storage">
                 </div>
                 <label class="right-arrow" for="slide1"><strong>&#62</strong></label>
             </div>
             <!-- Slide 1 -->
             <div class="slide">
                 <label class="left-arrow" for="slide4clone"><strong>&#60</strong></label>
                 <div class="banner-content">
                     <h1>Jusqu'à 40% de Réduction<br>Sur les SSD NVMe<br>Performance Extrême</h1>
                     <button class="btn-primary">Acheter</button>
                 </div>
                 <div class="banner-image">
                     <img src="https://images.unsplash.com/photo-1591799264318-7e6ef8ddb7ea?w=600" alt="SSD Banner">
                 </div>
                 <label class="right-arrow" for="slide2"><strong>&#62</strong></label>
             </div>
             <!-- Slide 2 -->
             <div class="slide">
                 <label class="left-arrow" for="slide1"><strong>&#60</strong></label>
                 <div class="banner-content">
                     <h1>Nouvelle Gamme<br>Disques NAS<br>Haute Capacité</h1>
                     <button class="btn-primary">Explorer</button>
                 </div>
                 <div class="banner-image">
                     <img src="https://images.unsplash.com/photo-1531297484001-80022131f5a1?w=600" alt="HDD Banner">
                 </div>
                 <label class="right-arrow" for="slide3"><strong>&#62</strong></label>
             </div>
             <!-- Slide 3 -->
             <div class="slide">
                 <label class="left-arrow" for="slide2"><strong>&#60</strong></label>
                 <div class="banner-content">
                     <h1>Disques Externes<br>USB 3.2 Gen 2<br>Portabilité Ultime</h1>
                     <button class="btn-primary">Voir Plus</button>
                 </div>
                 <div class="banner-image">
                     <img src="https://images.unsplash.com/photo-1624705002806-5d72df19c3ad?w=600" alt="External Drive">
                 </div>
                 <label class="right-arrow" for="slide4"><strong>&#62</strong></label>
             </div>
             <!-- Slide 4 -->
             <div class="slide">
                 <label class="left-arrow" for="slide3"><strong>&#60</strong></label>
                 <div class="banner-content">
                     <h1>Stockage Fiable<br>Pour Vos Données<br>Professionnelles</h1>
                     <button class="btn-primary">Découvrir</button>
                 </div>
                 <div class="banner-image">
                     <img src="https://images.unsplash.com/photo-1597852074816-d933c7d2b988?w=600" alt="Banner Storage">
                 </div>
                 <label class="right-arrow" for="slide1clone"><strong>&#62</strong></label>
             </div>
             <!-- Slide 1 Clone -->
             <div class="slide">
                 <label class="left-arrow" for="slide4"><strong>&#60</strong></label>
                 <div class="banner-content">
                     <h1>Jusqu'à 40% de Réduction<br>Sur les SSD NVMe<br>Performance Extrême</h1>
                     <button class="btn-primary">Acheter</button>
                 </div>
                 <div class="banner-image">
                     <img src="https://images.unsplash.com/photo-1591799264318-7e6ef8ddb7ea?w=600" alt="SSD Banner">
                 </div>
                 <label class="right-arrow" for="slide2"><strong>&#62</strong></label>
             </div>
         </div>
     </div>
     <div class="banner-dots">
         <label for="slide1" class="dot"></label>
         <label for="slide2" class="dot"></label>
         <label for="slide3" class="dot"></label>
         <label for="slide4" class="dot"></label>
     </div>
 </section>
    
 <main class="main-content-container">
       <!--Filters-->
 <div class="product-filters-bar">
     <div class="filter-all-button">
         <i class="fas fa-sliders-h icon-margin-right"></i> Tous les filtres
     </div>
     <input type="radio" name="filters" id="none" class="filter-radio-input" checked hidden>

     <!-- Filtre Prix -->
     <div class="product-filter-item" tabindex="0">
         <input type="checkbox" name="filters" id="prix-casques-toggle" class="filter-radio-input">
         <label for="prix-casques-toggle" class="filter-button-label">
             Prix <span class="filter-arrow-icon">▼</span>
         </label>

         <div class="filter-options-list">
             <a href="#" data-price="0-100000"><i class="fas fa-tag"></i> Moins de 100.000 FCFA</a>
             <a href="#" data-price="100000-200000"><i class="fas fa-tag"></i> 100.000 - 200.000 FCFA</a>
             <a href="#" data-price="200000-500000"><i class="fas fa-tag"></i> 200.000 - 500.000 FCFA</a>
             <a href="#" data-price="500000+"><i class="fas fa-tag"></i> Plus de 500.000 FCFA</a>
         </div>
     </div>

     <!-- Filtre Marques -->
     <div class="product-filter-item" tabindex="0">
         <input type="checkbox" name="filters" id="marques-casques-toggle" class="filter-radio-input">
         <label for="marques-casques-toggle" class="filter-button-label">
             Marques <span class="filter-arrow-icon">▼</span>
         </label>
         <div class="filter-options-list">
        <a href="#" data-brand="seagate"><i class="fas fa-hdd"></i> Seagate</a>
        <a href="#" data-brand="western digital"><i class="fas fa-hdd"></i> Western Digital</a>
        <a href="#" data-brand="toshiba"><i class="fas fa-hdd"></i> Toshiba</a>
        <a href="#" data-brand="samsung"><i class="fas fa-compact-disc"></i> Samsung</a>
        <a href="#" data-brand="crucial"><i class="fas fa-memory"></i> Crucial</a>
        <a href="#" data-brand="kingston"><i class="fas fa-microchip"></i> Kingston</a>
    </div>
     </div>

     <!-- Filtre Notes -->
     <div class="product-filter-item" tabindex="0">
         <input type="checkbox" name="filters" id="notes-casques-toggle" class="filter-radio-input">
         <label for="notes-casques-toggle" class="filter-button-label">
             Notes <span class="filter-arrow-icon">▼</span>
         </label>
         <div class="filter-options-list">
             <a href="#" data-rating="5"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> (5 étoiles)</a>
             <a href="#" data-rating="4"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> et +</a>
             <a href="#" data-rating="3"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> et +</a>
             <a href="#" data-rating="2"><i class="fas fa-star"></i><i class="fas fa-star"></i> et +</a>
             <a href="#" data-rating="1"><i class="fas fa-star"></i> et +</a>
         </div>
     </div>
 </div>


        <!-- SECTION 1 : Nos Disques Durs & SSD -->
        <section class="products-section">
            <h2 class="section-title">
                <span class="gradient-blue-purple">Nos Disques Durs & SSD</span>
            </h2>
            <p class="section-subtitle">Stockage haute performance pour tous vos besoins</p>
            <div class="products-grid" id="grid1"></div>
            <div class="pagination" id="pagin1"></div>
        </section>

        <!-- SECTION 2 : Nos Meilleures Offres -->
        <section class="products-section">
            <h2 class="section-title">
                <span class="gradient-blue-purple">Nos Meilleures Offres</span>
            </h2>
            <p class="section-subtitle">Prix exceptionnels sur une sélection premium</p>
            <div class="products-grid" id="grid2"></div>
            <div class="pagination" id="pagin2"></div>
        </section>
    </main>

<script src="{{ asset('assets/js/carousel_auto.js') }}"></script>
<script src="{{ asset('assets/js/carousel_auto.js') }}"></script>
<script src="{{ asset('assets/js/pagination_disk.js') }}"></script>
<script src="{{ asset('assets/js/filtre_disk.js') }}"></script>
<script src="{{ asset('assets/js/product-disk-navigation.js') }}"></script>
</body>
@endsection