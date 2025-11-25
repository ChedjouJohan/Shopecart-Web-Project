
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manette DualSense Pro - Détails </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="{{ asset('assets/css/header.css') }}" >
    <link rel="stylesheet" href="{{ asset('assets/css/products_casque.css') }}">
    <script src="{{ asset('assets/js/product_manette.js') }}"></script>
   
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
    <script src="{{ asset('assets/js/product_navigation_manettes.js') }}" defer></script> 
    <script src="{{ asset('assets/js/product_pagination.js') }}" defer></script> 
    <script defer src="{{  asset('assets/js/newsletter.js')}}"></script>
    <script src="{{ asset('assets/js/cart-manager.js') }}" defer></script>
</head>
@extends('layouts.app')

@section('title', 'Produit- Shopecart')

@section('content')
<body >
  <main class="main-content-container">
      
    <div class="product-detail-container">
        <div class="product-detail-flex">
            <div class="product-detail-left">
                <div class="image-gallery-box">
                    <div class="main-product-image">
                        <img id="main-image" src="/assets/images/M6.png" alt="Manette DualSense Pro">
                    </div>
                    <div class="thumbnail-row">
                        <div class="thumbnail active">
                            <img src="/assets/images/M5.png" alt="Vue 1" data-image="/assets/images/M1.jpeg">
                        </div>
                        <div class="thumbnail">
                            <img src="/assets/images/M2.png" alt="Vue 2" data-image="/assets/images/M2.jpeg">
                        </div>

                    </div>
                </div>
                
                
            </div>

            <div class="product-detail-right">
                <div class="product-info-box">
                    <div class="new-tag-wrapper">
                        <span class="new-tag">Nouveau</span>
                    </div>
                    <h1 class="product-title">Manette DualSense Pro</h1>
                    <p class="product-subtitle">2-en-1 Élégance du Smart et de l'Audio. Multi-Connectivité Redéfinie.</p>
                    
                    <div class="rating-info">
                        <div class="stars-list">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="rating-text">4.7 (738 avis)</span>
                    </div>

                    <div class="price-info">
                        <span class="main-price">15.999FCFA</span>
                        <span class="tax-info">TTC</span>
                    </div>

                    <div class="color-selection-area">
                        <h3 class="color-selection-title">Choisissez une couleur</h3>
                        <div class="color-options-row">
                            <div class="color-option active" style="background-color: #272325;" data-color="Noir"></div>
                            
                            <div class="color-option" style="background-color: #8BC34A;" data-color="Vert clair"></div>
                        </div>
                        <span class="selected-color-text">Couleur sélectionnée: <span id="selected-color">Noir</span></span>
                    </div>

                    <div class="quantity-cart-area">
                        <div class="quantity-control">
                            <span class="quantity-label">Quantité:</span>
                            <div class="quantity-buttons-wrapper">
                                <button class="quantity-btn">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <span class="quantity-display">1</span>
                                <button class="quantity-btn">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="action-buttons-row">
                        <button class="btn-buy">
                            <i class="fas fa-bolt icon-margin"></i>
                            Acheter maintenant
                        </button>
                        <button class="btn-add">
                            <i class="fas fa-shopping-cart icon-margin"></i>
                            Ajouter au panier
                        </button>
                    </div>

                    
                </div>
                
                
            </div>
        </div>
    </div>

    <section class="products-section">
            <h2 class="section-title" id="title-for-you">
                <span class="gradient-blue-purple">Manettes pour vous</span>
            </h2>
            <p class="section-subtitle">Most demand</p>
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
                
                <a href="{{ route('manette_details', ['id' => 6]) }}"href="product_manetteDetail.html?id=6" class="product-card" data-id="6" data-brand="8bitdo" data-price-raw="35000" data-rating-raw="4.6">
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
                <a href="{{ route('manette_details', ['id' => 8]) }}" class="product-card" data-id="9" data-brand="sony" data-price-raw="90000" data-rating-raw="4.5">
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
            <p class="section-subtitle">Most demand</p>
            <div class="products-grid">
            
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
                <a href="product_manetteDetail.html?id=9" class="product-card" data-id="9" data-brand="sony" data-price-raw="90000" data-rating-raw="4.5">
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
                <a href="product_manetteDetail.html?id=10" class="product-card" data-id="10" data-brand="razer" data-price-raw="99000" data-rating-raw="4.4">
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
                </a><a href="product_manetteDetail.html?id=7" class="product-card" data-id="7" data-brand="logitech" data-price-raw="25000" data-rating-raw="4.0">
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
                <a href="product_manetteDetail.html?id=9" class="product-card" data-id="9" data-brand="sony" data-price-raw="90000" data-rating-raw="4.5">
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
                <a href="product_manetteDetail.html?id=10" class="product-card" data-id="10" data-brand="razer" data-price-raw="99000" data-rating-raw="4.4">
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
                </a><a href="product_manetteDetail.html?id=7" class="product-card" data-id="7" data-brand="logitech" data-price-raw="25000" data-rating-raw="4.0">
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
                
                <a href="product_manetteDetail.html?id=4" class="product-card" data-id="4" data-brand="razer" data-price-raw="165000" data-rating-raw="4.7">
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
                
                <a href="product_manetteDetail.html?id=4" class="product-card" data-id="4" data-brand="razer" data-price-raw="165000" data-rating-raw="4.7">
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
                
                <a href="product_manetteDetail.html?id=6" class="product-card" data-id="6" data-brand="8bitdo" data-price-raw="35000" data-rating-raw="4.6">
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

                <a href="product_manetteDetail.html?id=6" class="product-card" data-id="6" data-brand="8bitdo" data-price-raw="35000" data-rating-raw="4.6">
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
                <a href="product_manetteDetail.html?id=9" class="product-card" data-id="9" data-brand="sony" data-price-raw="90000" data-rating-raw="4.5">
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
                <a href="product_manetteDetail.html?id=10" class="product-card" data-id="10" data-brand="razer" data-price-raw="99000" data-rating-raw="4.4">
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
                <a href="product_manetteDetail.html?id=14" class="product-card" data-id="14" data-brand="razer" data-price-raw="165000" data-rating-raw="4.7">
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
                <a href="product_manetteDetail.html?id=9" class="product-card" data-id="9" data-brand="sony" data-price-raw="90000" data-rating-raw="4.5">
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
                <a href="product_manetteDetail.html?id=10" class="product-card" data-id="10" data-brand="razer" data-price-raw="99000" data-rating-raw="4.4">
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

   
  </main>

</body>
@endsection