
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue Complet | Shopcart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}" >
    <link rel="stylesheet" href="{{ asset('assets/css/products_casque.css') }}">
  
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
    <script src="{{ asset('assets/js/carrousel_infini.js') }}" defer></script> 
    <script src="{{ asset('assets/js/product_navigation_casques.js') }}" defer></script> 
    <script src="{{ asset('assets/js/product_pagination_casques.js') }}" defer></script> 
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
                        <img src="/assets/images/M1.png"
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
                        <img src="/assets/images/M1.png"
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
                        <img src="https://img.freepik.com/premium-photo/woman-blows-air-kiss-camera-smartphone-takes-selfie-sends-mwah-via-online-call_849040-1293.jpg"
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
                        <img src="/assets/images/M1.png"
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
                        <img src="/assets/images/M1.png"
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
                        <img src="/assets/images/M1.png"
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
        <section class="products-section">
         <h2 class="section-title" id="title-for-you">
            <span class="gradient-blue-purple">Produits pour vous</span>
         </h2>
         <p class="section-subtitle">Sélection basée sur vos préférences</p>
            <div class="products-grid" id="products-for-you-grid">
                <a href="{{ route('casque_details') }}" class="product-card">
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
                <a href="{{ route('disk_details') }}" class="product-card">
                 <div class="product-image-wrapper">
                        <img src="/assets/images/img_disk3.png" alt="Momentum Sport Orange" class="product-image">
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
                <a href="{{ route('disk_details') }}" class="product-card">
                 <div class="product-image-wrapper">
                        <img src="/assets/images/img_disk5.png" alt="Momentum Sport Orange" class="product-image">
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
                <a href="{{ route('ordi_details') }}" class="product-card">
                 <div class="product-image-wrapper">
                        <img src="/assets/images/img_Lap1.jpg" alt="Momentum Sport Orange" class="product-image">
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
                <a href="{{ route('ordi_details') }}" class="product-card">
                 <div class="product-image-wrapper">
                        <img src="/assets/images/img_disk6.png" alt="Momentum Sport Orange" class="product-image">
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
                <a href="{{ route('ordi_details') }}" class="product-card">
                 <div class="product-image-wrapper">
                        <img src="/assets/images/img_Lap15.jpg" alt="Momentum Sport Orange" class="product-image">
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
                </a><a href="{{ route('disk_details') }}" class="product-card">
                 <div class="product-image-wrapper">
                        <img src="/assets/images/img_disk2.png" alt="Momentum Sport Orange" class="product-image">
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
                <a href="{{ route('disk_details', ['id' => 1]) }}" class="product-card">
                 <div class="product-image-wrapper">
                        <img src="/assets/images/img_disk1.png" alt="Momentum Sport Orange" class="product-image">
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
                <a href="{{ route('disk_details') }}" class="product-card">
                 <div class="product-image-wrapper">
                        <img src="/assets/images/img_disk1.png" alt="Momentum Sport Orange" class="product-image">
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
                <a href="product_casqueDetail.html?id=1" class="product-card">
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
                <a href="product_casqueDetail.html?id=1" class="product-card">
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
                <a href="product_casqueDetail.html?id=1" class="product-card">
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
                <a href="product_casqueDetail.html?id=1" class="product-card">
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
                <a href="product_disk-detail.html" class="product-card">
                 <div class="product-image-wrapper">
                        <img src="/assets/images/img_disk4.png" alt="Momentum Sport Orange" class="product-image">
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
                <a href="product_casqueDetail.html?id=1" class="product-card">
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
                <a href="product_casqueDetail.html?id=1" class="product-card">
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
                <a href="product_casqueDetail.html?id=1" class="product-card">
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
                <a href="product_disk-detail.html" class="product-card">
                 <div class="product-image-wrapper">
                        <img src="/assets/images/img_disk2.png" alt="Momentum Sport Orange" class="product-image">
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
                <a href="product_casqueDetail.html?id=1" class="product-card">
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
                <a href="product_casqueDetail.html?id=1" class="product-card">
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
                <a href="product_casqueDetail.html?id=1" class="product-card">
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
                <a href="product_casqueDetail.html?id=1" class="product-card">
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
                <a href="product_disk-detail.html" class="product-card">
                 <div class="product-image-wrapper">
                        <img src="/assets/images/img_disk1.png" alt="Momentum Sport Orange" class="product-image">
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
                <a href="product_casqueDetail.html?id=1" class="product-card">
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
            <div class="products-grid" id="best-sellers-grid">
           
               <a href="product_casqueDetail.html?id=1" class="product-card">
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
                <a href="product_disk-detail.html" class="product-card">
                 <div class="product-image-wrapper">
                        <img src="/assets/images/img_disk9.png" alt="Momentum Sport Orange" class="product-image">
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
                <a href="product_ordi-detail.html" class="product-card">
                 <div class="product-image-wrapper">
                        <img src="/assets/images/img_Lap12.jpg" alt="Momentum Sport Orange" class="product-image">
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
                <a href="product_disk-detail.html" class="product-card">
                 <div class="product-image-wrapper">
                        <img src="/assets/images/img_disk7.png" alt="Momentum Sport Orange" class="product-image">
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
                <a href="product_ordi-detail.html" class="product-card">
                 <div class="product-image-wrapper">
                        <img src="/assets/images/img_Lap16.jpg" alt="Momentum Sport Orange" class="product-image">
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
                <a href="product_casqueDetail.html?id=2" class="product-card">
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
                <a href="product_ordi-detail.html" class="product-card">
                 <div class="product-image-wrapper">
                        <img src="/assets/images/img_Lap6.jpg" alt="Momentum Sport Orange" class="product-image">
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
                <a href="product_disk-detail.html" class="product-card">
                 <div class="product-image-wrapper">
                        <img src="/assets/images/img_disk1.png" alt="Momentum Sport Orange" class="product-image">
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
                <a href="product_ordi-detail.html" class="product-card">
                 <div class="product-image-wrapper">
                        <img src="/assets/images/img_Lap3.jpg" alt="Momentum Sport Orange" class="product-image">
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
                <a href="product_casqueDetail.html?id=2" class="product-card">
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
                <a href="product_casqueDetail.html?id=2" class="product-card">
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
                <a href="product_disk-detail.html" class="product-card">
                 <div class="product-image-wrapper">
                        <img src="/assets/images/img_disk1.png" alt="Momentum Sport Orange" class="product-image">
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
                <a href="product_casqueDetail.html?id=2" class="product-card">
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
                <a href="product_ordi-detail.html" class="product-card">
                 <div class="product-image-wrapper">
                        <img src="/assets/images/img_Lap2.jpg" alt="Momentum Sport Orange" class="product-image">
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
                <a href="product_casqueDetail.html?id=2" class="product-card">
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
                <a href="product_ordi-detail.html" class="product-card">
                 <div class="product-image-wrapper">
                        <img src="/assets/images/img_Lap6.jpg" alt="Momentum Sport Orange" class="product-image">
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
                <a href="product_disk-detail.html" class="product-card">
                 <div class="product-image-wrapper">
                        <img src="/assets/images/img_disk1.png" alt="Momentum Sport Orange" class="product-image">
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
                <a href="product_casqueDetail.html?id=2" class="product-card">
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
                <a href="product_casqueDetail.html?id=2" class="product-card">
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
                <a href="product_disk-detail.html" class="product-card">
                 <div class="product-image-wrapper">
                        <img src="/assets/images/img_disk1.png" alt="Momentum Sport Orange" class="product-image">
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
                <a href="product_disk-detail.html" class="product-card">
                 <div class="product-image-wrapper">
                        <img src="/assets/images/img_disk1.png" alt="Momentum Sport Orange" class="product-image">
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
                <a href="product_ordi-detail.html" class="product-card">
                 <div class="product-image-wrapper">
                        <img src="/assets/images/img_Lap1.jpg" alt="Momentum Sport Orange" class="product-image">
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
                <a href="product_casqueDetail.html?id=2" class="product-card">
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
                <a href="product_casqueDetail.html?id=2" class="product-card">
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
                <a href="product_casqueDetail.html?id=2" class="product-card">
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
                <a href="product_casqueDetail.html?id=2" class="product-card">
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
                <a href="product_casqueDetail.html?id=2" class="product-card">
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
                <a href="product_casqueDetail.html?id=2" class="product-card">
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
                <a href="product_casqueDetail.html?id=2" class="product-card">
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
                <a href="product_casqueDetail.html?id=2" class="product-card">
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
              
                <a href="product_casqueDetail.html?id=7" class="product-card">
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
       
                <a href="product_casqueDetail.html?id=1" class="product-card">
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
            </div>
        </section>
        <div class="pagination" id="pagination-best-sellers">
            <button class="page-btn" data-direction="prev" data-grid-id="best-sellers-grid" disabled>
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
                <span class="gradient-blue-purple">En Promotion</span>
            </h2>
            <p class="section-subtitle">Profitez de nos offres exceptionnelles</p>
            
            <div class="products-grid" id="promotion-grid">
                <a href="product_casqueDetail.html?id=2" class="product-card">
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
                <a href="product_disk-detail.html" class="product-card">
                 <div class="product-image-wrapper">
                        <img src="/assets/images/img_disk2.png" alt="Momentum Sport Orange" class="product-image">
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
                <a href="product_casqueDetail.html?id=2" class="product-card">
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
                <a href="product_ordi-detail.html" class="product-card">
                 <div class="product-image-wrapper">
                        <img src="/assets/images/img_Lap14.jpg" alt="Momentum Sport Orange" class="product-image">
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
                <a href="product_ordi-detail.html" class="product-card">
                 <div class="product-image-wrapper">
                        <img src="/assets/images/img_Lap1.jpg" alt="Momentum Sport Orange" class="product-image">
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
                <a href="product_disk-detail.html" class="product-card">
                 <div class="product-image-wrapper">
                        <img src="/assets/images/img_disk16.png" alt="Momentum Sport Orange" class="product-image">
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
                <a href="product_casqueDetail.html?id=2" class="product-card">
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
                <a href="product_ordi-detail.html" class="product-card">
                 <div class="product-image-wrapper">
                        <img src="/assets/images/img_Lap14.jpg" alt="Momentum Sport Orange" class="product-image">
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
                <a href="product_casqueDetail.html?id=2" class="product-card">
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
                <a href="product_ordi-detail.html" class="product-card">
                 <div class="product-image-wrapper">
                        <img src="/assets/images/img_Lap2.jpg" alt="Momentum Sport Orange" class="product-image">
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
                <a href="product_casqueDetail.html?id=2" class="product-card">
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
                <a href="product_ordi-detail.html" class="product-card">
                 <div class="product-image-wrapper">
                        <img src="/assets/images/img_Lap3.jpg" alt="Momentum Sport Orange" class="product-image">
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
                <a href="product_casqueDetail.html?id=2" class="product-card">
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
                <a href="product_casqueDetail.html?id=2" class="product-card">
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
                <a href="product_ordi-detail.html" class="product-card">
                 <div class="product-image-wrapper">
                        <img src="/assets/images/img_Lap5.jpg" alt="Momentum Sport Orange" class="product-image">
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
                <a href="product_casqueDetail.html?id=2" class="product-card">
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
                <a href="product_casqueDetail.html?id=2" class="product-card">
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
                <a href="product_ordi-detail.html" class="product-card">
                 <div class="product-image-wrapper">
                        <img src="/assets/images/img_Lap5.jpg" alt="Momentum Sport Orange" class="product-image">
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
                <a href="product_disk-detail.html" class="product-card">
                 <div class="product-image-wrapper">
                        <img src="/assets/images/img_disk1.png" alt="Momentum Sport Orange" class="product-image">
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
                <a href="product_casqueDetail.html?id=2" class="product-card">
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
                <a href="product_disk-detail.html" class="product-card">
                 <div class="product-image-wrapper">
                        <img src="/assets/images/img_disk2.png" alt="Momentum Sport Orange" class="product-image">
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
                <a href="product_casqueDetail.html?id=2" class="product-card">
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
                <a href="product_casqueDetail.html?id=2" class="product-card">
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
                <a href="product_disk-detail.html" class="product-card">
                 <div class="product-image-wrapper">
                        <img src="/assets/images/img_disk3.png" alt="Momentum Sport Orange" class="product-image">
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
                <a href="product_casqueDetail.html?id=2" class="product-card">
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
                <a href="product_casqueDetail.html?id=2" class="product-card">
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
                
                <a href="product_casqueDetail.html?id=2" class="product-card">
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
                <a href="product_casqueDetail.html?id=2" class="product-card">
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
                <a href="product_casqueDetail.html?id=7" class="product-card">
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
               
                <a href="product_casqueDetail.html?id=9" class="product-card">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C9.jpeg" alt="AirPods Max" class="product-image">
                        <div class="product-tag tag-promo">-10%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Apple</p>
                        <h3 class="product-title-card">AirPods Max</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <span class="rating-text">(4.9)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">400 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="product_casqueDetail.html?id=10" class="product-card">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C10.jpeg" alt="WH-1000XM5" class="product-image">
                        <div class="product-tag tag-promo">-20%</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sony</p>
                        <h3 class="product-title-card">WH-1000XM5</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.7)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">350 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
            </div>
        </section>

        <div class="pagination" id="pagination-promotion">
            <button class="page-btn" data-direction="prev" data-grid-id="promotion-grid" disabled>
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