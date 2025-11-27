

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ordinateurs | Shopcart</title>
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
    
   <!--Hero Banner-->
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
                     <h1>Are You Ready For<br>Our Products ?<br>Surely Not</h1>
                     <button class="btn-primary">Maybe Yes</button>
                 </div>
                 <div class="banner-image">
                     <img src="https://media.istockphoto.com/id/2202196797/fr/photo/loving-couple-organizing-their-home-finances.webp?a=1&b=1&s=612x612&w=0&k=20&c=x_53R2eFPQ_hLdkKy3FkfjtKjDN-k2uZbdfolTP2zHQ=" alt="Banner">
                 </div>
                 <label class="right-arrow" for="slide1"><strong>&#62</strong></label>
             </div>
             <!-- Slide 1 -->
             <div class="slide">
                 <label class="left-arrow" for="slide4clone"><strong>&#60</strong></label>
                 <div class="banner-content">
                     <h1>Get Up to 50% Off<br>On Pc<br>And Other Gadgets</h1>
                     <button class="btn-primary">Buy Now</button>
                 </div>
                 <div class="banner-image">
                     <img src="https://media.istockphoto.com/id/2207541639/fr/photo/jeune-professionnel-travaillant-sur-un-ordinateur-portable-dans-un-environnement-de-bureau.webp?a=1&b=1&s=612x612&w=0&k=20&c=gHgq52KQ2tSqPcnY3ivQfh76J5b-Xop7RkQ_c457Oyk=" alt="Banner">
                 </div>
                 <label class="right-arrow" for="slide2"><strong>&#62</strong></label>
             </div>
             <!-- Slide 2 -->
             <div class="slide">
                 <label class="left-arrow" for="slide1"><strong>&#60</strong></label>
                 <div class="banner-content">
                     <h1>New Collection Of<br>Personal computer<br>Available Now</h1>
                     <button class="btn-primary">Shop Now</button>
                 </div>
                 <div class="banner-image">
                     <img src="https://cdn.pixabay.com/photo/2021/08/04/13/06/software-developer-6521720_640.jpg" alt="Banner">
                 </div>
                 <label class="right-arrow" for="slide3"><strong>&#62</strong></label>
             </div>
             <!-- Slide 3 -->
             <div class="slide">
                 <label class="left-arrow" for="slide2"><strong>&#60</strong></label>
                 <div class="banner-content">
                     <h1>Latest Pc gaming<br>Up To 30% Off<br>Limited Time</h1>
                     <button class="btn-primary">Get Now</button>
                 </div>
                 <div class="banner-image">
                     <img src="https://plus.unsplash.com/premium_photo-1682430553117-f1d0edb35a14?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTN8fGNvbXB1dGVyfGVufDB8fDB8fHww&auto=format&fit=crop&q=60&w=500" alt="Banner">
                 </div>
                 <label class="right-arrow" for="slide4"><strong>&#62</strong></label>
             </div>
             <!-- Slide 4 -->
             <div class="slide">
                 <label class="left-arrow" for="slide3"><strong>&#60</strong></label>
                 <div class="banner-content">
                     <h1>Are You Ready For<br>Our Products ?<br>Surely Not</h1>
                     <button class="btn-primary">Maybe Yes</button>
                 </div>
                 <div class="banner-image">
                     <img src="https://media.istockphoto.com/id/2202196797/fr/photo/loving-couple-organizing-their-home-finances.webp?a=1&b=1&s=612x612&w=0&k=20&c=x_53R2eFPQ_hLdkKy3FkfjtKjDN-k2uZbdfolTP2zHQ=" alt="Banner">
                 </div>
                 <label class="right-arrow" for="slide1clone"><strong>&#62</strong></label>
             </div>
             <!-- Slide 1 Clone -->
             <div class="slide">
                 <label class="left-arrow" for="slide4"><strong>&#60</strong></label>
                 <div class="banner-content">
                     <h1>Get Up to 50% Off<br>On PC<br>And Other Gadgets</h1>
                     <button class="btn-primary">Buy Now</button>
                 </div>
                 <div class="banner-image">
                     <img src="https://media.istockphoto.com/id/2207541639/fr/photo/jeune-professionnel-travaillant-sur-un-ordinateur-portable-dans-un-environnement-de-bureau.webp?a=1&b=1&s=612x612&w=0&k=20&c=gHgq52KQ2tSqPcnY3ivQfh76J5b-Xop7RkQ_c457Oyk=" alt="Banner">
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
        <a href="#" data-brand="dell"><i class="fas fa-laptop"></i> Dell</a>
        <a href="#" data-brand="hp"><i class="fas fa-laptop"></i> HP</a>
        <a href="#" data-brand="lenovo"><i class="fas fa-laptop"></i> Lenovo</a>
        <a href="#" data-brand="apple"><i class="fas fa-laptop"></i> Apple</a>
        <a href="#" data-brand="asus"><i class="fas fa-laptop"></i> ASUS</a>
        <a href="#" data-brand="acer"><i class="fas fa-laptop"></i> Acer</a>
        <a href="#" data-brand="microsoft"><i class="fas fa-laptop"></i> Microsoft</a>
        <a href="#" data-brand="msi"><i class="fas fa-laptop"></i> MSI</a>
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
        <!-- SECTION 1 : Nos Ordinateurs (style conservé) -->
    <section class="products-section">
      <h2 class="section-title">
        <span class="gradient-blue-purple">Nos ordinateurs</span>
      </h2>
      <p class="section-subtitle">Découvrez notre collection premium</p>
      <div class="products-grid" id="grid1"></div>
      <div class="pagination" id="pagin1"></div>
    </section>

    <!-- SECTION 2 : Nos Meilleures Offres (même style que section 1) -->
    <section class="products-section">
      <h2 class="section-title">
        <span class="gradient-blue-purple">Nos Meilleures Offres</span>
      </h2>
      <p class="section-subtitle">Offres limitées</p>
      <div class="products-grid" id="grid2"></div>
      <div class="pagination" id="pagin2"></div>
    </section>
  </main>


 <!-- Scripts - ORDRE IMPORTANT -->
<script src="{{ asset('assets/js/carousel_auto.js') }}"></script>
<script src="{{ asset('assets/js/pagination_ordi.js') }}"></script>
<script src="{{ asset('assets/js/filtre_ordi.js') }}"></script>
<script src="{{ asset('assets/js/product-ordi-navigation.js') }}"></script>

</body>
@endsection