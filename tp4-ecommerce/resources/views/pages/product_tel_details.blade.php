
<head>
    <meta charset="UTF-8">
    <title>Telephones | Shopcart / Itel A80</title>
    <link rel="stylesheet" href="{{ asset('assets/css/product_tel_cam_details.css') }}">
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
 
<section class="product-detail-section">
    <div class="container">
        <div class="product-detail-wrapper">
            <!--Colonne gauche-->
            <div class="product-gallery">
                <div class="main-image-container">
                    <img src="https://www.gadgetpilipinas.net/wp-content/uploads/2024/09/Itel-A80-Philippines-4-770x576.jpg" alt="Itel" class="main-image">
                </div>
                <div class="thumbnails">
                    <img src="https://www.mobile92.com/blogimg/itel_A80_Specifcation_5b16483ba8_1_1.webp" alt="Itel1" class="thumbnail-active">
                    <img src="https://cdn-files.kimovil.com/phone_front/0010/79/thumb_978549_phone_front_big.jpg" alt="Itel2" class="thumbnail">
                    <img src="https://images.priceoye.pk/itel-a80-pakistan-priceoye-qavvd.jpg" alt="Itel3" class="thumbnail">
                    <img src="https://tse1.mm.bing.net/th/id/OIP.bdIFNBImZMRAE-X1cCDiPAAAAA?cb=12&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Itel4" class="thumbnail">
                </div>
            </div>
            <!--Colonne droite-->
            <div class="product-info">
                <h1 class="product name">Itel A80</h1>
                <p class="product description">
                    A wonderful multitask telephone with a huge stockage capacity and a great cam.
                </p>
                <div class="product-rate">
                    <span class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i> Stars</span>
                    <span class="rating-text">Rating : 3.8</span>
                </div>
                <div class="price-section">
                    <span class="label">Price : </span>
                    <span class="price">45000 FCFA</span>
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
                        <img src="https://dicas.olx.com.br/wp-content/uploads/2024/10/iphone-16-lancamento-recursos.jpg" alt="Iphone 16" class="product-image">
                    </div>
                    <h3 class="product-title">Iphone 16</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i> (4.2)</div>
                    <div class="price-cart">
                        <p class="product-price">850000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://www.gadgetpilipinas.net/wp-content/uploads/2024/09/Itel-A80-Philippines-4-770x576.jpg" alt="Itel A80" class="product-image">
                    </div>
                    <h3 class="product-title">Itel A80</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i> (3.8)</div>
                    <div class="price-cart">
                        <p class="product-price">45000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://tse1.explicit.bing.net/th/id/OIP.ifv4th66VNRv4pU3FfQt_gHaIC?cb=12&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Samsung Galaxy Note 20" class="product-image">
                    </div>
                    <h3 class="product-title">Samsung Galaxy Note 20</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i> (4.1)</div>
                    <div class="price-cart">
                        <p class="product-price">280000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://static1.anpoimages.com/wordpress/wp-content/uploads/2024/08/google-pixel-9-pro.png" alt="Google Pixel 9" class="product-image">
                    </div>
                    <h3 class="product-title">Google Pixel 9</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i> (4.6)</div>
                    <div class="price-cart">
                        <p class="product-price">750000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://static1.pocketnowimages.com/wordpress/wp-content/uploads/2023/09/pbi-iphone-15.png" alt="Iphone 15" class="product-image">
                    </div>
                    <h3 class="product-title">Iphone 15</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i> (4.4)</div>
                    <div class="price-cart">
                        <p class="product-price">720000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://fdn2.gsmarena.com/vv/pics/itel/itel-a90-2.jpg" alt="Itel A90" class="product-image">
                    </div>
                    <h3 class="product-title">Itel A90</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i> (3.9)</div>
                    <div class="price-cart">
                        <p class="product-price">52000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://fdn.gsmarena.com/imgroot/reviews/19/samsung-galaxy-s10/gal/-1024w2/gsmarena_001.jpg" alt="Samsung Galaxy S10" class="product-image">
                    </div>
                    <h3 class="product-title">Samsung Galaxy S10</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i> (3.7)</div>
                    <div class="price-cart">
                        <p class="product-price">195000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://www.googlewatchblog.de/wp-content/uploads/pixel-7-pro-smartphones.jpg" alt="Google Pixel 7" class="product-image">
                    </div>
                    <h3 class="product-title">Google Pixel 7</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i> (4.3)</div>
                    <div class="price-cart">
                        <p class="product-price">420000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://i2.wp.com/imgix.bustle.com/uploads/image/2022/9/7/9fce650c-28aa-4995-81f4-ac72d963485b-iphone14.png" alt="Iphone 14" class="product-image">
                    </div>
                    <h3 class="product-title">Iphone 14</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i> (4.5)</div>
                    <div class="price-cart">
                        <p class="product-price">580000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://gizmologi.id/wp-content/uploads/2025/05/Itel-City-100-5.jpg" alt="Itel City 100" class="product-image">
                    </div>
                    <h3 class="product-title">Itel City 100</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i> (3.6)</div>
                    <div class="price-cart">
                        <p class="product-price">43000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://th.bing.com/th/id/OIP.-fMULcZXP1vljwR6A0XzXgHaFn?o=7&cb=12rm=3&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Samsung A52" class="product-image">
                    </div>
                    <h3 class="product-title">Samsung A52</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i> (4.2)</div>
                    <div class="price-cart">
                        <p class="product-price">185000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://fdn2.gsmarena.com/vv/pics/google/google-pixel-8-1.jpg" alt="Google Pixel 8" class="product-image">
                    </div>
                    <h3 class="product-title">Google Pixel 8</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i> (4.1)</div>
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
        <div class="products-group">
            <div class="products-grid" id="grid2">
                <!--Product-Card-->
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://dicas.olx.com.br/wp-content/uploads/2024/10/iphone-16-lancamento-recursos.jpg" alt="Iphone 16" class="product-image">
                    </div>
                    <h3 class="product-title">Iphone 16</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i> (4.2)</div>
                    <div class="price-cart">
                        <p class="product-price">850000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://www.gadgetpilipinas.net/wp-content/uploads/2024/09/Itel-A80-Philippines-4-770x576.jpg" alt="Itel A80" class="product-image">
                    </div>
                    <h3 class="product-title">Itel A80</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i> (3.8)</div>
                    <div class="price-cart">
                        <p class="product-price">45000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://tse1.explicit.bing.net/th/id/OIP.ifv4th66VNRv4pU3FfQt_gHaIC?cb=12&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Samsung Galaxy Note 20" class="product-image">
                    </div>
                    <h3 class="product-title">Samsung Galaxy Note 20</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i> (4.1)</div>
                    <div class="price-cart">
                        <p class="product-price">280000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://static1.anpoimages.com/wordpress/wp-content/uploads/2024/08/google-pixel-9-pro.png" alt="Google Pixel 9" class="product-image">
                    </div>
                    <h3 class="product-title">Google Pixel 9</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i> (4.6)</div>
                    <div class="price-cart">
                        <p class="product-price">750000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://static1.pocketnowimages.com/wordpress/wp-content/uploads/2023/09/pbi-iphone-15.png" alt="Iphone 15" class="product-image">
                    </div>
                    <h3 class="product-title">Iphone 15</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i> (4.4)</div>
                    <div class="price-cart">
                        <p class="product-price">720000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://fdn2.gsmarena.com/vv/pics/itel/itel-a90-2.jpg" alt="Itel A90" class="product-image">
                    </div>
                    <h3 class="product-title">Itel A90</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i> (3.9)</div>
                    <div class="price-cart">
                        <p class="product-price">52000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://fdn.gsmarena.com/imgroot/reviews/19/samsung-galaxy-s10/gal/-1024w2/gsmarena_001.jpg" alt="Samsung Galaxy S10" class="product-image">
                    </div>
                    <h3 class="product-title">Samsung Galaxy S10</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i> (3.7)</div>
                    <div class="price-cart">
                        <p class="product-price">195000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://www.googlewatchblog.de/wp-content/uploads/pixel-7-pro-smartphones.jpg" alt="Google Pixel 7" class="product-image">
                    </div>
                    <h3 class="product-title">Google Pixel 7</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i> (4.3)</div>
                    <div class="price-cart">
                        <p class="product-price">420000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://i2.wp.com/imgix.bustle.com/uploads/image/2022/9/7/9fce650c-28aa-4995-81f4-ac72d963485b-iphone14.png" alt="Iphone 14" class="product-image">
                    </div>
                    <h3 class="product-title">Iphone 14</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i> (4.5)</div>
                    <div class="price-cart">
                        <p class="product-price">580000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://gizmologi.id/wp-content/uploads/2025/05/Itel-City-100-5.jpg" alt="Itel City 100" class="product-image">
                    </div>
                    <h3 class="product-title">Itel City 100</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i> (3.6)</div>
                    <div class="price-cart">
                        <p class="product-price">43000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://th.bing.com/th/id/OIP.-fMULcZXP1vljwR6A0XzXgHaFn?o=7&cb=12rm=3&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Samsung A52" class="product-image">
                    </div>
                    <h3 class="product-title">Samsung A52</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i> (4.2)</div>
                    <div class="price-cart">
                        <p class="product-price">185000 FCFA</p>
                        <button class="btn-outline"><i class="fas fa-shopping-cart icon-margin"></i></button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-frame">
                        <img src="https://fdn2.gsmarena.com/vv/pics/google/google-pixel-8-1.jpg" alt="Google Pixel 8" class="product-image">
                    </div>
                    <h3 class="product-title">Google Pixel 8</h3>
                    <div class="product-rating"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i> (4.1)</div>
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
    </div>
</section>


 <script language="JavaScript" type="text/javascript" src="{{ asset('assets/js/pagination_tel.js') }}"></script>
 <script language="JavaScript" type="text/javascript" src="{{ asset('assets/js/navigation_tel_cam.js') }}"></script>

</body>
@endsection