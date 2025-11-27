
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casques Audio | Shopcart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
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
    <section class="hero-video-section">
        <div class="video-overlay"></div>
        <video autoplay loop muted playsinline class="video-element">
            <source src="/assets/vidéos/istockphoto-1474338774-640_adpp_is.mp4" type="video/mp4">
        </video>
    </section>
    
    <main class="main-content-container">
        <div class="filter-bar hide-scrollbar">
            <button class="filter-button primary-filter">
                <i class="fas fa-sliders-h icon-margin-right"></i> Filtres
            </button>
            
            <div class="tag-buttons-group">
                <button class="tag-button selected-tag">
                    Casques ▼
                </button>
                <button class="tag-button">
                    Prix ▼
                </button>
                <button class="tag-button">
                    Couleurs ▼
                </button>
                <button class="tag-button">
                    Meilleures ventes ▼
                </button>
                <button class="tag-button">
                    Nouveautés ▼
                </button>
                <button class="tag-button">
                    Promotions ▼
                </button>
            </div>
        </div>

        

        <section class="products-section">
            <h2 class="section-title">
                <span class="gradient-blue-purple">Nos casques</span>
            </h2>
            <p class="section-subtitle">Découvrez notre collection premium</p>
            <div class="products-grid">
                <div class="product-card">
                    <div class="product-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1558756520-22cfe5d382ca?w=400" alt="Sennheiser Momentum Sport" class="product-image">
                        <div class="product-tag tag-premium">PREMIUM</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sennheiser</p>
                        <h3 class="product-title-card">Momentum Sport Orange</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">150.000 FCFA</span>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="product-card">
                    <div class="product-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1546435770-a3e426bf472b?w=400" alt="Audio-Technica ATH-M50x" class="product-image">
                        <div class="product-tag tag-new tag-right">NOUVEAU</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Audio-Technica</p>
                        <h3 class="product-title-card">ATH-M50x Studio</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <span class="rating-text">(4.9)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">200.000 FCFA</span>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="product-card">
                    <div class="product-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1590658268037-6bf12165a8df?w=400" alt="Beats Studio 3" class="product-image">
                        <div class="product-tag tag-promo tag-right">PROMO</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Beats</p>
                        <h3 class="product-title-card">Studio 3 Rose Gold</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <span class="rating-text">(4.6)</span>
                        </div>
                        <div class="product-actions-promo">
                            <span class="old-price">300.000 FCFA</span>
                            <span class="product-price">280.000 FCFA</span>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="product-card">
                    <div class="product-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1558756520-22cfe5d382ca?w=400" alt="Sennheiser Momentum Sport" class="product-image">
                        <div class="product-tag tag-trending tag-right">TENDANCE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sennheiser</p>
                        <h3 class="product-title-card">Momentum Sport Orange</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">150.000 FCFA</span>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="product-card">
                    <div class="product-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1524678606370-a47ad25cb82a?w=400" alt="Marshall Major IV" class="product-image">
                        <div class="product-tag tag-top tag-right">TOP</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Marshall</p>
                        <h3 class="product-title-card">Major IV Marron</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <span class="rating-text">(4.7)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">14.000 FCFA</span>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1558756520-22cfe5d382ca?w=400" alt="Sennheiser Momentum Sport" class="product-image">
                        <div class="product-tag tag-trending tag-right">TENDANCE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sennheiser</p>
                        <h3 class="product-title-card">Momentum Sport Orange</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">10.000 FCFA</span>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1484704849700-f032a568e944?w=400" alt="Sony WH-1000XM5 Noir" class="product-image">
                        <div class="product-tag tag-top tag-right">TOP</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Bose</p>
                        <h3 class="product-title-card">Noise Cancelling 700</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.7)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">20.000 FCFA</span>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1590658268037-6bf12165a8df?w=400" alt="Beats Studio 3" class="product-image">
                        <div class="product-tag tag-promo tag-right">PROMO</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Beats</p>
                        <h3 class="product-title-card">Studio 3 Rose Gold</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <span class="rating-text">(4.6)</span>
                        </div>
                        <div class="product-actions-promo">
                            <span class="old-price">300.000 FCFA</span>
                            <span class="product-price">20.000 FCFA</span>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="product-card out-of-stock">
                    <div class="product-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1545127398-14699f92334b?w=400" alt="JBL Tune Bleu" class="product-image">
                        
                        <div class="image-overlay-disabled"></div>
                        <div class="product-tag tag-oos tag-left">RUPTURE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Marshall</p>
                        <h3 class="product-title-card">Motif II</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.7)</span>
                        </div>
                        <div class="product-actions-oos">
                            <span class="product-price">10.000 FCFA</span>
                            <button class="add-to-cart-btn disabled-btn" disabled>
                                <i class="fas fa-ban"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1599669454699-248893623440?w=400" alt="Razer Gaming RGB" class="product-image">
                        <div class="product-tag tag-best-seller">TOP VENTE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sennheiser</p>
                        <h3 class="product-title-card">HD 660S</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <span class="rating-text">(5.0)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">50.000 FCFA</span>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1590658268037-6bf12165a8df?w=400" alt="Beats Studio 3" class="product-image">
                        <div class="product-tag tag-promo tag-right">PROMO</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Beats</p>
                        <h3 class="product-title-card">Studio 3 Rose Gold</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <span class="rating-text">(4.6)</span>
                        </div>
                        <div class="product-actions-promo">
                            <span class="old-price">300.000 FCFA</span>
                            <span class="product-price">20.000 FCFA</span>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1558756520-22cfe5d382ca?w=400" alt="Sennheiser Momentum Sport" class="product-image">
                        <div class="product-tag tag-trending tag-right">TENDANCE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sennheiser</p>
                        <h3 class="product-title-card">Momentum Sport Orange</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">15.000 FCFA</span>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1524678606370-a47ad25cb82a?w=400" alt="Marshall Major IV" class="product-image">
                        <div class="product-tag tag-top tag-right">TOP</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Marshall</p>
                        <h3 class="product-title-card">Major IV Marron</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <span class="rating-text">(4.7)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">10.000 FCFA</span>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=300" alt="Sony WH-1000XM4" class="product-image">
                        <div class="product-tag tag-best-seller">TOP VENTE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sony</p>
                        <h3 class="product-title-card">WH-1000XM4</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <span class="rating-text">(4.9)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">19.990FCFA</span>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="product-card out-of-stock">
                    <div class="product-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1487215078519-e21cc028cb29?w=400" alt="Audio-Technica Studio" class="product-image">

                        <div class="image-overlay-disabled"></div>
                        <div class="product-tag tag-oos tag-left">RUPTURE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Bose</p>
                        <h3 class="product-title-card">QuietComfort 35</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.7)</span>
                        </div>
                        <div class="product-actions-oos">
                            <span class="product-price">19.999</span>
                            <button class="add-to-cart-btn disabled-btn" disabled>
                                <i class="fas fa-ban"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1546435770-a3e426bf472b?w=400" alt="Audio-Technica ATH-M50x" class="product-image">
                        <div class="product-tag tag-new tag-right">NOUVEAU</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Audio-Technica</p>
                        <h3 class="product-title-card">ATH-M50x Studio</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <span class="rating-text">(4.9)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">200.000 FCFA</span>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <div class="pagination-section">
            <div class="pagination-center-wrapper">
                <nav class="pagination-nav">
                    
                    <button class="pagination-btn-prev disabled-btn" disabled>
                        <i class="fas fa-chevron-left icon-small-margin-right"></i>
                        <span>Précédent</span>
                    </button>
                    
                    <button class="pagination-page-btn active-page">
                        1
                    </button>
                    
                    <button class="pagination-page-btn">
                        2
                    </button>
                    <button class="pagination-page-btn">
                        3
                    </button>
                    
                    <span class="pagination-ellipsis">...</span>
                    
                    <button class="pagination-page-btn">
                        8
                    </button>
                    
                    <button class="pagination-btn-next">
                        <span>Suivant</span>
                        <i class="fas fa-chevron-right icon-small-margin-left"></i>
                    </button>
                </nav>

                <div class="progress-bar-row">
                    <hr class="progress-bar-segment-1">
                    <hr class="progress-bar-segment-2">
                    <hr class="progress-bar-segment-3">
                </div>
            </div>
        </div>


        <section class="products-section">
            <h2 class="section-title">
                <span class="gradient-blue-purple">Nos casques</span>
            </h2>
            <p class="section-subtitle">Découvrez notre collection premium</p>
            <div class="products-grid">
                <div class="product-card">
                    <div class="product-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1558756520-22cfe5d382ca?w=400" alt="Sennheiser Momentum Sport" class="product-image">
                        <div class="product-tag tag-premium">PREMIUM</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sennheiser</p>
                        <h3 class="product-title-card">Momentum Sport Orange</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">150.000 FCFA</span>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="product-card">
                    <div class="product-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1546435770-a3e426bf472b?w=400" alt="Audio-Technica ATH-M50x" class="product-image">
                        <div class="product-tag tag-new tag-right">NOUVEAU</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Audio-Technica</p>
                        <h3 class="product-title-card">ATH-M50x Studio</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <span class="rating-text">(4.9)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">200.000 FCFA</span>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="product-card">
                    <div class="product-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1590658268037-6bf12165a8df?w=400" alt="Beats Studio 3" class="product-image">
                        <div class="product-tag tag-promo tag-right">PROMO</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Beats</p>
                        <h3 class="product-title-card">Studio 3 Rose Gold</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <span class="rating-text">(4.6)</span>
                        </div>
                        <div class="product-actions-promo">
                            <span class="old-price">300.000 FCFA</span>
                            <span class="product-price">280.000 FCFA</span>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="product-card">
                    <div class="product-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1558756520-22cfe5d382ca?w=400" alt="Sennheiser Momentum Sport" class="product-image">
                        <div class="product-tag tag-trending tag-right">TENDANCE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sennheiser</p>
                        <h3 class="product-title-card">Momentum Sport Orange</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">150.000 FCFA</span>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="product-card">
                    <div class="product-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1524678606370-a47ad25cb82a?w=400" alt="Marshall Major IV" class="product-image">
                        <div class="product-tag tag-top tag-right">TOP</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Marshall</p>
                        <h3 class="product-title-card">Major IV Marron</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <span class="rating-text">(4.7)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">14.000 FCFA</span>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1558756520-22cfe5d382ca?w=400" alt="Sennheiser Momentum Sport" class="product-image">
                        <div class="product-tag tag-trending tag-right">TENDANCE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sennheiser</p>
                        <h3 class="product-title-card">Momentum Sport Orange</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">10.000 FCFA</span>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1484704849700-f032a568e944?w=400" alt="Sony WH-1000XM5 Noir" class="product-image">
                        <div class="product-tag tag-top tag-right">TOP</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Bose</p>
                        <h3 class="product-title-card">Noise Cancelling 700</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.7)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">20.000 FCFA</span>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1590658268037-6bf12165a8df?w=400" alt="Beats Studio 3" class="product-image">
                        <div class="product-tag tag-promo tag-right">PROMO</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Beats</p>
                        <h3 class="product-title-card">Studio 3 Rose Gold</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <span class="rating-text">(4.6)</span>
                        </div>
                        <div class="product-actions-promo">
                            <span class="old-price">300.000 FCFA</span>
                            <span class="product-price">20.000 FCFA</span>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="product-card out-of-stock">
                    <div class="product-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1545127398-14699f92334b?w=400" alt="JBL Tune Bleu" class="product-image">
                        
                        <div class="image-overlay-disabled"></div>
                        <div class="product-tag tag-oos tag-left">RUPTURE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Marshall</p>
                        <h3 class="product-title-card">Motif II</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.7)</span>
                        </div>
                        <div class="product-actions-oos">
                            <span class="product-price">10.000 FCFA</span>
                            <button class="add-to-cart-btn disabled-btn" disabled>
                                <i class="fas fa-ban"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1599669454699-248893623440?w=400" alt="Razer Gaming RGB" class="product-image">
                        <div class="product-tag tag-best-seller">TOP VENTE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sennheiser</p>
                        <h3 class="product-title-card">HD 660S</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <span class="rating-text">(5.0)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">50.000 FCFA</span>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1590658268037-6bf12165a8df?w=400" alt="Beats Studio 3" class="product-image">
                        <div class="product-tag tag-promo tag-right">PROMO</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Beats</p>
                        <h3 class="product-title-card">Studio 3 Rose Gold</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <span class="rating-text">(4.6)</span>
                        </div>
                        <div class="product-actions-promo">
                            <span class="old-price">300.000 FCFA</span>
                            <span class="product-price">20.000 FCFA</span>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1558756520-22cfe5d382ca?w=400" alt="Sennheiser Momentum Sport" class="product-image">
                        <div class="product-tag tag-trending tag-right">TENDANCE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sennheiser</p>
                        <h3 class="product-title-card">Momentum Sport Orange</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <span class="rating-text">(4.4)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">15.000 FCFA</span>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1524678606370-a47ad25cb82a?w=400" alt="Marshall Major IV" class="product-image">
                        <div class="product-tag tag-top tag-right">TOP</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Marshall</p>
                        <h3 class="product-title-card">Major IV Marron</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <span class="rating-text">(4.7)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">10.000 FCFA</span>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=300" alt="Sony WH-1000XM4" class="product-image">
                        <div class="product-tag tag-best-seller">TOP VENTE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sony</p>
                        <h3 class="product-title-card">WH-1000XM4</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <span class="rating-text">(4.9)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">19.990FCFA</span>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="product-card out-of-stock">
                    <div class="product-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1487215078519-e21cc028cb29?w=400" alt="Audio-Technica Studio" class="product-image">

                        <div class="image-overlay-disabled"></div>
                        <div class="product-tag tag-oos tag-left">RUPTURE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Bose</p>
                        <h3 class="product-title-card">QuietComfort 35</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.7)</span>
                        </div>
                        <div class="product-actions-oos">
                            <span class="product-price">19.999</span>
                            <button class="add-to-cart-btn disabled-btn" disabled>
                                <i class="fas fa-ban"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1546435770-a3e426bf472b?w=400" alt="Audio-Technica ATH-M50x" class="product-image">
                        <div class="product-tag tag-new tag-right">NOUVEAU</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Audio-Technica</p>
                        <h3 class="product-title-card">ATH-M50x Studio</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                            <span class="rating-text">(4.9)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">200.000 FCFA</span>
                            <button class="add-to-cart-btn">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <div class="pagination-section">
            <div class="pagination-center-wrapper">
                <nav class="pagination-nav">
                    
                    <button class="pagination-btn-prev disabled-btn" disabled>
                        <i class="fas fa-chevron-left icon-small-margin-right"></i>
                        <span>Précédent</span>
                    </button>
                    
                    <button class="pagination-page-btn active-page">
                        1
                    </button>
                    
                    <button class="pagination-page-btn">
                        2
                    </button>
                    <button class="pagination-page-btn">
                        3
                    </button>
                    
                    <span class="pagination-ellipsis">...</span>
                    
                    <button class="pagination-page-btn">
                        8
                    </button>
                    
                    <button class="pagination-btn-next">
                        <span>Suivant</span>
                        <i class="fas fa-chevron-right icon-small-margin-left"></i>
                    </button>
                </nav>

                <div class="progress-bar-row">
                    <hr class="progress-bar-segment-1">
                    <hr class="progress-bar-segment-2">
                    <hr class="progress-bar-segment-3">
                </div>
            </div>
        </div>
        <section class="video-promo-section">
            <div class="video-grid">
                <section class="video-card">
                    <video autoplay loop muted playsinline class="video-element">
                    <source src="/assets/vidéos/ipad1.mp4" type="video/mp4">
                    </video>
                    <div class="video-overlay">
                        <h3 class="video-title">
                            Restez en contact avec vos proches 
                        </h3>
                        <p class="video-subtitle">
                            Profitez de réductions exceptionnelles sur nos casques sans fil jusqu’à 
                            <span class="video-discount-highlight">-30%</span> !
                        </p>
                        <button class="video-cta-button button-blue">
                            Découvrir les Offres
                        </button>
                    </div>
                </section>

                <section class="video-card">
                    <video autoplay loop muted playsinline class="video-element">
                    <source src="/assets/vidéos/MONTRE.mp4" type="video/mp4">
                    </video>
                    <div class="video-overlay">
                        <h3 class="video-title">
                            Avec une montre connectée suivez vos paramètres vitaux 
                        </h3>
                        <p class="video-subtitle">
                            Bénéficiez d'offres exclusives et de réductions jusqu’à 
                            <span class="video-discount-highlight">-25%</span> !
                        </p>
                        <button class="video-cta-button button-green">
                            Voir les Offres
                        </button>
                    </div>
                </section>
            </div>
        </section>

        

        

    </main>
</body>
@endsection
