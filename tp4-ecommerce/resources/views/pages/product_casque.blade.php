
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casques Audio | Shopcart</title> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}" >
    <link rel="stylesheet" href="{{ asset('assets/css/products_casque.css') }}" >
    
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
    <script src="{{ asset('assets/js/product_filtres.js')  }}" defer></script> 
    <script src="{{ asset('assets/js/product_pagination.js') }}" defer></script> 
    <script src="{{ asset('assets/js/product_navigation_casques.js') }}" defer></script> 
    <script src="{{ asset('assets/js/carousel_auto.js') }}" defer></script> 
    <script defer src="{{ asset('assets/js/newsletter.js') }}"></script>
    <script src="{{ asset('assets/js/cart-manager.js') }}" defer></script>
</head>
@extends('layouts.app')

@section('title', 'Produit- Shopecart')

@section('content')

<body>
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
                        <img src="/assets/images/22.jpeg"
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
                        <img src="/assets/images/22.jpeg"
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
                        <img src="/assets/images/22.jpeg"
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
                        <img src="/assets/images/22.jpeg"
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
                        <img src="/assets/images/22.jpeg"
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
                        <img src="/assets/images/22.jpeg"
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
                <input type="radio" name="filters" id="none" checked hidden>

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
                    <input type="radio" name="filters" id="marques-toggle" hidden>
                    <label for="marques-toggle" class="tag-button">
                        Marques <span class="dropdown-arrow">▼</span>
                    </label>
                    <div class="dropdown-content">
                        <a href="#" data-brand="sony"><i class="fab fa-playstation"></i> Sony (PlayStation)</a>
                        <a href="#" data-brand="microsoft"><i class="fab fa-xbox"></i> Microsoft (Xbox)</a>
                        <a href="#" data-brand="nintendo"><i class="fas fa-gamepad"></i> Nintendo</a>
                        <a href="#" data-brand="razer"><i class="fas fa-snake"></i> Razer</a>
                        <a href="#" data-brand="logitech"><i class="fas fa-mouse-pointer"></i> Logitech</a>
                        <a href="#" data-brand="nacon"><i class="fas fa-trophy"></i> Nacon</a>
                        <a href="#" data-brand="8bitdo"><i class="fas fa-robot"></i> 8BitDo</a>
                    </div>
                </div>
                <div class="filter-dropdown" tabindex="0">
                    <input type="radio" name="filters" id="notes-toggle" hidden>
                    <label for="notes-toggle" class="tag-button">
                        Notes <span class="dropdown-arrow">▼</span>
                    </label>
                    <div class="dropdown-content">
                        <a href="#" data-rating="5"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> (5.0 étoiles)</a>
                        <a href="#" data-rating="4.5"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i> (4.5 étoiles)</a>
                        <a href="#" data-rating="4"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> (4.0 étoiles)</a>
                        <a href="#" data-rating="3"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> (3.0 étoiles)</a>
                        <a href="#" data-rating="2"><i class="fas fa-star"></i><i class="fas fa-star"></i> (2.0 étoiles)</a>
                        <a href="#" data-rating="1"><i class="fas fa-star"></i> (1.0 étoile)</a>
                    </div>
                </div>
                </div>
 
      
        <section class="products-section">
            <h2 class="section-title" id="title-for-you">
                <span class="gradient-blue-purple">Produits pour vous</span>
            </h2>
            <p class="section-subtitle">Sélection basée sur vos préférences</p>
            <div class="products-grid" id="products-for-you-grid">
              
                <a href="{{ route('casque_details', ['id' => 1]) }}" class="product-card" data-id="1" data-brand="sennheiser" data-price-raw="150000" data-rating-raw="4.4">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C1.jpeg" alt="Momentum Sport Orange" class="product-image">
                        <div class="product-tag tag-premium">PREMIUM</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sennheiser</p>
                        <h3 class="product-title-card">Momentum Sport Orange</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">150 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 2]) }}" class="product-card" data-id="1" data-brand="sennheiser" data-price-raw="150000" data-rating-raw="4.4">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C2.jpeg" alt="Momentum Sport Orange" class="product-image">
                        <div class="product-tag tag-premium">PREMIUM</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sennheiser</p>
                        <h3 class="product-title-card">Momentum Sport Orange</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">150 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 1]) }}" class="product-card" data-id="1" data-brand="sennheiser" data-price-raw="150000" data-rating-raw="4.4">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C3.png" alt="Momentum Sport Orange" class="product-image">
                        <div class="product-tag tag-premium">PREMIUM</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sennheiser</p>
                        <h3 class="product-title-card">Momentum Sport Orange</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">150 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 1]) }}" class="product-card" data-id="1" data-brand="sennheiser" data-price-raw="150000" data-rating-raw="4.4">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C4.jpeg" alt="Momentum Sport Orange" class="product-image">
                        <div class="product-tag tag-premium">PREMIUM</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sennheiser</p>
                        <h3 class="product-title-card">Momentum Sport Orange</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">150 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 1]) }}" class="product-card" data-id="1" data-brand="sennheiser" data-price-raw="150000" data-rating-raw="4.4">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C5.jpeg" alt="Momentum Sport Orange" class="product-image">
                        <div class="product-tag tag-premium">PREMIUM</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sennheiser</p>
                        <h3 class="product-title-card">Momentum Sport Orange</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">150 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 1]) }}" class="product-card" data-id="1" data-brand="sennheiser" data-price-raw="150000" data-rating-raw="4.4">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C6.jpeg" alt="Momentum Sport Orange" class="product-image">
                        <div class="product-tag tag-premium">PREMIUM</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sennheiser</p>
                        <h3 class="product-title-card">Momentum Sport Orange</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">150 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 1]) }}" class="product-card" data-id="1" data-brand="sennheiser" data-price-raw="150000" data-rating-raw="4.4">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C7.jpeg" alt="Momentum Sport Orange" class="product-image">
                        <div class="product-tag tag-premium">PREMIUM</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sennheiser</p>
                        <h3 class="product-title-card">Momentum Sport Orange</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">150 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 1]) }}" class="product-card" data-id="1" data-brand="sennheiser" data-price-raw="150000" data-rating-raw="4.4">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C8.png" alt="Momentum Sport Orange" class="product-image">
                        <div class="product-tag tag-premium">PREMIUM</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sennheiser</p>
                        <h3 class="product-title-card">Momentum Sport Orange</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">150 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 1]) }}" class="product-card" data-id="1" data-brand="sennheiser" data-price-raw="150000" data-rating-raw="4.4">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C9.jpeg" alt="Momentum Sport Orange" class="product-image">
                        <div class="product-tag tag-premium">PREMIUM</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sennheiser</p>
                        <h3 class="product-title-card">Momentum Sport Orange</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">150 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 1]) }}" class="product-card" data-id="1" data-brand="sennheiser" data-price-raw="150000" data-rating-raw="4.4">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C10.jpeg" alt="Momentum Sport Orange" class="product-image">
                        <div class="product-tag tag-premium">PREMIUM</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sennheiser</p>
                        <h3 class="product-title-card">Momentum Sport Orange</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">150 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 1]) }}" class="product-card" data-id="1" data-brand="sennheiser" data-price-raw="150000" data-rating-raw="4.4">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C1.jpeg" alt="Momentum Sport Orange" class="product-image">
                        <div class="product-tag tag-premium">PREMIUM</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sennheiser</p>
                        <h3 class="product-title-card">Momentum Sport Orange</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">150 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 1]) }}" class="product-card" data-id="1" data-brand="sennheiser" data-price-raw="150000" data-rating-raw="4.4">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C2.jpeg" alt="Momentum Sport Orange" class="product-image">
                        <div class="product-tag tag-premium">PREMIUM</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sennheiser</p>
                        <h3 class="product-title-card">Momentum Sport Orange</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">150 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 2]) }}" class="product-card" data-id="2" data-brand="beats by dre" data-price-raw="220000" data-rating-raw="4.5">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C6.jpeg" alt="Studio 3 Wireless" class="product-image">
                        <div class="product-tag tag-promo">-25%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Beats by Dre</p>
                        <h3 class="product-title-card">Studio 3 Wireless</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.5)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">220 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 3]) }}" class="product-card" data-id="3" data-brand="bose" data-price-raw="299000" data-rating-raw="4.8">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C" alt="QuietComfort 45" class="product-image">
                        <div class="product-tag tag-best-seller">TOP VENTE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Bose</p>
                        <h3 class="product-title-card">QuietComfort 45</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.8)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">299 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 4]) }}" class="product-card" data-id="4" data-brand="sony" data-price-raw="349000" data-rating-raw="4.9">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="WH-1000XM5" class="product-image">
                        <div class="product-tag tag-new tag-right">NOUVEAU</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sony</p>
                        <h3 class="product-title-card">WH-1000XM5</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.9)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">349 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 5]) }}" class="product-card" data-id="5" data-brand="jbl" data-price-raw="129000" data-rating-raw="4.2">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C13.jpeg" alt="Live 660NC" class="product-image">
                        
                    </div>
                    <div class="product-info">
                        <p class="product-brand">JBL</p>
                        <h3 class="product-title-card">Live 660NC</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                            <span class="rating-text">(4.2)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">129 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 6]) }}" class="product-card" data-id="6" data-brand="marshall" data-price-raw="179000" data-rating-raw="4.6">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M4.jpeg" alt="Major IV Bluetooth" class="product-image">
                        
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Marshall</p>
                        <h3 class="product-title-card">Major IV Bluetooth</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.6)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">179 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 7]) }}" class="product-card" data-id="7" data-brand="anker" data-price-raw="89000" data-rating-raw="4.3">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C7.jpeg" alt="Soundcore Life Q35" class="product-image">
                        <div class="product-tag tag-promo">-15%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Anker</p>
                        <h3 class="product-title-card">Soundcore Life Q35</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.3)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">89 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 8]) }}" class="product-card" data-id="8" data-brand="skullcandy" data-price-raw="159000" data-rating-raw="4.0">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C5.jpeg" alt="Crusher Evo" class="product-image">
                        
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Skullcandy</p>
                        <h3 class="product-title-card">Crusher Evo</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                            <span class="rating-text">(4.0)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">159 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 9]) }}" class="product-card" data-id="9" data-brand="jabra" data-price-raw="249000" data-rating-raw="4.7">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C4.jpeg" alt="Elite 85h Titanium Black" class="product-image">
                        
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Jabra</p>
                        <h3 class="product-title-card">Elite 85h Titanium Black</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.7)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">249 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 10]) }}" class="product-card" data-id="10" data-brand="akg" data-price-raw="139000" data-rating-raw="4.8">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C3.png" alt="K371 Studio" class="product-image">
                        
                    </div>
                    <div class="product-info">
                        <p class="product-brand">AKG</p>
                        <h3 class="product-title-card">K371 Studio</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.8)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">139 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                </div>
        </section>
        
        <div class="pagination" id="pagination-for-you">
            <button class="page-btn" data-direction="prev" data-grid-id="products-for-you-grid" disabled>
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
                <span class="gradient-blue-purple">Best Sellers</span>
            </h2>
            <p class="section-subtitle">Nos meilleures ventes</p>
            <div class="products-grid" id="products-for-you-grid">
                <a href="product_casqueDetail.html?id=1" class="product-card" data-id="1" data-brand="sennheiser" data-price-raw="150000" data-rating-raw="4.4">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C1.jpeg" alt="Momentum Sport Orange" class="product-image">
                        <div class="product-tag tag-premium">PREMIUM</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sennheiser</p>
                        <h3 class="product-title-card">Momentum Sport Orange</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">150 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 1]) }}" class="product-card" data-id="1" data-brand="sennheiser" data-price-raw="150000" data-rating-raw="4.4">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C2.jpeg" alt="Momentum Sport Orange" class="product-image">
                        <div class="product-tag tag-premium">PREMIUM</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sennheiser</p>
                        <h3 class="product-title-card">Momentum Sport Orange</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">150 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 1]) }}" class="product-card" data-id="1" data-brand="sennheiser" data-price-raw="150000" data-rating-raw="4.4">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C3.png" alt="Momentum Sport Orange" class="product-image">
                        <div class="product-tag tag-premium">PREMIUM</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sennheiser</p>
                        <h3 class="product-title-card">Momentum Sport Orange</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">150 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 1]) }}" class="product-card" data-id="1" data-brand="sennheiser" data-price-raw="150000" data-rating-raw="4.4">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C4.jpeg" alt="Momentum Sport Orange" class="product-image">
                        <div class="product-tag tag-premium">PREMIUM</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sennheiser</p>
                        <h3 class="product-title-card">Momentum Sport Orange</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">150 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 1]) }}" class="product-card" data-id="1" data-brand="sennheiser" data-price-raw="150000" data-rating-raw="4.4">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C5.jpeg" alt="Momentum Sport Orange" class="product-image">
                        <div class="product-tag tag-premium">PREMIUM</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sennheiser</p>
                        <h3 class="product-title-card">Momentum Sport Orange</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">150 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 1]) }}" class="product-card" data-id="1" data-brand="sennheiser" data-price-raw="150000" data-rating-raw="4.4">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C6.jpeg" alt="Momentum Sport Orange" class="product-image">
                        <div class="product-tag tag-premium">PREMIUM</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sennheiser</p>
                        <h3 class="product-title-card">Momentum Sport Orange</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">150 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 1]) }}" class="product-card" data-id="1" data-brand="sennheiser" data-price-raw="150000" data-rating-raw="4.4">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C7.jpeg" alt="Momentum Sport Orange" class="product-image">
                        <div class="product-tag tag-premium">PREMIUM</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sennheiser</p>
                        <h3 class="product-title-card">Momentum Sport Orange</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">150 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 1]) }}" class="product-card" data-id="1" data-brand="sennheiser" data-price-raw="150000" data-rating-raw="4.4">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C8.png" alt="Momentum Sport Orange" class="product-image">
                        <div class="product-tag tag-premium">PREMIUM</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sennheiser</p>
                        <h3 class="product-title-card">Momentum Sport Orange</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">150 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 1]) }}" class="product-card" data-id="1" data-brand="sennheiser" data-price-raw="150000" data-rating-raw="4.4">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C9.jpeg" alt="Momentum Sport Orange" class="product-image">
                        <div class="product-tag tag-premium">PREMIUM</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sennheiser</p>
                        <h3 class="product-title-card">Momentum Sport Orange</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">150 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 1]) }}" class="product-card" data-id="1" data-brand="sennheiser" data-price-raw="150000" data-rating-raw="4.4">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C10.jpeg" alt="Momentum Sport Orange" class="product-image">
                        <div class="product-tag tag-premium">PREMIUM</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sennheiser</p>
                        <h3 class="product-title-card">Momentum Sport Orange</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">150 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 1]) }}" class="product-card" data-id="1" data-brand="sennheiser" data-price-raw="150000" data-rating-raw="4.4">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C1.jpeg" alt="Momentum Sport Orange" class="product-image">
                        <div class="product-tag tag-premium">PREMIUM</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sennheiser</p>
                        <h3 class="product-title-card">Momentum Sport Orange</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">150 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 1]) }}" class="product-card" data-id="1" data-brand="sennheiser" data-price-raw="150000" data-rating-raw="4.4">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C2.jpeg" alt="Momentum Sport Orange" class="product-image">
                        <div class="product-tag tag-premium">PREMIUM</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sennheiser</p>
                        <h3 class="product-title-card">Momentum Sport Orange</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">150 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 2]) }}" class="product-card" data-id="2" data-brand="beats by dre" data-price-raw="220000" data-rating-raw="4.5">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C6.jpeg" alt="Studio 3 Wireless" class="product-image">
                        <div class="product-tag tag-promo">-25%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Beats by Dre</p>
                        <h3 class="product-title-card">Studio 3 Wireless</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.5)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">220 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 3]) }}" class="product-card" data-id="3" data-brand="bose" data-price-raw="299000" data-rating-raw="4.8">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C" alt="QuietComfort 45" class="product-image">
                        <div class="product-tag tag-best-seller">TOP VENTE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Bose</p>
                        <h3 class="product-title-card">QuietComfort 45</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.8)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">299 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 4]) }}" class="product-card" data-id="4" data-brand="sony" data-price-raw="349000" data-rating-raw="4.9">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="WH-1000XM5" class="product-image">
                        <div class="product-tag tag-new tag-right">NOUVEAU</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sony</p>
                        <h3 class="product-title-card">WH-1000XM5</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.9)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">349 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 5]) }}" class="product-card" data-id="5" data-brand="jbl" data-price-raw="129000" data-rating-raw="4.2">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C13.jpeg" alt="Live 660NC" class="product-image">
                        
                    </div>
                    <div class="product-info">
                        <p class="product-brand">JBL</p>
                        <h3 class="product-title-card">Live 660NC</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                            <span class="rating-text">(4.2)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">129 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 6]) }}" class="product-card" data-id="6" data-brand="marshall" data-price-raw="179000" data-rating-raw="4.6">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M4.jpeg" alt="Major IV Bluetooth" class="product-image">
                        
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Marshall</p>
                        <h3 class="product-title-card">Major IV Bluetooth</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.6)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">179 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 7]) }}" class="product-card" data-id="7" data-brand="anker" data-price-raw="89000" data-rating-raw="4.3">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C7.jpeg" alt="Soundcore Life Q35" class="product-image">
                        <div class="product-tag tag-promo">-15%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Anker</p>
                        <h3 class="product-title-card">Soundcore Life Q35</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.3)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">89 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 8]) }}" class="product-card" data-id="8" data-brand="skullcandy" data-price-raw="159000" data-rating-raw="4.0">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C5.jpeg" alt="Crusher Evo" class="product-image">
                        
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Skullcandy</p>
                        <h3 class="product-title-card">Crusher Evo</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                            <span class="rating-text">(4.0)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">159 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 9]) }}" class="product-card" data-id="9" data-brand="jabra" data-price-raw="249000" data-rating-raw="4.7">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C4.jpeg" alt="Elite 85h Titanium Black" class="product-image">
                        
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Jabra</p>
                        <h3 class="product-title-card">Elite 85h Titanium Black</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.7)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">249 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 10]) }}" class="product-card" data-id="10" data-brand="akg" data-price-raw="139000" data-rating-raw="4.8">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C3.png" alt="K371 Studio" class="product-image">
                        
                    </div>
                    <div class="product-info">
                        <p class="product-brand">AKG</p>
                        <h3 class="product-title-card">K371 Studio</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.8)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">139 000 FCFA</span>
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
                <span class="gradient-blue-purple">Produits en promotion</span>
            </h2>
            <p class="section-subtitle">Offres spéciales et remises</p>
            <div class="products-grid" id="promotion-grid">
               <a href="{{ route('casque_details', ['id' => 1]) }}" class="product-card">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C1.jpeg" alt="Momentum Sport Orange" class="product-image">
                        <div class="product-tag tag-premium">PREMIUM</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sennheiser</p>
                        <h3 class="product-title-card">Momentum Sport Orange</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">150 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 1]) }}" class="product-card" data-id="1" data-brand="sennheiser" data-price-raw="150000" data-rating-raw="4.4">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C1.jpeg" alt="Momentum Sport Orange" class="product-image">
                        <div class="product-tag tag-premium">PREMIUM</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sennheiser</p>
                        <h3 class="product-title-card">Momentum Sport Orange</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">150 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 1]) }}" class="product-card" data-id="1" data-brand="sennheiser" data-price-raw="150000" data-rating-raw="4.4">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C1.jpeg" alt="Momentum Sport Orange" class="product-image">
                        <div class="product-tag tag-premium">PREMIUM</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sennheiser</p>
                        <h3 class="product-title-card">Momentum Sport Orange</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">150 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 1]) }}" class="product-card" data-id="1" data-brand="sennheiser" data-price-raw="150000" data-rating-raw="4.4">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C1.jpeg" alt="Momentum Sport Orange" class="product-image">
                        <div class="product-tag tag-premium">PREMIUM</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sennheiser</p>
                        <h3 class="product-title-card">Momentum Sport Orange</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">150 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 1]) }}" class="product-card" data-id="1" data-brand="sennheiser" data-price-raw="150000" data-rating-raw="4.4">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C1.jpeg" alt="Momentum Sport Orange" class="product-image">
                        <div class="product-tag tag-premium">PREMIUM</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sennheiser</p>
                        <h3 class="product-title-card">Momentum Sport Orange</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">150 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 2]) }}" class="product-card">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C6.jpeg" alt="Studio 3 Wireless" class="product-image">
                        <div class="product-tag tag-promo">-25%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Beats by Dre</p>
                        <h3 class="product-title-card">Studio 3 Wireless</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.5)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">220 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 7]) }}" class="product-card">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C7.jpeg" alt="Soundcore Life Q35" class="product-image">
                        <div class="product-tag tag-promo">-15%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Anker</p>
                        <h3 class="product-title-card">Soundcore Life Q35</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.3)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">89 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 1]) }}" class="product-card">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C1.jpeg" alt="Momentum Sport Orange" class="product-image">
                        <div class="product-tag tag-premium">PREMIUM</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sennheiser</p>
                        <h3 class="product-title-card">Momentum Sport Orange</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">150 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 2]) }}" class="product-card">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C6.jpeg" alt="Studio 3 Wireless" class="product-image">
                        <div class="product-tag tag-promo">-25%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Beats by Dre</p>
                        <h3 class="product-title-card">Studio 3 Wireless</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.5)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">220 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 7]) }}" class="product-card">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C7.jpeg" alt="Soundcore Life Q35" class="product-image">
                        <div class="product-tag tag-promo">-15%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Anker</p>
                        <h3 class="product-title-card">Soundcore Life Q35</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.3)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">89 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 1]) }}" class="product-card">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C1.jpeg" alt="Momentum Sport Orange" class="product-image">
                        <div class="product-tag tag-premium">PREMIUM</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sennheiser</p>
                        <h3 class="product-title-card">Momentum Sport Orange</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">150 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 2]) }}" class="product-card">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C6.jpeg" alt="Studio 3 Wireless" class="product-image">
                        <div class="product-tag tag-promo">-25%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Beats by Dre</p>
                        <h3 class="product-title-card">Studio 3 Wireless</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.5)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">220 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 7]) }}" class="product-card">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C7.jpeg" alt="Soundcore Life Q35" class="product-image">
                        <div class="product-tag tag-promo">-15%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Anker</p>
                        <h3 class="product-title-card">Soundcore Life Q35</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.3)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">89 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 1]) }}" class="product-card">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C1.jpeg" alt="Momentum Sport Orange" class="product-image">
                        <div class="product-tag tag-premium">PREMIUM</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sennheiser</p>
                        <h3 class="product-title-card">Momentum Sport Orange</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">150 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 3]) }}" class="product-card">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="QuietComfort 45" class="product-image">
                        <div class="product-tag tag-best-seller">TOP VENTE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Bose</p>
                        <h3 class="product-title-card">QuietComfort 45</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.8)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">299 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 3]) }}" class="product-card">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="QuietComfort 45" class="product-image">
                        <div class="product-tag tag-best-seller">TOP VENTE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Bose</p>
                        <h3 class="product-title-card">QuietComfort 45</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.8)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">299 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 3]) }}" class="product-card">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="QuietComfort 45" class="product-image">
                        <div class="product-tag tag-best-seller">TOP VENTE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Bose</p>
                        <h3 class="product-title-card">QuietComfort 45</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.8)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">299 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 3]) }}" class="product-card">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="QuietComfort 45" class="product-image">
                        <div class="product-tag tag-best-seller">TOP VENTE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Bose</p>
                        <h3 class="product-title-card">QuietComfort 45</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.8)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">299 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 3]) }}" class="product-card">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="QuietComfort 45" class="product-image">
                        <div class="product-tag tag-best-seller">TOP VENTE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Bose</p>
                        <h3 class="product-title-card">QuietComfort 45</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.8)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">299 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 3]) }}" class="product-card">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="QuietComfort 45" class="product-image">
                        <div class="product-tag tag-best-seller">TOP VENTE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Bose</p>
                        <h3 class="product-title-card">QuietComfort 45</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.8)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">299 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 3]) }}" class="product-card">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M2.png" alt="QuietComfort 45" class="product-image">
                        <div class="product-tag tag-best-seller">TOP VENTE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Bose</p>
                        <h3 class="product-title-card">QuietComfort 45</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.8)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">299 000 FCFA</span>
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

 
    </main>
</body>
@endsection