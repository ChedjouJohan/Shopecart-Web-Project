

<head>
    <meta charset="UTF-8">
    <title>Telephones | Shopcart</title>
    <link rel="stylesheet" href="{{ asset('assets/css/products_tel_cam.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script defer src="{{ asset('assets/js/newsletter.js') }}"></script>
<script src="{{ asset('assets/js/cart-manager.js') }}" defer></script>
    <script src="{{ asset('assets/js/header.js') }}"></script>
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
                        <img src="https://img.freepik.com/premium-photo/young-black-woman-using-her-phone-with-smiling_216356-2370.jpg"
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
                        <img src="https://img.freepik.com/premium-photo/young-black-woman-using-smartphone_51530-5337.jpg"
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
                        <img src="https://thumbs.dreamstime.com/b/black-young-woman-phone-hands-empty-blue-background-smiling-african-woman-working-phone-portrait-empty-copy-263033266.jpg"
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
                        <img src="https://img.freepik.com/premium-photo/young-black-woman-using-her-phone-with-smiling_216356-2370.jpg"
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
                        <img src="https://img.freepik.com/premium-photo/young-black-woman-using-smartphone_51530-5337.jpg"
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
                <a href="#" data-brand="samsung"><i class="fa-solid fa-phone"></i> Samsung</a>
                <a href="#" data-brand="google"><i class="fa-brands fa-google"></i> Google</a>
                <a href="#" data-brand="itel"><i class="fa-solid fa-mobile"></i></i> Itel</a>
                <a href="#" data-brand="iphone"><i class="fa-brands fa-apple"></i> Iphone</a>
                <a href="#" data-brand="nokia"><i class="fa-solid fa-mobile-retro"></i> Nokia</a>
                <a href="#" data-brand="motorola"><i class="fa-solid fa-circle-user"></i> Motorola</a>
                <a href="#" data-brand="tecno"><i class="fa-solid fa-mobile-button"></i> Tecno</a>
                <a href="#" data-brand="vivo"><i class="fa-solid fa-bell"></i> Vivo</a>
                <a href="#" data-brand="huawei"><i class="fa-solid fa-globe"></i> Huawei</a>
                <a href="#" data-brand="xiaomi"><i class="fa-solid fa-mobile-screen-button"></i> Xiaomi</a>
                <a href="#" data-brand="infinix"><i class="fas fa-bolt"></i> Infinix</a>
                <a href="#" data-brand="alcatel"><i class="fa-solid fa-comment"></i> Alcatel</a>
            </div>
        </div>

        <!-- Filtre Notes -->
        <div class="product-filter-item" tabindex="0">
            <input type="checkbox" name="filters" id="notes-casques-toggle" class="filter-radio-input">
            <label for="notes-casques-toggle" class="filter-button-label">
                Notes <span class="filter-arrow-icon">▼</span>
            </label>
            <div class="filter-options-list">
                <a href="#" data-rating="5"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                        class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> (5 étoiles)</a>
                <a href="#" data-rating="4"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                        class="fas fa-star"></i><i class="fas fa-star"></i> et +</a>
                <a href="#" data-rating="3"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                        class="fas fa-star"></i> et +</a>
                <a href="#" data-rating="2"><i class="fas fa-star"></i><i class="fas fa-star"></i> et +</a>
                <a href="#" data-rating="1"><i class="fas fa-star"></i> et +</a>
            </div>
        </div>
    </div>

    <!--Products Section-->
    <section class="products">
        <div class="container">
            <h2 id="title1">Products For You</h2>
            <div class="products-group">
                <div class="products-grid" id="grid1">
                    <!--Product-Card-->
                    <div class="product-card">
                        <div class="product-frame">
                            <img src="https://dicas.olx.com.br/wp-content/uploads/2024/10/iphone-16-lancamento-recursos.jpg"
                                alt="Iphone 16" class="product-image">
                        </div>
                        <h3 class="product-title">Iphone 16</h3>
                        <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-regular fa-star"></i> (4.2)</div>
                        <div class="price-cart">
                            <p class="product-price">850000 FCFA</p>
                            <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-frame">
                            <img src="https://www.gadgetpilipinas.net/wp-content/uploads/2024/09/Itel-A80-Philippines-4-770x576.jpg"
                                alt="Itel A80" class="product-image">
                        </div>
                        <h3 class="product-title">Itel A80</h3>
                        <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-regular fa-star"></i> (3.8)</div>
                        <div class="price-cart">
                            <p class="product-price">45000 FCFA</p>
                            <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-frame">
                            <img src="https://tse1.explicit.bing.net/th/id/OIP.ifv4th66VNRv4pU3FfQt_gHaIC?cb=12&rs=1&pid=ImgDetMain&o=7&rm=3"
                                alt="Samsung Galaxy Note 20" class="product-image">
                        </div>
                        <h3 class="product-title">Samsung Galaxy Note 20</h3>
                        <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-regular fa-star"></i> (4.1)</div>
                        <div class="price-cart">
                            <p class="product-price">280000 FCFA</p>
                            <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-frame">
                            <img src="https://static1.anpoimages.com/wordpress/wp-content/uploads/2024/08/google-pixel-9-pro.png"
                                alt="Google Pixel 9" class="product-image">
                        </div>
                        <h3 class="product-title">Google Pixel 9</h3>
                        <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star-half-stroke"></i> (4.6)</div>
                        <div class="price-cart">
                            <p class="product-price">750000 FCFA</p>
                            <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-frame">
                            <img src="https://static1.pocketnowimages.com/wordpress/wp-content/uploads/2023/09/pbi-iphone-15.png"
                                alt="Iphone 15" class="product-image">
                        </div>
                        <h3 class="product-title">Iphone 15</h3>
                        <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star-half-stroke"></i> (4.4)</div>
                        <div class="price-cart">
                            <p class="product-price">720000 FCFA</p>
                            <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-frame">
                            <img src="https://fdn2.gsmarena.com/vv/pics/itel/itel-a90-2.jpg" alt="Itel A90"
                                class="product-image">
                        </div>
                        <h3 class="product-title">Itel A90</h3>
                        <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-regular fa-star"></i> (3.9)</div>
                        <div class="price-cart">
                            <p class="product-price">52000 FCFA</p>
                            <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-frame">
                            <img src="https://fdn.gsmarena.com/imgroot/reviews/19/samsung-galaxy-s10/gal/-1024w2/gsmarena_001.jpg"
                                alt="Samsung Galaxy S10" class="product-image">
                        </div>
                        <h3 class="product-title">Samsung Galaxy S10</h3>
                        <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-regular fa-star"></i> (3.7)</div>
                        <div class="price-cart">
                            <p class="product-price">195000 FCFA</p>
                            <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-frame">
                            <img src="https://www.googlewatchblog.de/wp-content/uploads/pixel-7-pro-smartphones.jpg"
                                alt="Google Pixel 7" class="product-image">
                        </div>
                        <h3 class="product-title">Google Pixel 7</h3>
                        <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-regular fa-star"></i> (4.3)</div>
                        <div class="price-cart">
                            <p class="product-price">420000 FCFA</p>
                            <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-frame">
                            <img src="https://i2.wp.com/imgix.bustle.com/uploads/image/2022/9/7/9fce650c-28aa-4995-81f4-ac72d963485b-iphone14.png"
                                alt="Iphone 14" class="product-image">
                        </div>
                        <h3 class="product-title">Iphone 14</h3>
                        <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star-half-stroke"></i> (4.5)</div>
                        <div class="price-cart">
                            <p class="product-price">580000 FCFA</p>
                            <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-frame">
                            <img src="https://gizmologi.id/wp-content/uploads/2025/05/Itel-City-100-5.jpg"
                                alt="Itel City 100" class="product-image">
                        </div>
                        <h3 class="product-title">Itel City 100</h3>
                        <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i
                                class="fa-regular fa-star"></i> (3.6)</div>
                        <div class="price-cart">
                            <p class="product-price">43000 FCFA</p>
                            <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-frame">
                            <img src="https://th.bing.com/th/id/OIP.-fMULcZXP1vljwR6A0XzXgHaFn?o=7&cb=12rm=3&rs=1&pid=ImgDetMain&o=7&rm=3"
                                alt="Samsung A52" class="product-image">
                        </div>
                        <h3 class="product-title">Samsung A52</h3>
                        <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-regular fa-star"></i> (4.2)</div>
                        <div class="price-cart">
                            <p class="product-price">185000 FCFA</p>
                            <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-frame">
                            <img src="https://fdn2.gsmarena.com/vv/pics/google/google-pixel-8-1.jpg"
                                alt="Google Pixel 8" class="product-image">
                        </div>
                        <h3 class="product-title">Google Pixel 8</h3>
                        <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-regular fa-star"></i> (4.1)</div>
                        <div class="price-cart">
                            <p class="product-price">580000 FCFA</p>
                            <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                        </div>
                    </div>
                </div>
                <div class="pagination" id="pagin1">
                    <button class="page-btn">Previous</button>
                    <button class="page-num">1</button>
                    <button class="page-num">2</button>
                    <button class="page-num-active">3</button>
                    <button class="page-num">...</button>
                    <button class="page-num">7</button>
                    <button class="page-num">8</button>
                    <button class="page-btn">Next</button>
                </div>
            </div>
            <div class="lines">
                <span class="thick-line"></span>
                <span class="thin-line"></span>
            </div>
            <h2 id="title2">Best Sellers</h2>
            <div class="product-group">
                <div class="products-grid" id="grid2">
                    <!--Product-Card-->
                    <div class="product-card">
                        <div class="product-frame">
                            <img src="https://dicas.olx.com.br/wp-content/uploads/2024/10/iphone-16-lancamento-recursos.jpg"
                                alt="Iphone 16" class="product-image">
                        </div>
                        <h3 class="product-title">Iphone 16</h3>
                        <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-regular fa-star"></i> (4.2)</div>
                        <div class="price-cart">
                            <p class="product-price">850000 FCFA</p>
                            <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-frame">
                            <img src="https://www.gadgetpilipinas.net/wp-content/uploads/2024/09/Itel-A80-Philippines-4-770x576.jpg"
                                alt="Itel A80" class="product-image">
                        </div>
                        <h3 class="product-title">Itel A80</h3>
                        <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-regular fa-star"></i> (3.8)</div>
                        <div class="price-cart">
                            <p class="product-price">45000 FCFA</p>
                            <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-frame">
                            <img src="https://tse1.explicit.bing.net/th/id/OIP.ifv4th66VNRv4pU3FfQt_gHaIC?cb=12&rs=1&pid=ImgDetMain&o=7&rm=3"
                                alt="Samsung Galaxy Note 20" class="product-image">
                        </div>
                        <h3 class="product-title">Samsung Galaxy Note 20</h3>
                        <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-regular fa-star"></i> (4.1)</div>
                        <div class="price-cart">
                            <p class="product-price">280000 FCFA</p>
                            <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-frame">
                            <img src="https://static1.anpoimages.com/wordpress/wp-content/uploads/2024/08/google-pixel-9-pro.png"
                                alt="Google Pixel 9" class="product-image">
                        </div>
                        <h3 class="product-title">Google Pixel 9</h3>
                        <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star-half-stroke"></i> (4.6)</div>
                        <div class="price-cart">
                            <p class="product-price">750000 FCFA</p>
                            <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-frame">
                            <img src="https://static1.pocketnowimages.com/wordpress/wp-content/uploads/2023/09/pbi-iphone-15.png"
                                alt="Iphone 15" class="product-image">
                        </div>
                        <h3 class="product-title">Iphone 15</h3>
                        <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star-half-stroke"></i> (4.4)</div>
                        <div class="price-cart">
                            <p class="product-price">720000 FCFA</p>
                            <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-frame">
                            <img src="https://fdn2.gsmarena.com/vv/pics/itel/itel-a90-2.jpg" alt="Itel A90"
                                class="product-image">
                        </div>
                        <h3 class="product-title">Itel A90</h3>
                        <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-regular fa-star"></i> (3.9)</div>
                        <div class="price-cart">
                            <p class="product-price">52000 FCFA</p>
                            <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-frame">
                            <img src="https://fdn.gsmarena.com/imgroot/reviews/19/samsung-galaxy-s10/gal/-1024w2/gsmarena_001.jpg"
                                alt="Samsung Galaxy S10" class="product-image">
                        </div>
                        <h3 class="product-title">Samsung Galaxy S10</h3>
                        <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-regular fa-star"></i> (3.7)</div>
                        <div class="price-cart">
                            <p class="product-price">195000 FCFA</p>
                            <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-frame">
                            <img src="https://www.googlewatchblog.de/wp-content/uploads/pixel-7-pro-smartphones.jpg"
                                alt="Google Pixel 7" class="product-image">
                        </div>
                        <h3 class="product-title">Google Pixel 7</h3>
                        <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-regular fa-star"></i> (4.3)</div>
                        <div class="price-cart">
                            <p class="product-price">420000 FCFA</p>
                            <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-frame">
                            <img src="https://i2.wp.com/imgix.bustle.com/uploads/image/2022/9/7/9fce650c-28aa-4995-81f4-ac72d963485b-iphone14.png"
                                alt="Iphone 14" class="product-image">
                        </div>
                        <h3 class="product-title">Iphone 14</h3>
                        <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star-half-stroke"></i> (4.5)</div>
                        <div class="price-cart">
                            <p class="product-price">580000 FCFA</p>
                            <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-frame">
                            <img src="https://gizmologi.id/wp-content/uploads/2025/05/Itel-City-100-5.jpg"
                                alt="Itel City 100" class="product-image">
                        </div>
                        <h3 class="product-title">Itel City 100</h3>
                        <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i
                                class="fa-regular fa-star"></i> (3.6)</div>
                        <div class="price-cart">
                            <p class="product-price">43000 FCFA</p>
                            <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-frame">
                            <img src="https://th.bing.com/th/id/OIP.-fMULcZXP1vljwR6A0XzXgHaFn?o=7&cb=12rm=3&rs=1&pid=ImgDetMain&o=7&rm=3"
                                alt="Samsung A52" class="product-image">
                        </div>
                        <h3 class="product-title">Samsung A52</h3>
                        <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-regular fa-star"></i> (4.2)</div>
                        <div class="price-cart">
                            <p class="product-price">185000 FCFA</p>
                            <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-frame">
                            <img src="https://fdn2.gsmarena.com/vv/pics/google/google-pixel-8-1.jpg"
                                alt="Google Pixel 8" class="product-image">
                        </div>
                        <h3 class="product-title">Google Pixel 8</h3>
                        <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-regular fa-star"></i> (4.1)</div>
                        <div class="price-cart">
                            <p class="product-price">580000 FCFA</p>
                            <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                        </div>
                    </div>
                </div>
                <div class="pagination" id="pagin2">
                    <button class="page-btn">Previous</button>
                    <button class="page-num">1</button>
                    <button class="page-num">2</button>
                    <button class="page-num-active">3</button>
                    <button class="page-num">...</button>
                    <button class="page-num">7</button>
                    <button class="page-num">8</button>
                    <button class="page-btn">Next</button>
                </div>
            </div>
            <div class="lines">
                <span class="thick-line"></span>
                <span class="thin-line"></span>
            </div>
            <h2 id="title3">Products On Promotion</h2>
            <div class="products-group">
                <div class="products-grid" id="grid3">
                    <!--Product-Card-->
                    <div class="product-card">
                        <div class="product-frame">
                            <img src="https://dicas.olx.com.br/wp-content/uploads/2024/10/iphone-16-lancamento-recursos.jpg"
                                alt="Iphone 16" class="product-image">
                        </div>
                        <h3 class="product-title">Iphone 16</h3>
                        <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-regular fa-star"></i> (4.2)</div>
                        <div class="price-cart">
                            <p class="product-price">850000 FCFA</p>
                            <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-frame">
                            <img src="https://www.gadgetpilipinas.net/wp-content/uploads/2024/09/Itel-A80-Philippines-4-770x576.jpg"
                                alt="Itel A80" class="product-image">
                        </div>
                        <h3 class="product-title">Itel A80</h3>
                        <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-regular fa-star"></i> (3.8)</div>
                        <div class="price-cart">
                            <p class="product-price">45000 FCFA</p>
                            <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-frame">
                            <img src="https://tse1.explicit.bing.net/th/id/OIP.ifv4th66VNRv4pU3FfQt_gHaIC?cb=12&rs=1&pid=ImgDetMain&o=7&rm=3"
                                alt="Samsung Galaxy Note 20" class="product-image">
                        </div>
                        <h3 class="product-title">Samsung Galaxy Note 20</h3>
                        <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-regular fa-star"></i> (4.1)</div>
                        <div class="price-cart">
                            <p class="product-price">280000 FCFA</p>
                            <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-frame">
                            <img src="https://static1.anpoimages.com/wordpress/wp-content/uploads/2024/08/google-pixel-9-pro.png"
                                alt="Google Pixel 9" class="product-image">
                        </div>
                        <h3 class="product-title">Google Pixel 9</h3>
                        <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star-half-stroke"></i> (4.6)</div>
                        <div class="price-cart">
                            <p class="product-price">750000 FCFA</p>
                            <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-frame">
                            <img src="https://static1.pocketnowimages.com/wordpress/wp-content/uploads/2023/09/pbi-iphone-15.png"
                                alt="Iphone 15" class="product-image">
                        </div>
                        <h3 class="product-title">Iphone 15</h3>
                        <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star-half-stroke"></i> (4.4)</div>
                        <div class="price-cart">
                            <p class="product-price">720000 FCFA</p>
                            <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-frame">
                            <img src="https://fdn2.gsmarena.com/vv/pics/itel/itel-a90-2.jpg" alt="Itel A90"
                                class="product-image">
                        </div>
                        <h3 class="product-title">Itel A90</h3>
                        <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-regular fa-star"></i> (3.9)</div>
                        <div class="price-cart">
                            <p class="product-price">52000 FCFA</p>
                            <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-frame">
                            <img src="https://fdn.gsmarena.com/imgroot/reviews/19/samsung-galaxy-s10/gal/-1024w2/gsmarena_001.jpg"
                                alt="Samsung Galaxy S10" class="product-image">
                        </div>
                        <h3 class="product-title">Samsung Galaxy S10</h3>
                        <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-regular fa-star"></i> (3.7)</div>
                        <div class="price-cart">
                            <p class="product-price">195000 FCFA</p>
                            <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-frame">
                            <img src="https://www.googlewatchblog.de/wp-content/uploads/pixel-7-pro-smartphones.jpg"
                                alt="Google Pixel 7" class="product-image">
                        </div>
                        <h3 class="product-title">Google Pixel 7</h3>
                        <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-regular fa-star"></i> (4.3)</div>
                        <div class="price-cart">
                            <p class="product-price">420000 FCFA</p>
                            <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-frame">
                            <img src="https://i2.wp.com/imgix.bustle.com/uploads/image/2022/9/7/9fce650c-28aa-4995-81f4-ac72d963485b-iphone14.png"
                                alt="Iphone 14" class="product-image">
                        </div>
                        <h3 class="product-title">Iphone 14</h3>
                        <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star-half-stroke"></i> (4.5)</div>
                        <div class="price-cart">
                            <p class="product-price">580000 FCFA</p>
                            <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-frame">
                            <img src="https://gizmologi.id/wp-content/uploads/2025/05/Itel-City-100-5.jpg"
                                alt="Itel City 100" class="product-image">
                        </div>
                        <h3 class="product-title">Itel City 100</h3>
                        <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i
                                class="fa-regular fa-star"></i> (3.6)</div>
                        <div class="price-cart">
                            <p class="product-price">43000 FCFA</p>
                            <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-frame">
                            <img src="https://th.bing.com/th/id/OIP.-fMULcZXP1vljwR6A0XzXgHaFn?o=7&cb=12rm=3&rs=1&pid=ImgDetMain&o=7&rm=3"
                                alt="Samsung A52" class="product-image">
                        </div>
                        <h3 class="product-title">Samsung A52</h3>
                        <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-regular fa-star"></i> (4.2)</div>
                        <div class="price-cart">
                            <p class="product-price">185000 FCFA</p>
                            <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-frame">
                            <img src="https://fdn2.gsmarena.com/vv/pics/google/google-pixel-8-1.jpg"
                                alt="Google Pixel 8" class="product-image">
                        </div>
                        <h3 class="product-title">Google Pixel 8</h3>
                        <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-regular fa-star"></i> (4.1)</div>
                        <div class="price-cart">
                            <p class="product-price">580000 FCFA</p>
                            <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                        </div>
                    </div>
                </div>
                <div class="pagination" id="pagin3">
                    <button class="page-btn">Previous</button>
                    <button class="page-num">1</button>
                    <button class="page-num">2</button>
                    <button class="page-num-active">3</button>
                    <button class="page-num">...</button>
                    <button class="page-num">7</button>
                    <button class="page-num">8</button>
                    <button class="page-btn">Next</button>
                </div>
            </div>
        </div>
    </section>


    <script language="JavaScript" type="text/javascript" src="{{ asset('assets/js/carousel_auto.js') }}"></script>
    <script language="JavaScript" type="text/javascript" src="{{ asset('assets/js/pagination_filtres_tel.js') }}"></script>
    <script language="JavaScript" type="text/javascript" src="{{ asset('assets/js/navigation_tel_cam.js') }}"></script>

</body>
@endsection

