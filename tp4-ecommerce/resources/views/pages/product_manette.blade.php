
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manettes & Gaming | Shopcart</title> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}" >
    <link rel="stylesheet" href="{{ asset('assets/css/products_casque.css') }}">
   
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
    <script src="{{ asset('assets/js/product_filtres.js') }}" defer></script> 
    <script src="{{ asset('assets/js/product_navigation_manettes.js') }}" defer></script> 
    <script src="{{ asset('assets/js/product_pagination.js') }}" defer></script> 
    <script defer src="{{ asset('assets/js/newsletter.js') }}"></script>
    <script src="{{ asset('assets/js/cart-manager.js') }}" defer></script>
    <script src="{{ asset('assets/js/carousel_auto.js') }}" defer></script> 
    <script src="{{ asset('assets/js/cart-manager.js') }}" defer></script>
</head>

@extends('layouts.app')

@section('title', 'Produit- Shopecart')

@section('content')

<body class="body-bg">
    
    <section class="hero-banner">
        <!--Radio buttons pour controler les slides-->
        <input type="radio" name="slide" id="slide4clone">
        <input type="radio" name="slide" id="slide1" checked>
        <input type="radio" name="slide" id="slide2">
        <input type="radio" name="slide" id="slide3">
        <input type="radio" name="slide" id="slide4">
        <input type="radio" name="slide" id="slide1clone">
        <div class="carousel-container">
            <!--Les slides-->
            <div class="slides" id="slides">
                <!--Slide 4 Clone-->
                <div class="slide">
                    <label class="left-arrow" for="slide3"><strong>&#60</strong></label>
                    <div class="banner-content">
                        <h1>Are You Ready For<br>Our Products ?<br>Surely Not</h1>
                        <button class="btn-primary">Maybe Yes</button>
                    </div>
                    <div class="banner-image">
                        <img src="/assets/images/30.jpeg"
                            alt="">
                    </div>
                    <label class="right-arrow" for="slide1"><strong>&#62</strong></label>
                </div>
                <!--Slide 1-->
                <div class="slide">
                    <label class="left-arrow" for="slide4clone"><strong>&#60</strong></label>
                    <div class="banner-content">
                        <h1>Get Up to 50% Off<br>On Telephones<br>And Other Gadgets</h1>
                        <button class="btn-primary">Buy Now</button>
                    </div>
                    <div class="banner-image">
                        <img src="/assets/images/31.jpeg"
                            alt="">
                    </div>
                    <label class="right-arrow" for="slide2"><strong>&#62</strong></label>
                </div>
                <!--Slide 2-->
                <div class="slide">
                    <label class="left-arrow" for="slide1"><strong>&#60</strong></label>
                    <div class="banner-content">
                        <h1>New Collection Of<br>Smart Phones<br>Available Now</h1>
                        <button class="btn-primary">Shop Now</button>
                    </div>
                    <div class="banner-image">
                        <img src="/assets/images/32.jpeg"
                            alt="">
                    </div>
                    <label class="right-arrow" for="slide3"><strong>&#62</strong></label>
                </div>
                <!--Slide 3-->
                <div class="slide">
                    <label class="left-arrow" for="slide2"><strong>&#60</strong></label>
                    <div class="banner-content">
                        <h1>Latest Google Pixels<br>Up To 30% Off<br>Limited Time</h1>
                        <button class="btn-primary">Get Now</button>
                    </div>
                    <div class="banner-image">
                        <img src="/assets/images/30.jpeg"
                            alt="">
                    </div>
                    <label class="right-arrow" for="slide4"><strong>&#62</strong></label>
                </div>
                <!--Slide 4-->
                <div class="slide">
                    <label class="left-arrow" for="slide3"><strong>&#60</strong></label>
                    <div class="banner-content">
                        <h1>Are You Ready For<br>Our Products ?<br>Surely Not</h1>
                        <button class="btn-primary">Maybe Yes</button>
                    </div>
                    <div class="banner-image">
                        <img src="/assets/images/30.jpeg"
                            alt="">
                    </div>
                    <label class="right-arrow" for="slide1clone"><strong>&#62</strong></label>
                </div>
                <!--Slide 1 Clone-->
                <div class="slide">
                    <label class="left-arrow" for="slide4"><strong>&#60</strong></label>
                    <div class="banner-content">
                        <h1>Get Up to 50% Off<br>On Telephones<br>And Other Gadgets</h1>
                        <button class="btn-primary">Buy Now</button>
                    </div>
                    <div class="banner-image">
                        <img src="/assets/images/31.jpeg"
                            alt="">
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

            <div class="tag-buttons-group">
                <div class="filter-button primary-filter">
                    <i class="fas fa-sliders-h icon-margin-right"></i> Tous les filtres
                </div>
                <input type="radio" name="filters" id="none"  checked hidden>

                <div class="filter-dropdown" tabindex="0">
                    <input type="radio" name="filters" id="prix-toggle" hidden >
                    <label for="prix-toggle" class="tag-button">
                        Prix <span class="dropdown-arrow">▼</span>
                    </label>
                    <div class="dropdown-content">
                        <a href="#" data-price="0-30000"><i class="fas fa-tag"></i> Moins de 30.000 FCFA</a>
                        <a href="#" data-price="30000-70000"><i class="fas fa-tag"></i> 30.000 - 70.000 FCFA</a>
                        <a href="#" data-price="70000-150000"><i class="fas fa-tag"></i> 70.000 - 150.000 FCFA</a>
                        <a href="#" data-price="150000+"><i class="fas fa-tag"></i> Plus de 150.000 FCFA</a>
                    </div>
                </div>
                <div class="filter-dropdown" tabindex="0">
                    <input type="radio" name="filters" id="marques-toggle"hidden>
                    <label for="marques-toggle" class="tag-button">
                        Marques <span class="dropdown-arrow">▼</span>
                    </label>
                    <div class="dropdown-content">
                        <a href="#" data-brand="sony"><i class="fab fa-playstation"></i> Sony (PlayStation)</a>
                        <a href="#" data-brand="microsoft"><i class="fab fa-xbox"></i> Microsoft (Xbox)</a>
                        <a href="#" data-brand="nintendo"><i class="fas fa-gamepad"></i> Nintendo</a>
                        <a href="#" data-brand="razer"><i class="fas fa-snake"></i> Razer</a>
                      
                    </div>
                </div>

                <div class="filter-dropdown" tabindex="0">
                    <input type="radio" name="filters" id="notes-toggle"  hidden>
                    <label for="notes-toggle" class="tag-button">
                        Notes <span class="dropdown-arrow">▼</span>
                    </label>
                    <div class="dropdown-content">
                        <a href="#" data-rating="5"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> (5.0 étoiles)</a>
                        <a href="#" data-rating="4.5"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i> (4.5 étoiles)</a>
                        <a href="#" data-rating="4"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> (4.0 étoiles)</a>
                        <a href="#" data-rating="3"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> (3.0 étoiles)</a>
                       
                    </div>
                </div>
            </div>
 
      
        <section class="products-section">
            <h2 class="section-title" id="title-best-sellers">
                <span class="gradient-blue-purple">Manettes pour vous</span>
            </h2>
            <p class="section-subtitle">Sélection basée sur vos plateformes favorites</p>
            <div class="products-grid" id="products-for-you-grid">
              
                <a href="{{ route('manette_details', ['id' => 1]) }}" class="product-card" data-id="1" data-brand="sony" data-price-raw="75000" data-rating-raw="4.8">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M1.png" alt="DualSense PS5 Blanc" class="product-image">
                        <div class="product-tag tag-best-seller">TOP VENTE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sony</p>
                        <h3 class="product-title-card">DualSense PS5 Blanc</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.8)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">75 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('manette_details', ['id' => 2]) }}" class="product-card" data-id="2" data-brand="microsoft" data-price-raw="60000" data-rating-raw="4.5">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="Xbox Core Controller Noir" class="product-image">
                        <div class="product-tag tag-promo">-15%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Core Controller Noir</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.5)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">60 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('manette_details', ['id' => 2]) }}" class="product-card" data-id="2" data-brand="microsoft" data-price-raw="60000" data-rating-raw="4.5">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="Xbox Core Controller Noir" class="product-image">
                        <div class="product-tag tag-promo">-15%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Core Controller Noir</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.5)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">60 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('manette_details', ['id' => 2]) }}" class="product-card" data-id="2" data-brand="microsoft" data-price-raw="60000" data-rating-raw="4.5">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="Xbox Core Controller Noir" class="product-image">
                        <div class="product-tag tag-promo">-15%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Core Controller Noir</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.5)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">60 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('manette_details', ['id' => 3]) }}" class="product-card" data-id="3" data-brand="nintendo" data-price-raw="89000" data-rating-raw="4.9">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M3.png" alt="Switch Pro Controller" class="product-image">
                        <div class="product-tag tag-new tag-right">NOUVEAU</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Nintendo</p>
                        <h3 class="product-title-card">Switch Pro Controller</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.9)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">89 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('manette_details', ['id' => 4]) }}" class="product-card" data-id="4" data-brand="razer" data-price-raw="165000" data-rating-raw="4.7">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M4.jpeg" alt="Razer Wolverine V2 Pro" class="product-image">
                        <div class="product-tag tag-premium">PRO GAMING</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Razer</p>
                        <h3 class="product-title-card">Wolverine V2 Pro</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.7)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">165 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('manette_details', ['id' => 5]) }}" class="product-card" data-id="5" data-brand="nacon" data-price-raw="110000" data-rating-raw="4.3">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M5.png" alt="Nacon Revolution Pro 3" class="product-image">
                        
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Nacon</p>
                        <h3 class="product-title-card">Revolution Pro 3</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                            <span class="rating-text">(4.3)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">110 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('manette_details', ['id' => 6]) }}" class="product-card" data-id="6" data-brand="8bitdo" data-price-raw="35000" data-rating-raw="4.6">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M6.png" alt="8BitDo Ultimate C" class="product-image">
                        <div class="product-tag tag-new tag-right">NOUVEAU</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">8BitDo</p>
                        <h3 class="product-title-card">Ultimate C Wired</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.6)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">35 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('manette_details', ['id' => 7]) }}" class="product-card" data-id="7" data-brand="logitech" data-price-raw="25000" data-rating-raw="4.0">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M8.png" alt="Logitech F310" class="product-image">
                        <div class="product-tag tag-promo">-20%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Logitech</p>
                        <h3 class="product-title-card">Logitech F310 (PC)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                            <span class="rating-text">(4.0)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">25 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('manette_details', ['id' => 8]) }}" class="product-card" data-id="8" data-brand="microsoft" data-price-raw="155000" data-rating-raw="4.9">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M9.png" alt="Xbox Elite Series 2" class="product-image">
                        <div class="product-tag tag-premium">ELITE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Elite Series 2</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.9)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">155 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('manette_details', ['id' => 9]) }}" class="product-card" data-id="9" data-brand="sony" data-price-raw="90000" data-rating-raw="4.5">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M7.png" alt="DualSense Edge Pro" class="product-image">
                        
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sony</p>
                        <h3 class="product-title-card">DualSense Edge Pro</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.5)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">90 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('manette_details', ['id' => 10]) }}" class="product-card" data-id="10" data-brand="razer" data-price-raw="99000" data-rating-raw="4.4">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="Razer Kishi V2" class="product-image">
                        
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Razer</p>
                        <h3 class="product-title-card">Razer Kishi V2</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">99 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                
                <a href="{{ route('manette_details', ['id' => 11]) }}" class="product-card" data-id="11" data-brand="sony" data-price-raw="75000" data-rating-raw="4.8">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M1.png" alt="DualSense PS5 Blanc (2)" class="product-image">
                        <div class="product-tag tag-best-seller">TOP VENTE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sony</p>
                        <h3 class="product-title-card">DualSense PS5 Blanc (2)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.8)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">75 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('manette_details', ['id' => 12]) }}" class="product-card" data-id="12" data-brand="microsoft" data-price-raw="60000" data-rating-raw="4.5">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="Xbox Core Controller Noir (2)" class="product-image">
                        <div class="product-tag tag-promo">-15%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Core Controller Noir (2)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.5)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">60 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('manette_details', ['id' => 13]) }}" class="product-card" data-id="13" data-brand="nintendo" data-price-raw="89000" data-rating-raw="4.9">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M3.png" alt="Switch Pro Controller (2)" class="product-image">
                        <div class="product-tag tag-new tag-right">NOUVEAU</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Nintendo</p>
                        <h3 class="product-title-card">Switch Pro Controller (2)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.9)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">89 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('manette_details', ['id' => 14]) }}" class="product-card" data-id="14" data-brand="razer" data-price-raw="165000" data-rating-raw="4.7">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M4.jpeg" alt="Razer Wolverine V2 Pro (2)" class="product-image">
                        <div class="product-tag tag-premium">PRO GAMING</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Razer</p>
                        <h3 class="product-title-card">Wolverine V2 Pro (2)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.7)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">165 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('manette_details', ['id' => 15]) }}" class="product-card" data-id="15" data-brand="nacon" data-price-raw="110000" data-rating-raw="4.3">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M5.png" alt="Nacon Revolution Pro 3 (2)" class="product-image">
                        
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Nacon</p>
                        <h3 class="product-title-card">Revolution Pro 3 (2)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                            <span class="rating-text">(4.3)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">110 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('manette_details', ['id' => 16]) }}" class="product-card" data-id="16" data-brand="8bitdo" data-price-raw="35000" data-rating-raw="4.6">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M6.png" alt="8BitDo Ultimate C (2)" class="product-image">
                        <div class="product-tag tag-new tag-right">NOUVEAU</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">8BitDo</p>
                        <h3 class="product-title-card">Ultimate C Wired (2)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.6)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">35 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('manette_details', ['id' => 17]) }}" class="product-card" data-id="17" data-brand="logitech" data-price-raw="25000" data-rating-raw="4.0">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M8.png" alt="Logitech F310 (PC) (2)" class="product-image">
                        <div class="product-tag tag-promo">-20%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Logitech</p>
                        <h3 class="product-title-card">Logitech F310 (PC) (2)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                            <span class="rating-text">(4.0)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">25 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('manette_details', ['id' => 18]) }}" class="product-card" data-id="18" data-brand="microsoft" data-price-raw="155000" data-rating-raw="4.9">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M9.png" alt="Xbox Elite Series 2 (2)" class="product-image">
                        <div class="product-tag tag-premium">ELITE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Elite Series 2 (2)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.9)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">155 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('manette_details', ['id' => 19]) }}" class="product-card" data-id="19" data-brand="sony" data-price-raw="90000" data-rating-raw="4.5">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M7.png" alt="DualSense Edge Pro (2)" class="product-image">
                        
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sony</p>
                        <h3 class="product-title-card">DualSense Edge Pro (2)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.5)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">90 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('manette_details', ['id' => 20]) }}" class="product-card" data-id="20" data-brand="razer" data-price-raw="99000" data-rating-raw="4.4">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="Razer Kishi V2 (2)" class="product-image">
                        
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Razer</p>
                        <h3 class="product-title-card">Razer Kishi V2 (2)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">99 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>

                <a href="{{ route('manette_details', ['id' => 21]) }}" class="product-card" data-id="21" data-brand="sony" data-price-raw="75000" data-rating-raw="4.8">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M1.png" alt="DualSense PS5 Blanc (3)" class="product-image">
                        <div class="product-tag tag-best-seller">TOP VENTE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sony</p>
                        <h3 class="product-title-card">DualSense PS5 Blanc (3)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.8)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">75 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('manette_details', ['id' => 22]) }}" class="product-card" data-id="22" data-brand="microsoft" data-price-raw="60000" data-rating-raw="4.5">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="Xbox Core Controller Noir (3)" class="product-image">
                        <div class="product-tag tag-promo">-15%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Core Controller Noir (3)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.5)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">60 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('manette_details', ['id' => 23]) }}" class="product-card" data-id="23" data-brand="nintendo" data-price-raw="89000" data-rating-raw="4.9">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M3.png" alt="Switch Pro Controller (3)" class="product-image">
                        <div class="product-tag tag-new tag-right">NOUVEAU</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Nintendo</p>
                        <h3 class="product-title-card">Switch Pro Controller (3)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.9)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">89 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('manette_details', ['id' => 24]) }}" class="product-card" data-id="24" data-brand="razer" data-price-raw="165000" data-rating-raw="4.7">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M4.jpeg" alt="Razer Wolverine V2 Pro (3)" class="product-image">
                        <div class="product-tag tag-premium">PRO GAMING</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Razer</p>
                        <h3 class="product-title-card">Wolverine V2 Pro (3)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.7)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">165 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('manette_details', ['id' => 25]) }}" class="product-card" data-id="25" data-brand="nacon" data-price-raw="110000" data-rating-raw="4.3">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M5.png" alt="Nacon Revolution Pro 3 (3)" class="product-image">
                        
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Nacon</p>
                        <h3 class="product-title-card">Revolution Pro 3 (3)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                            <span class="rating-text">(4.3)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">110 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('manette_details', ['id' => 26]) }}" class="product-card" data-id="26" data-brand="8bitdo" data-price-raw="35000" data-rating-raw="4.6">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M6.png" alt="8BitDo Ultimate C (3)" class="product-image">
                        <div class="product-tag tag-new tag-right">NOUVEAU</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">8BitDo</p>
                        <h3 class="product-title-card">Ultimate C Wired (3)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.6)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">35 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('manette_details', ['id' => 27]) }}" class="product-card" data-id="27" data-brand="logitech" data-price-raw="25000" data-rating-raw="4.0">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M8.png" alt="Logitech F310 (PC) (3)" class="product-image">
                        <div class="product-tag tag-promo">-20%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Logitech</p>
                        <h3 class="product-title-card">Logitech F310 (PC) (3)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                            <span class="rating-text">(4.0)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">25 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('manette_details', ['id' => 28]) }}" class="product-card" data-id="28" data-brand="microsoft" data-price-raw="155000" data-rating-raw="4.9">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M9.png" alt="Xbox Elite Series 2 (3)" class="product-image">
                        <div class="product-tag tag-premium">ELITE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Elite Series 2 (3)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.9)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">155 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('manette_details', ['id' => 29]) }}" class="product-card" data-id="29" data-brand="sony" data-price-raw="90000" data-rating-raw="4.5">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M7.png" alt="DualSense Edge Pro (3)" class="product-image">
                        
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sony</p>
                        <h3 class="product-title-card">DualSense Edge Pro (3)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.5)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">90 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('manette_details', ['id' => 30]) }}" class="product-card" data-id="30" data-brand="razer" data-price-raw="99000" data-rating-raw="4.4">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="Razer Kishi V2 (3)" class="product-image">
                        
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Razer</p>
                        <h3 class="product-title-card">Razer Kishi V2 (3)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">99 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>

                </div>
        </section>
        
        <div class="pagination" id="pagination-for-you">
            <button class="page-btn" disabled data-direction="prev" data-grid-id="products-for-you-grid">
                    <i class="fas fa-chevron-left"></i> Précédent
            </button>
                
            <button class="page-num-active" data-page="1" data-grid-id="products-for-you-grid">1</button>
            <button class="page-num" data-page="2" data-grid-id="products-for-you-grid">2</button>
            <button class="page-num" data-page="3" data-grid-id="products-for-you-grid">3</button>
                
            <button class="page-btn" data-direction="next" data-grid-id="products-for-you-grid">
                Suivant <i class="fas fa-chevron-right"></i>
            </button>
        </div>
        <div class="progress-bar-row">
            <hr class="progress-bar-segment-1">
            <hr class="progress-bar-segment-2">
            <hr class="progress-bar-segment-3">
        </div>
        
        <section class="products-section">
            <h2 class="section-title" id="title-best-sellers">
                <span class="gradient-blue-purple">Best Sellers Gaming</span>
            </h2>
            <p class="section-subtitle">Les manettes les plus populaires</p>
            <div class="products-grid" id="best-sellers-grid">
               
                <a href="product_manetteDetail.html?id=1" class="product-card" data-id="1" data-brand="sony" data-price-raw="75000" data-rating-raw="4.8">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M1.png" alt="DualSense PS5 Blanc" class="product-image">
                        <div class="product-tag tag-best-seller">TOP VENTE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sony</p>
                        <h3 class="product-title-card">DualSense PS5 Blanc</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.8)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">75 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=2" class="product-card" data-id="2" data-brand="microsoft" data-price-raw="60000" data-rating-raw="4.5">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="Xbox Core Controller Noir" class="product-image">
                        <div class="product-tag tag-promo">-15%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Core Controller Noir</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.5)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">60 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=2" class="product-card" data-id="2" data-brand="microsoft" data-price-raw="60000" data-rating-raw="4.5">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="Xbox Core Controller Noir" class="product-image">
                        <div class="product-tag tag-promo">-15%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Core Controller Noir</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.5)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">60 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=2" class="product-card" data-id="2" data-brand="microsoft" data-price-raw="60000" data-rating-raw="4.5">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="Xbox Core Controller Noir" class="product-image">
                        <div class="product-tag tag-promo">-15%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Core Controller Noir</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.5)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">60 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=2" class="product-card" data-id="2" data-brand="microsoft" data-price-raw="60000" data-rating-raw="4.5">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="Xbox Core Controller Noir" class="product-image">
                        <div class="product-tag tag-promo">-15%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Core Controller Noir</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.5)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">60 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=2" class="product-card" data-id="2" data-brand="microsoft" data-price-raw="60000" data-rating-raw="4.5">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="Xbox Core Controller Noir" class="product-image">
                        <div class="product-tag tag-promo">-15%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Core Controller Noir</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.5)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">60 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=2" class="product-card" data-id="2" data-brand="microsoft" data-price-raw="60000" data-rating-raw="4.5">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="Xbox Core Controller Noir" class="product-image">
                        <div class="product-tag tag-promo">-15%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Core Controller Noir</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.5)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">60 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=8" class="product-card" data-id="8" data-brand="microsoft" data-price-raw="155000" data-rating-raw="4.9">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M9.png" alt="Xbox Elite Series 2" class="product-image">
                        <div class="product-tag tag-premium">ELITE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Elite Series 2</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.9)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">155 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=3" class="product-card" data-id="3" data-brand="nintendo" data-price-raw="89000" data-rating-raw="4.9">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M3.png" alt="Switch Pro Controller" class="product-image">
                        <div class="product-tag tag-new tag-right">NOUVEAU</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Nintendo</p>
                        <h3 class="product-title-card">Switch Pro Controller</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.9)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">89 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=2" class="product-card" data-id="2" data-brand="microsoft" data-price-raw="60000" data-rating-raw="4.5">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="Xbox Core Controller Noir" class="product-image">
                        <div class="product-tag tag-promo">-15%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Core Controller Noir</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.5)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">60 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=1" class="product-card" data-id="1" data-brand="sony" data-price-raw="75000" data-rating-raw="4.8">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M1.png" alt="DualSense PS5 Blanc" class="product-image">
                        <div class="product-tag tag-best-seller">TOP VENTE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sony</p>
                        <h3 class="product-title-card">DualSense PS5 Blanc</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.8)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">75 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=8" class="product-card" data-id="8" data-brand="microsoft" data-price-raw="155000" data-rating-raw="4.9">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M9.png" alt="Xbox Elite Series 2" class="product-image">
                        <div class="product-tag tag-premium">ELITE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Elite Series 2</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.9)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">155 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=3" class="product-card" data-id="3" data-brand="nintendo" data-price-raw="89000" data-rating-raw="4.9">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M3.png" alt="Switch Pro Controller" class="product-image">
                        <div class="product-tag tag-new tag-right">NOUVEAU</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Nintendo</p>
                        <h3 class="product-title-card">Switch Pro Controller</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.9)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">89 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=2" class="product-card" data-id="2" data-brand="microsoft" data-price-raw="60000" data-rating-raw="4.5">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="Xbox Core Controller Noir" class="product-image">
                        <div class="product-tag tag-promo">-15%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Core Controller Noir</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.5)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">60 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=1" class="product-card" data-id="1" data-brand="sony" data-price-raw="75000" data-rating-raw="4.8">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M1.png" alt="DualSense PS5 Blanc" class="product-image">
                        <div class="product-tag tag-best-seller">TOP VENTE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sony</p>
                        <h3 class="product-title-card">DualSense PS5 Blanc</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.8)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">75 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=8" class="product-card" data-id="8" data-brand="microsoft" data-price-raw="155000" data-rating-raw="4.9">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M9.png" alt="Xbox Elite Series 2" class="product-image">
                        <div class="product-tag tag-premium">ELITE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Elite Series 2</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.9)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">155 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>

                <a href="product_manetteDetail.html?id=11" class="product-card" data-id="11" data-brand="sony" data-price-raw="75000" data-rating-raw="4.8">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M1.png" alt="DualSense PS5 Blanc (2)" class="product-image">
                        <div class="product-tag tag-best-seller">TOP VENTE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sony</p>
                        <h3 class="product-title-card">DualSense PS5 Blanc (2)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.8)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">75 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=18" class="product-card" data-id="18" data-brand="microsoft" data-price-raw="155000" data-rating-raw="4.9">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M9.png" alt="Xbox Elite Series 2 (2)" class="product-image">
                        <div class="product-tag tag-premium">ELITE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Elite Series 2 (2)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.9)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">155 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=13" class="product-card" data-id="13" data-brand="nintendo" data-price-raw="89000" data-rating-raw="4.9">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M3.png" alt="Switch Pro Controller (2)" class="product-image">
                        <div class="product-tag tag-new tag-right">NOUVEAU</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Nintendo</p>
                        <h3 class="product-title-card">Switch Pro Controller (2)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.9)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">89 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=12" class="product-card" data-id="12" data-brand="microsoft" data-price-raw="60000" data-rating-raw="4.5">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="Xbox Core Controller Noir (2)" class="product-image">
                        <div class="product-tag tag-promo">-15%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Core Controller Noir (2)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.5)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">60 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=11" class="product-card" data-id="11" data-brand="sony" data-price-raw="75000" data-rating-raw="4.8">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M1.png" alt="DualSense PS5 Blanc (2)" class="product-image">
                        <div class="product-tag tag-best-seller">TOP VENTE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sony</p>
                        <h3 class="product-title-card">DualSense PS5 Blanc (2)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.8)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">75 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=18" class="product-card" data-id="18" data-brand="microsoft" data-price-raw="155000" data-rating-raw="4.9">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M9.png" alt="Xbox Elite Series 2 (2)" class="product-image">
                        <div class="product-tag tag-premium">ELITE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Elite Series 2 (2)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.9)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">155 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=13" class="product-card" data-id="13" data-brand="nintendo" data-price-raw="89000" data-rating-raw="4.9">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M3.png" alt="Switch Pro Controller (2)" class="product-image">
                        <div class="product-tag tag-new tag-right">NOUVEAU</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Nintendo</p>
                        <h3 class="product-title-card">Switch Pro Controller (2)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.9)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">89 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=12" class="product-card" data-id="12" data-brand="microsoft" data-price-raw="60000" data-rating-raw="4.5">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="Xbox Core Controller Noir (2)" class="product-image">
                        <div class="product-tag tag-promo">-15%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Core Controller Noir (2)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.5)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">60 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=11" class="product-card" data-id="11" data-brand="sony" data-price-raw="75000" data-rating-raw="4.8">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M1.png" alt="DualSense PS5 Blanc (2)" class="product-image">
                        <div class="product-tag tag-best-seller">TOP VENTE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sony</p>
                        <h3 class="product-title-card">DualSense PS5 Blanc (2)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.8)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">75 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=18" class="product-card" data-id="18" data-brand="microsoft" data-price-raw="155000" data-rating-raw="4.9">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M9.png" alt="Xbox Elite Series 2 (2)" class="product-image">
                        <div class="product-tag tag-premium">ELITE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Elite Series 2 (2)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.9)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">155 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>

                <a href="product_manetteDetail.html?id=21" class="product-card" data-id="21" data-brand="sony" data-price-raw="75000" data-rating-raw="4.8">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M1.png" alt="DualSense PS5 Blanc (3)" class="product-image">
                        <div class="product-tag tag-best-seller">TOP VENTE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sony</p>
                        <h3 class="product-title-card">DualSense PS5 Blanc (3)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.8)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">75 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=28" class="product-card" data-id="28" data-brand="microsoft" data-price-raw="155000" data-rating-raw="4.9">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M9.png" alt="Xbox Elite Series 2 (3)" class="product-image">
                        <div class="product-tag tag-premium">ELITE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Elite Series 2 (3)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.9)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">155 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=23" class="product-card" data-id="23" data-brand="nintendo" data-price-raw="89000" data-rating-raw="4.9">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M3.png" alt="Switch Pro Controller (3)" class="product-image">
                        <div class="product-tag tag-new tag-right">NOUVEAU</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Nintendo</p>
                        <h3 class="product-title-card">Switch Pro Controller (3)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.9)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">89 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=22" class="product-card" data-id="22" data-brand="microsoft" data-price-raw="60000" data-rating-raw="4.5">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="Xbox Core Controller Noir (3)" class="product-image">
                        <div class="product-tag tag-promo">-15%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Core Controller Noir (3)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.5)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">60 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=21" class="product-card" data-id="21" data-brand="sony" data-price-raw="75000" data-rating-raw="4.8">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M1.png" alt="DualSense PS5 Blanc (3)" class="product-image">
                        <div class="product-tag tag-best-seller">TOP VENTE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sony</p>
                        <h3 class="product-title-card">DualSense PS5 Blanc (3)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.8)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">75 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=28" class="product-card" data-id="28" data-brand="microsoft" data-price-raw="155000" data-rating-raw="4.9">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M9.png" alt="Xbox Elite Series 2 (3)" class="product-image">
                        <div class="product-tag tag-premium">ELITE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Elite Series 2 (3)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.9)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">155 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=23" class="product-card" data-id="23" data-brand="nintendo" data-price-raw="89000" data-rating-raw="4.9">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M3.png" alt="Switch Pro Controller (3)" class="product-image">
                        <div class="product-tag tag-new tag-right">NOUVEAU</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Nintendo</p>
                        <h3 class="product-title-card">Switch Pro Controller (3)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.9)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">89 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=22" class="product-card" data-id="22" data-brand="microsoft" data-price-raw="60000" data-rating-raw="4.5">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="Xbox Core Controller Noir (3)" class="product-image">
                        <div class="product-tag tag-promo">-15%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Core Controller Noir (3)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.5)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">60 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=21" class="product-card" data-id="21" data-brand="sony" data-price-raw="75000" data-rating-raw="4.8">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M1.png" alt="DualSense PS5 Blanc (3)" class="product-image">
                        <div class="product-tag tag-best-seller">TOP VENTE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sony</p>
                        <h3 class="product-title-card">DualSense PS5 Blanc (3)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.8)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">75 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=28" class="product-card" data-id="28" data-brand="microsoft" data-price-raw="155000" data-rating-raw="4.9">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M9.png" alt="Xbox Elite Series 2 (3)" class="product-image">
                        <div class="product-tag tag-premium">ELITE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Elite Series 2 (3)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.9)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">155 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                </div>
        </section>
        <div class="pagination" id="pagination-best-sellers">
            <button class="page-btn" disabled data-direction="prev" data-grid-id="best-sellers-grid">
                    <i class="fas fa-chevron-left"></i> Précédent
            </button>
                
            <button class="page-num-active" data-page="1" data-grid-id="best-sellers-grid">1</button>
            <button class="page-num" data-page="2" data-grid-id="best-sellers-grid">2</button>
            <button class="page-num" data-page="3" data-grid-id="best-sellers-grid">3</button>
                
            <button class="page-btn" data-direction="next" data-grid-id="best-sellers-grid">
                Suivant <i class="fas fa-chevron-right"></i>
            </button>
        </div>
        <div class="progress-bar-row">
            <hr class="progress-bar-segment-1">
            <hr class="progress-bar-segment-2">
            <hr class="progress-bar-segment-3">
        </div>

        <section class="products-section">
            <h2 class="section-title" id="title-promotion">
                <span class="gradient-blue-purple">Manettes en promotion</span>
            </h2>
            <p class="section-subtitle">Offres spéciales et remises</p>
            <div class="products-grid" id="promotion-grid">
               
                <a href="product_manetteDetail.html?id=2" class="product-card" data-id="2" data-brand="microsoft" data-price-raw="60000" data-rating-raw="4.5">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="Xbox Core Controller Noir" class="product-image">
                        <div class="product-tag tag-promo">-15%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Core Controller Noir</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.5)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">60 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=7" class="product-card" data-id="7" data-brand="logitech" data-price-raw="25000" data-rating-raw="4.0">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M8.png" alt="Logitech F310" class="product-image">
                        <div class="product-tag tag-promo">-20%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Logitech</p>
                        <h3 class="product-title-card">Logitech F310 (PC)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                            <span class="rating-text">(4.0)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">25 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=10" class="product-card" data-id="10" data-brand="razer" data-price-raw="99000" data-rating-raw="4.4">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M4.jpeg" alt="Razer Kishi V2" class="product-image">
                        <div class="product-tag tag-promo">-10%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Razer</p>
                        <h3 class="product-title-card">Razer Kishi V2</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">99 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=2" class="product-card" data-id="2" data-brand="microsoft" data-price-raw="60000" data-rating-raw="4.5">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="Xbox Core Controller Noir" class="product-image">
                        <div class="product-tag tag-promo">-15%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Core Controller Noir</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.5)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">60 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=2" class="product-card" data-id="2" data-brand="microsoft" data-price-raw="60000" data-rating-raw="4.5">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="Xbox Core Controller Noir" class="product-image">
                        <div class="product-tag tag-promo">-15%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Core Controller Noir</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.5)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">60 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=2" class="product-card" data-id="2" data-brand="microsoft" data-price-raw="60000" data-rating-raw="4.5">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="Xbox Core Controller Noir" class="product-image">
                        <div class="product-tag tag-promo">-15%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Core Controller Noir</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.5)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">60 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=2" class="product-card" data-id="2" data-brand="microsoft" data-price-raw="60000" data-rating-raw="4.5">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="Xbox Core Controller Noir" class="product-image">
                        <div class="product-tag tag-promo">-15%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Core Controller Noir</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.5)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">60 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=2" class="product-card" data-id="2" data-brand="microsoft" data-price-raw="60000" data-rating-raw="4.5">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="Xbox Core Controller Noir" class="product-image">
                        <div class="product-tag tag-promo">-15%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Core Controller Noir</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.5)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">60 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                
                <a href="product_manetteDetail.html?id=7" class="product-card" data-id="7" data-brand="logitech" data-price-raw="25000" data-rating-raw="4.0">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M8.png" alt="Logitech F310" class="product-image">
                        <div class="product-tag tag-promo">-20%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Logitech</p>
                        <h3 class="product-title-card">Logitech F310 (PC)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                            <span class="rating-text">(4.0)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">25 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=10" class="product-card" data-id="10" data-brand="razer" data-price-raw="99000" data-rating-raw="4.4">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M4.jpeg" alt="Razer Kishi V2" class="product-image">
                        <div class="product-tag tag-promo">-10%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Razer</p>
                        <h3 class="product-title-card">Razer Kishi V2</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">99 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=2" class="product-card" data-id="2" data-brand="microsoft" data-price-raw="60000" data-rating-raw="4.5">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="Xbox Core Controller Noir" class="product-image">
                        <div class="product-tag tag-promo">-15%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Core Controller Noir</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.5)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">60 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=7" class="product-card" data-id="7" data-brand="logitech" data-price-raw="25000" data-rating-raw="4.0">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M8.png" alt="Logitech F310" class="product-image">
                        <div class="product-tag tag-promo">-20%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Logitech</p>
                        <h3 class="product-title-card">Logitech F310 (PC)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                            <span class="rating-text">(4.0)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">25 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=10" class="product-card" data-id="10" data-brand="razer" data-price-raw="99000" data-rating-raw="4.4">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M4.jpeg" alt="Razer Kishi V2" class="product-image">
                        <div class="product-tag tag-promo">-10%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Razer</p>
                        <h3 class="product-title-card">Razer Kishi V2</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">99 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=2" class="product-card" data-id="2" data-brand="microsoft" data-price-raw="60000" data-rating-raw="4.5">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="Xbox Core Controller Noir" class="product-image">
                        <div class="product-tag tag-promo">-15%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Core Controller Noir</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.5)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">60 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                
                <a href="product_manetteDetail.html?id=12" class="product-card" data-id="12" data-brand="microsoft" data-price-raw="60000" data-rating-raw="4.5">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="Xbox Core Controller Noir (2)" class="product-image">
                        <div class="product-tag tag-promo">-15%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Core Controller Noir (2)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.5)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">60 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=17" class="product-card" data-id="17" data-brand="logitech" data-price-raw="25000" data-rating-raw="4.0">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M8.png" alt="Logitech F310 (2)" class="product-image">
                        <div class="product-tag tag-promo">-20%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Logitech</p>
                        <h3 class="product-title-card">Logitech F310 (PC) (2)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                            <span class="rating-text">(4.0)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">25 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=20" class="product-card" data-id="20" data-brand="razer" data-price-raw="99000" data-rating-raw="4.4">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M4.jpeg" alt="Razer Kishi V2 (2)" class="product-image">
                        <div class="product-tag tag-promo">-10%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Razer</p>
                        <h3 class="product-title-card">Razer Kishi V2 (2)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">99 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=12" class="product-card" data-id="12" data-brand="microsoft" data-price-raw="60000" data-rating-raw="4.5">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="Xbox Core Controller Noir (2)" class="product-image">
                        <div class="product-tag tag-promo">-15%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Core Controller Noir (2)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.5)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">60 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=17" class="product-card" data-id="17" data-brand="logitech" data-price-raw="25000" data-rating-raw="4.0">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M8.png" alt="Logitech F310 (2)" class="product-image">
                        <div class="product-tag tag-promo">-20%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Logitech</p>
                        <h3 class="product-title-card">Logitech F310 (PC) (2)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                            <span class="rating-text">(4.0)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">25 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=20" class="product-card" data-id="20" data-brand="razer" data-price-raw="99000" data-rating-raw="4.4">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M4.jpeg" alt="Razer Kishi V2 (2)" class="product-image">
                        <div class="product-tag tag-promo">-10%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Razer</p>
                        <h3 class="product-title-card">Razer Kishi V2 (2)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">99 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=12" class="product-card" data-id="12" data-brand="microsoft" data-price-raw="60000" data-rating-raw="4.5">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="Xbox Core Controller Noir (2)" class="product-image">
                        <div class="product-tag tag-promo">-15%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Core Controller Noir (2)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.5)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">60 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=17" class="product-card" data-id="17" data-brand="logitech" data-price-raw="25000" data-rating-raw="4.0">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M8.png" alt="Logitech F310 (2)" class="product-image">
                        <div class="product-tag tag-promo">-20%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Logitech</p>
                        <h3 class="product-title-card">Logitech F310 (PC) (2)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                            <span class="rating-text">(4.0)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">25 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=20" class="product-card" data-id="20" data-brand="razer" data-price-raw="99000" data-rating-raw="4.4">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M4.jpeg" alt="Razer Kishi V2 (2)" class="product-image">
                        <div class="product-tag tag-promo">-10%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Razer</p>
                        <h3 class="product-title-card">Razer Kishi V2 (2)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">99 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=12" class="product-card" data-id="12" data-brand="microsoft" data-price-raw="60000" data-rating-raw="4.5">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="Xbox Core Controller Noir (2)" class="product-image">
                        <div class="product-tag tag-promo">-15%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Core Controller Noir (2)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.5)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">60 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                
                <a href="product_manetteDetail.html?id=22" class="product-card" data-id="22" data-brand="microsoft" data-price-raw="60000" data-rating-raw="4.5">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="Xbox Core Controller Noir (3)" class="product-image">
                        <div class="product-tag tag-promo">-15%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Core Controller Noir (3)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.5)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">60 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=27" class="product-card" data-id="27" data-brand="logitech" data-price-raw="25000" data-rating-raw="4.0">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M8.png" alt="Logitech F310 (3)" class="product-image">
                        <div class="product-tag tag-promo">-20%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Logitech</p>
                        <h3 class="product-title-card">Logitech F310 (PC) (3)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                            <span class="rating-text">(4.0)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">25 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=30" class="product-card" data-id="30" data-brand="razer" data-price-raw="99000" data-rating-raw="4.4">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M4.jpeg" alt="Razer Kishi V2 (3)" class="product-image">
                        <div class="product-tag tag-promo">-10%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Razer</p>
                        <h3 class="product-title-card">Razer Kishi V2 (3)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">99 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=22" class="product-card" data-id="22" data-brand="microsoft" data-price-raw="60000" data-rating-raw="4.5">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="Xbox Core Controller Noir (3)" class="product-image">
                        <div class="product-tag tag-promo">-15%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Core Controller Noir (3)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.5)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">60 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=27" class="product-card" data-id="27" data-brand="logitech" data-price-raw="25000" data-rating-raw="4.0">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M8.png" alt="Logitech F310 (3)" class="product-image">
                        <div class="product-tag tag-promo">-20%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Logitech</p>
                        <h3 class="product-title-card">Logitech F310 (PC) (3)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                            <span class="rating-text">(4.0)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">25 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=30" class="product-card" data-id="30" data-brand="razer" data-price-raw="99000" data-rating-raw="4.4">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M4.jpeg" alt="Razer Kishi V2 (3)" class="product-image">
                        <div class="product-tag tag-promo">-10%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Razer</p>
                        <h3 class="product-title-card">Razer Kishi V2 (3)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">99 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=22" class="product-card" data-id="22" data-brand="microsoft" data-price-raw="60000" data-rating-raw="4.5">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="Xbox Core Controller Noir (3)" class="product-image">
                        <div class="product-tag tag-promo">-15%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Core Controller Noir (3)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.5)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">60 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=27" class="product-card" data-id="27" data-brand="logitech" data-price-raw="25000" data-rating-raw="4.0">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M8.png" alt="Logitech F310 (3)" class="product-image">
                        <div class="product-tag tag-promo">-20%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Logitech</p>
                        <h3 class="product-title-card">Logitech F310 (PC) (3)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                            <span class="rating-text">(4.0)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">25 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=30" class="product-card" data-id="30" data-brand="razer" data-price-raw="99000" data-rating-raw="4.4">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M4.jpeg" alt="Razer Kishi V2 (3)" class="product-image">
                        <div class="product-tag tag-promo">-10%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Razer</p>
                        <h3 class="product-title-card">Razer Kishi V2 (3)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">99 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_manetteDetail.html?id=22" class="product-card" data-id="22" data-brand="microsoft" data-price-raw="60000" data-rating-raw="4.5">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="Xbox Core Controller Noir (3)" class="product-image">
                        <div class="product-tag tag-promo">-15%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Microsoft</p>
                        <h3 class="product-title-card">Xbox Core Controller Noir (3)</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.5)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">60 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                </div>
        </section>

        <div class="pagination" id="pagination-promotion">
            <button class="page-btn" disabled data-direction="prev" data-grid-id="promotion-grid">
                    <i class="fas fa-chevron-left"></i> Précédent
            </button>
                
            <button class="page-num-active" data-page="1" data-grid-id="promotion-grid">1</button>
            <button class="page-num" data-page="2" data-grid-id="promotion-grid">2</button>
            <button class="page-num" data-page="3" data-grid-id="promotion-grid">3</button>
                
            <button class="page-btn" data-direction="next" data-grid-id="promotion-grid">
                Suivant <i class="fas fa-chevron-right"></i>
            </button>
        </div>
        <div class="progress-bar-row">
            <hr class="progress-bar-segment-1">
            <hr class="progress-bar-segment-2">
            <hr class="progress-bar-segment-3">
        </div>
 
    </main>
</body>
@endsection