
<head>
    <meta charset="UTF-8">
    <title>Cameras | Shopcart / Nikon Heralbony ZFC</title>
    <link rel="stylesheet" href="{{ asset('assets/css/product_tel_cam_details.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/products_tel_cam.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/header.css')  }}">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script defer src="{{ asset('assets/js/newsletter.js') }}"></script>
  <script src="{{ asset('assets/js/cart-manager.js') }}" defer></script>
 
  <script src="{{ asset('assets/js/header.js') }}" defer></script>
</head>

@extends('layouts.app')

@section('title', 'Produit- Shopecart')

@section('content')
<body>
<section class="product-detail-section">
    <div class="container">
        <div class="product-detail-wrapper">
            <!--Colonne gauche-->
            <div class="product-gallery">
                <div class="main-image-container">
                    <img src="https://petapixel.com/assets/uploads/2024/09/nikon-zfc-heralbony-featured-800x420.jpg" alt="Nikon" class="main-image">
                </div>
                <div class="thumbnails">
                    <img src="https://tse1.mm.bing.net/th/id/OIP.W7Br2vkscVNONbxmWdymawAAAA?cb=12&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Nikon1" class="thumbnail-active">
                    <img src="https://tse2.mm.bing.net/th/id/OIP.wS-KGFJQ6cMCnNgIwI9IngHaFD?cb=12&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Nikon2" class="thumbnail">
                    <img src="https://petapixel.com/assets/uploads/2024/09/nikon-zfc-heralbony-5-1536x903.jpg" alt="Nikon3" class="thumbnail">
                    <img src="https://digicame-info.com/picture2/Nikon_HERALBONY_Zfc_001.jpg" alt="Nikon4" class="thumbnail">
                </div>
            </div>
            <!--Colonne droite-->
            <div class="product-info">
                <h1 class="product name">Nikon Heralbony ZFC</h1>
                <p class="product description">
                    A wonderful multitask camera with a huge flexibilty.
                </p>
                <div class="product-rate">
                    <span class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i> Stars</span>
                    <span class="rating-text">Rating : 4.2</span>
                </div>
                <div class="price-section">
                    <span class="label">Price : </span>
                    <span class="price">950000 FCFA</span>
                </div>
                <div class="color-selection">
                    <h3 class="section-title">Choose a Color</h3>
                    <div class="color-options">
                        <button class="color-btn" style="background-color: #ff1493;"></button>
                        <button class="color-btn-active" style="background-color: #1e90ff;"></button>
                        <button class="color-btn" style="background-color: #32cd32;"></button>
                        <button class="color-btn" style="background-color: #9370db;"></button>
                        <button class="color-btn" style="background-color: #ffa500;"></button>
                    </div>
                </div>
                <div class="quantity-section">
                    <button class="qty-btn">-</button>
                    <input class="qty-input" type="number" value="1" readonly>
                    <button class="qty-btn">+</button>
                </div>
                <div class="stock-info">
                    <p class="stock-text">Only <strong>12 items</strong> Left!</p>
                    <p class="stock-warning">Don't Miss it Out</p>
                </div>
                <div class="actions">
                    <button class="btn-buy-it-now"><i class="fas fa-bolt icon-margin"></i>  Buy it Now</button>
                    <button class="btn-add-to-cart"><i class="fas fa-shopping-cart icon-margin"></i>  Add to Your Cart</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Products Section-->
<section class="products">
    <div class="container">
        <h2 id="title1">You Might Also Like</h2>
        <div class="product-group">
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
        <div class="products-group">
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
    </div>
</section>
</body>
 @endsection