
<head>
    <meta charset="UTF-8">
    <title>Cameras | Shopcart</title>
    <link rel="stylesheet" href="{{ asset('assets/css/products_tel_cam.css') }}">
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
        <div class="slides">
            <!--Slide 4 Clone-->
            <div class="slide">
                <label class="left-arrow" for="slide3"><strong>&#60</strong></label>
                <div class="banner-content">
                    <h1>Are You Ready For<br>Our Products ?<br>Surely Not</h1>
                    <button class="btn-primary">Maybe Yes</button>
                </div>
                <div class="banner-image">
                    <img src="https://media.istockphoto.com/id/1038145136/photo/woman-taking-a-photography.jpg?b=1&s=170667a&w=0&k=20&c=LWhRyfvuMwkP2a4DoZeJ86IHaKaGw4JPzB0b129oHAY=" alt="">
                </div>
                <label class="right-arrow" for="slide1"><strong>&#62</strong></label>
            </div>
            <!--Slide 1-->
            <div class="slide">
                <label class="left-arrow" for="slide4clone"><strong>&#60</strong></label>
                <div class="banner-content">
                    <h1>Get Up to 50% Off<br>On Cameras<br>And Other Gadgets</h1>
                    <button class="btn-primary">Buy Now</button>
                </div>
                <div class="banner-image">
                    <img src="https://img.freepik.com/premium-photo/smiling-african-american-woman-using-professional-camera-street_93675-145579.jpg" alt="">
                </div>
                <label class="right-arrow" for="slide2"><strong>&#62</strong></label>
            </div>
            <!--Slide 2-->
            <div class="slide">
                <label class="left-arrow" for="slide1"><strong>&#60</strong></label>
                <div class="banner-content">
                    <h1>New Collection Of<br>Digital Cameras<br>Available Now</h1>
                    <button class="btn-primary">Shop Now</button>
                </div>
                <div class="banner-image">
                    <img src="https://media.istockphoto.com/photos/black-young-woman-making-a-selfie-with-old-camera-picture-id1226677999?k=20&m=1226677999&s=612x612&w=0&h=lppg1bl0E4xPLDgyqpjgOL8INlIqqJgSBD8XvbXxFNk=" alt="">
                </div>
                <label class="right-arrow" for="slide3"><strong>&#62</strong></label>
            </div>
            <!--Slide 3-->
            <div class="slide">
                <label class="left-arrow" for="slide2"><strong>&#60</strong></label>
                <div class="banner-content">
                    <h1>Latest Sony Alpha<br>Up To 30% Off<br>Limited Time</h1>
                    <button class="btn-primary">Get Now</button>
                </div>
                <div class="banner-image">
                    <img src="https://t3.ftcdn.net/jpg/05/03/62/04/360_F_503620462_FStnLAZadQt6CHd1ipNdExSBnlriUG22.jpg" alt="">
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
                    <img src="https://media.istockphoto.com/id/1038145136/photo/woman-taking-a-photography.jpg?b=1&s=170667a&w=0&k=20&c=LWhRyfvuMwkP2a4DoZeJ86IHaKaGw4JPzB0b129oHAY=" alt="">
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
                    <img src="https://img.freepik.com/premium-photo/smiling-african-american-woman-using-professional-camera-street_93675-145579.jpg" alt="">
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
            <a href="#" data-price="0-500000"><i class="fas fa-tag"></i> Moins de 500.000 FCFA</a>
            <a href="#" data-price="500000-750000"><i class="fas fa-tag"></i> 500.000 - 750.000 FCFA</a>
            <a href="#" data-price="750000-1000000"><i class="fas fa-tag"></i> 750.000 - 1.000.000 FCFA</a>
            <a href="#" data-price="1000000+"><i class="fas fa-tag"></i> Plus de 1.000.000 FCFA</a>
        </div>
    </div>

    <!-- Filtre Marques -->
    <div class="product-filter-item" tabindex="0">
        <input type="checkbox" name="filters" id="marques-casques-toggle" class="filter-radio-input">
        <label for="marques-casques-toggle" class="filter-button-label">
            Marques <span class="filter-arrow-icon">▼</span>
        </label>
        <div class="filter-options-list">
            <a href="#" data-brand="sony"><i class="fa-solid fa-camera"></i> Sony</a>
            <a href="#" data-brand="canon"><i class="fa-solid fa-image"></i> Canon</a>
            <a href="#" data-brand="nikon"><i class="fa-solid fa-print"></i> Nikon</a>
            <a href="#" data-brand="lumix"><i class="fa-solid fa-camera-retro"></i> Lumix</a>
            <a href="#" data-brand="fujifilm"><i class="fa-solid fa-icons"></i> Fujifilm</a>
            <a href="#" data-brand="olympus"><i class="fa-solid fa-video"></i> Olympus</a>
            <a href="#" data-brand="leica"><i class="fa-solid fa-panorama"></i> Leica</a>
            <a href="#" data-brand="casio"><i class="fa-solid fa-images"></i> Casio</a>
            <a href="#" data-brand="pentax"><i class="fa-solid fa-photo-film"></i> Pentax</a>
            <a href="#" data-brand="sigma"><i class="fa-solid fa-image-portrait"></i> Sigma</a>
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

<!--Products Section-->
<section class="products">
    <div class="container">
        <h2 id="title1">Products For You</h2>
        <div class="products-group">
            <div class="products-grid" id="grid1">
                <!--Product-Card-->
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://fototrade.lu/wp-content/uploads/2023/07/SONY-alpha-6700-18-135-8.png" alt="Sony Alpha 6700" class="product-image">
                    </div>
                    <h3 class="product-title">Sony Alpha 6700</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i> (4.5)</div>
                    <div class="price-cart">
                        <p class="product-price">1250000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRkqpex8LD4KBEwhLRQR6Dj_3qvP-iJGlMB7g&s" alt="Canon EOS 4000D" class="product-image">
                    </div>
                    <h3 class="product-title">Canon EOS 4000D</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i> (3.8)</div>
                    <div class="price-cart">
                        <p class="product-price">285000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://petapixel.com/assets/uploads/2024/09/nikon-zfc-heralbony-featured-800x420.jpg" alt="Nikon Heralbony ZFC" class="product-image">
                    </div>
                    <h3 class="product-title">Nikon Heralbony ZFC</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i> (4.2)</div>
                    <div class="price-cart">
                        <p class="product-price">950000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://www.panasonic.com/content/dam/pim/uk/en/DC/DC-S5M/DC-S5M2X/ast-1824751.jpg.pub.crop.pc.thumb.640.1200.jpg" alt="Lumix Z5IIX Hybride" class="product-image">
                    </div>
                    <h3 class="product-title">Lumix Z5IIX Hybride</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i> (4.7)</div>
                    <div class="price-cart">
                        <p class="product-price">1580000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://www.kamera-express.fr/_ipx/b_%23ffffff00,f_webp,fit_contain,s_484x484/https://www.kamera-express.nl/media/008f3906-76bd-4b30-80a6-7b1e947a3e39/sony-a7-iv-35mm-f-1-4-gm.jpg" alt="Sony Alpha 7 IV" class="product-image">
                    </div>
                    <h3 class="product-title">Sony Alpha 7 IV</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i> (4.8)</div>
                    <div class="price-cart">
                        <p class="product-price">2150000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://cdn.media.amplience.net/i/canon/09_frontback-pro_0c048afdc81c488eb9e5592f9cccc06e" alt="Canon EOS R6 Mark II" class="product-image">
                    </div>
                    <h3 class="product-title">Canon EOS R6 Mark II</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i> (4.6)</div>
                    <div class="price-cart">
                        <p class="product-price">2850000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://static.bhphoto.com/images/multiple_images/images500x500/1738709312_IMG_2421914.jpg" alt="Nikon Coolpix P1100" class="product-image">
                    </div>
                    <h3 class="product-title">Nikon Coolpix P1100</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i> (3.9)</div>
                    <div class="price-cart">
                        <p class="product-price">485000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://apprendre-la-photo.fr/wp-content/uploads/2024/06/f4b186ad-4e02-46fc-94e1-f74df9a99426.jpeg" alt="Lumix S9 Hybride" class="product-image">
                    </div>
                    <h3 class="product-title">Lumix S9 Hybride</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i> (4.4)</div>
                    <div class="price-cart">
                        <p class="product-price">1680000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://sony.scene7.com/is/image/sonyglobalsolutions/Mobile_ZV-E10_202507?$productIntroPlatemobile$&fmt=png-alpha" alt="Sony ZV E10" class="product-image">
                    </div>
                    <h3 class="product-title">Sony ZV E10</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i> (4.1)</div>
                    <div class="price-cart">
                        <p class="product-price">685000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://apprendre-la-photo.fr/wp-content/uploads/2024/07/44efa78a-eb08-41bf-a91b-407d086228f2.jpeg" alt="Canon EOS R50" class="product-image">
                    </div>
                    <h3 class="product-title">Canon EOS R50</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i> (4.3)</div>
                    <div class="price-cart">
                        <p class="product-price">825000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://cdn.lesnumeriques.com/optim/product/60/60197/2ab41fa8-z-6ii__1200_678__overflow.jpeg" alt="Nikon Z6 II" class="product-image">
                    </div>
                    <h3 class="product-title">Nikon Z6 II</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i> (4.5)</div>
                    <div class="price-cart">
                        <p class="product-price">1950000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://2.img-dpreview.com/files/p/E~TS590x0~articles/6043990845/Panasonic_Lumix_DC-GH5_II.jpeg" alt="Lumix DC-GH5 II" class="product-image">
                    </div>
                    <h3 class="product-title">Lumix DC-GH5 II</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i> (4.2)</div>
                    <div class="price-cart">
                        <p class="product-price">1450000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
            </div>
            <div class="pagination" id="pagin1">
                <button class="page-btn">Previous</button>
                <button class="page-num">1</button>
                <button class="page-num">2</button>
                <button class="page-num-active">3</button>
                <button class="page-num">4</button>
                <button class="page-num">5</button>
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
                        <img src="https://fototrade.lu/wp-content/uploads/2023/07/SONY-alpha-6700-18-135-8.png" alt="Sony Alpha 6700" class="product-image">
                    </div>
                    <h3 class="product-title">Sony Alpha 6700</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i> (4.5)</div>
                    <div class="price-cart">
                        <p class="product-price">1250000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRkqpex8LD4KBEwhLRQR6Dj_3qvP-iJGlMB7g&s" alt="Canon EOS 4000D" class="product-image">
                    </div>
                    <h3 class="product-title">Canon EOS 4000D</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i> (3.8)</div>
                    <div class="price-cart">
                        <p class="product-price">285000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://petapixel.com/assets/uploads/2024/09/nikon-zfc-heralbony-featured-800x420.jpg" alt="Nikon Heralbony ZFC" class="product-image">
                    </div>
                    <h3 class="product-title">Nikon Heralbony ZFC</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i> (4.2)</div>
                    <div class="price-cart">
                        <p class="product-price">950000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://www.panasonic.com/content/dam/pim/uk/en/DC/DC-S5M/DC-S5M2X/ast-1824751.jpg.pub.crop.pc.thumb.640.1200.jpg" alt="Lumix Z5IIX Hybride" class="product-image">
                    </div>
                    <h3 class="product-title">Lumix Z5IIX Hybride</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i> (4.7)</div>
                    <div class="price-cart">
                        <p class="product-price">1580000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://www.kamera-express.fr/_ipx/b_%23ffffff00,f_webp,fit_contain,s_484x484/https://www.kamera-express.nl/media/008f3906-76bd-4b30-80a6-7b1e947a3e39/sony-a7-iv-35mm-f-1-4-gm.jpg" alt="Sony Alpha 7 IV" class="product-image">
                    </div>
                    <h3 class="product-title">Sony Alpha 7 IV</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i> (4.8)</div>
                    <div class="price-cart">
                        <p class="product-price">2150000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://cdn.media.amplience.net/i/canon/09_frontback-pro_0c048afdc81c488eb9e5592f9cccc06e" alt="Canon EOS R6 Mark II" class="product-image">
                    </div>
                    <h3 class="product-title">Canon EOS R6 Mark II</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i> (4.6)</div>
                    <div class="price-cart">
                        <p class="product-price">2850000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://static.bhphoto.com/images/multiple_images/images500x500/1738709312_IMG_2421914.jpg" alt="Nikon Coolpix P1100" class="product-image">
                    </div>
                    <h3 class="product-title">Nikon Coolpix P1100</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i> (3.9)</div>
                    <div class="price-cart">
                        <p class="product-price">485000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://apprendre-la-photo.fr/wp-content/uploads/2024/06/f4b186ad-4e02-46fc-94e1-f74df9a99426.jpeg" alt="Lumix S9 Hybride" class="product-image">
                    </div>
                    <h3 class="product-title">Lumix S9 Hybride</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i> (4.4)</div>
                    <div class="price-cart">
                        <p class="product-price">1680000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://sony.scene7.com/is/image/sonyglobalsolutions/Mobile_ZV-E10_202507?$productIntroPlatemobile$&fmt=png-alpha" alt="Sony ZV E10" class="product-image">
                    </div>
                    <h3 class="product-title">Sony ZV E10</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i> (4.1)</div>
                    <div class="price-cart">
                        <p class="product-price">685000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://apprendre-la-photo.fr/wp-content/uploads/2024/07/44efa78a-eb08-41bf-a91b-407d086228f2.jpeg" alt="Canon EOS R50" class="product-image">
                    </div>
                    <h3 class="product-title">Canon EOS R50</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i> (4.3)</div>
                    <div class="price-cart">
                        <p class="product-price">825000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://cdn.lesnumeriques.com/optim/product/60/60197/2ab41fa8-z-6ii__1200_678__overflow.jpeg" alt="Nikon Z6 II" class="product-image">
                    </div>
                    <h3 class="product-title">Nikon Z6 II</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i> (4.5)</div>
                    <div class="price-cart">
                        <p class="product-price">1950000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://2.img-dpreview.com/files/p/E~TS590x0~articles/6043990845/Panasonic_Lumix_DC-GH5_II.jpeg" alt="Lumix DC-GH5 II" class="product-image">
                    </div>
                    <h3 class="product-title">Lumix DC-GH5 II</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i> (4.2)</div>
                    <div class="price-cart">
                        <p class="product-price">1450000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
            </div>
            <div class="pagination" id="pagin2">
                <button class="page-btn">Previous</button>
                <button class="page-num">1</button>
                <button class="page-num">2</button>
                <button class="page-num-active">3</button>
                <button class="page-num">4</button>
                <button class="page-num">5</button>
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
                        <img src="https://fototrade.lu/wp-content/uploads/2023/07/SONY-alpha-6700-18-135-8.png" alt="Sony Alpha 6700" class="product-image">
                    </div>
                    <h3 class="product-title">Sony Alpha 6700</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i> (4.5)</div>
                    <div class="price-cart">
                        <p class="product-price">1250000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRkqpex8LD4KBEwhLRQR6Dj_3qvP-iJGlMB7g&s" alt="Canon EOS 4000D" class="product-image">
                    </div>
                    <h3 class="product-title">Canon EOS 4000D</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i> (3.8)</div>
                    <div class="price-cart">
                        <p class="product-price">285000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://petapixel.com/assets/uploads/2024/09/nikon-zfc-heralbony-featured-800x420.jpg" alt="Nikon Heralbony ZFC" class="product-image">
                    </div>
                    <h3 class="product-title">Nikon Heralbony ZFC</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i> (4.2)</div>
                    <div class="price-cart">
                        <p class="product-price">950000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://www.panasonic.com/content/dam/pim/uk/en/DC/DC-S5M/DC-S5M2X/ast-1824751.jpg.pub.crop.pc.thumb.640.1200.jpg" alt="Lumix Z5IIX Hybride" class="product-image">
                    </div>
                    <h3 class="product-title">Lumix Z5IIX Hybride</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i> (4.7)</div>
                    <div class="price-cart">
                        <p class="product-price">1580000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://www.kamera-express.fr/_ipx/b_%23ffffff00,f_webp,fit_contain,s_484x484/https://www.kamera-express.nl/media/008f3906-76bd-4b30-80a6-7b1e947a3e39/sony-a7-iv-35mm-f-1-4-gm.jpg" alt="Sony Alpha 7 IV" class="product-image">
                    </div>
                    <h3 class="product-title">Sony Alpha 7 IV</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i> (4.8)</div>
                    <div class="price-cart">
                        <p class="product-price">2150000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://cdn.media.amplience.net/i/canon/09_frontback-pro_0c048afdc81c488eb9e5592f9cccc06e" alt="Canon EOS R6 Mark II" class="product-image">
                    </div>
                    <h3 class="product-title">Canon EOS R6 Mark II</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i> (4.6)</div>
                    <div class="price-cart">
                        <p class="product-price">2850000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://static.bhphoto.com/images/multiple_images/images500x500/1738709312_IMG_2421914.jpg" alt="Nikon Coolpix P1100" class="product-image">
                    </div>
                    <h3 class="product-title">Nikon Coolpix P1100</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i> (3.9)</div>
                    <div class="price-cart">
                        <p class="product-price">485000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://apprendre-la-photo.fr/wp-content/uploads/2024/06/f4b186ad-4e02-46fc-94e1-f74df9a99426.jpeg" alt="Lumix S9 Hybride" class="product-image">
                    </div>
                    <h3 class="product-title">Lumix S9 Hybride</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i> (4.4)</div>
                    <div class="price-cart">
                        <p class="product-price">1680000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://sony.scene7.com/is/image/sonyglobalsolutions/Mobile_ZV-E10_202507?$productIntroPlatemobile$&fmt=png-alpha" alt="Sony ZV E10" class="product-image">
                    </div>
                    <h3 class="product-title">Sony ZV E10</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i> (4.1)</div>
                    <div class="price-cart">
                        <p class="product-price">685000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://apprendre-la-photo.fr/wp-content/uploads/2024/07/44efa78a-eb08-41bf-a91b-407d086228f2.jpeg" alt="Canon EOS R50" class="product-image">
                    </div>
                    <h3 class="product-title">Canon EOS R50</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i> (4.3)</div>
                    <div class="price-cart">
                        <p class="product-price">825000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://cdn.lesnumeriques.com/optim/product/60/60197/2ab41fa8-z-6ii__1200_678__overflow.jpeg" alt="Nikon Z6 II" class="product-image">
                    </div>
                    <h3 class="product-title">Nikon Z6 II</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i> (4.5)</div>
                    <div class="price-cart">
                        <p class="product-price">1950000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://2.img-dpreview.com/files/p/E~TS590x0~articles/6043990845/Panasonic_Lumix_DC-GH5_II.jpeg" alt="Lumix DC-GH5 II" class="product-image">
                    </div>
                    <h3 class="product-title">Lumix DC-GH5 II</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i> (4.2)</div>
                    <div class="price-cart">
                        <p class="product-price">1450000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
            </div>
            <div class="pagination" id="pagin3">
                <button class="page-btn">Previous</button>
                <button class="page-num">1</button>
                <button class="page-num">2</button>
                <button class="page-num-active">3</button>
                <button class="page-num">4</button>
                <button class="page-num">5</button>
                <button class="page-btn">Next</button>
            </div>
        </div>
    </div>
</section>

 <script language="JavaScript" type="text/javascript" src="{{ asset('assets/js/carousel_auto.js') }}"></script>
 <script language="JavaScript" type="text/javascript" src="{{ asset('assets/js/pagination_filtres_cam.js') }}"></script>
 <script language="JavaScript" type="text/javascript" src="{{ asset('assets/js/navigation_tel_cam.js')}}"></script>

</body>
@endsection