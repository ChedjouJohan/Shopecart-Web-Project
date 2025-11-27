
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Headphones Max - Détails | SonicWave</title>
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

    <div class="product-detail-container">
        <div class="product-detail-flex">
            <div class="product-detail-left">
                <div class="image-gallery-box">
                    <div class="main-product-image">
                        <img id="main-image" src="https://images.unsplash.com/photo-1484704849700-f032a568e944?w=500" alt="Casque Max">
                    </div>
                    <div class="thumbnail-row">
                        <div class="thumbnail active">
                            <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=100" alt="Vue 1" data-image="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=500">
                        </div>
                        <div class="thumbnail">
                            <img src="https://images.unsplash.com/photo-1484704849700-f032a568e944?w=100" alt="Vue 2" data-image="https://images.unsplash.com/photo-1484704849700-f032a568e944?w=500">
                        </div>
                        <div class="thumbnail">
                            <img src="https://images.unsplash.com/photo-1545127398-14699f92334b?w=100" alt="Vue 3" data-image="https://images.unsplash.com/photo-1545127398-14699f92334b?w=500">
                        </div>
                        <div class="thumbnail">
                            <img src="https://images.unsplash.com/photo-1487215078519-e21cc028cb29?w=100" alt="Vue 4" data-image="https://images.unsplash.com/photo-1487215078519-e21cc028cb29?w=500">
                        </div>
                    </div>
                </div>
                
                
            </div>

            <div class="product-detail-right">
                <div class="product-info-box">
                    <div class="new-tag-wrapper">
                        <span class="new-tag">Nouveau</span>
                    </div>
                    <h1 class="product-title">Headphones Max</h1>
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
                            <div class="color-option active" style="background-color: #E91E63;" data-color="Rose"></div>
                            <div class="color-option" style="background-color: #4FC3F7;" data-color="Bleu"></div>
                            <div class="color-option" style="background-color: #4CAF50;" data-color="Vert"></div>
                            <div class="color-option" style="background-color: #8BC34A;" data-color="Vert clair"></div>
                        </div>
                        <span class="selected-color-text">Couleur sélectionnée: <span id="selected-color">Rose</span></span>
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

    <section class="related-products-section">
        <h2 class="section-title">
            <span class="gradient-yellow-orange">Vous pourrez aussi aimez</span>
        </h2>
        <div class="products-grid">
            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=300" alt="Casque audio">
                </div>
                <div class="product-card-info">
                    <h3 class="product-card-title">Sony WH-1000XM4</h3>
                    <div class="rating-info-small">
                        <div class="stars-list-small">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="rating-text-small">(4.9)</span>
                    </div>
                    <div class="product-card-actions">
                        <span class="product-card-price">10.999FCCFA</span>
                        <button class="add-to-cart-btn">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1484704849700-f032a568e944?w=300" alt="Casque audio">
                </div>
                <div class="product-card-info">
                    <h3 class="product-card-title">Bose QuietComfort 35</h3>
                    <div class="rating-info-small">
                        <div class="stars-list-small">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="rating-text-small">(4.7)</span>
                    </div>
                    <div class="product-card-actions">
                        <span class="product-card-price">19.999FCFA</span>
                        <button class="add-to-cart-btn">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1484704849700-f032a568e944?w=300" alt="Casque audio">
                </div>
                <div class="product-card-info">
                    <h3 class="product-card-title">Bose QuietComfort 35</h3>
                    <div class="rating-info-small">
                        <div class="stars-list-small">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="rating-text-small">(4.7)</span>
                    </div>
                    <div class="product-card-actions">
                        <span class="product-card-price">19.999FCFA</span>
                        <button class="add-to-cart-btn">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1484704849700-f032a568e944?w=300" alt="Casque audio">
                </div>
                <div class="product-card-info">
                    <h3 class="product-card-title">Bose QuietComfort 35</h3>
                    <div class="rating-info-small">
                        <div class="stars-list-small">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="rating-text-small">(4.7)</span>
                    </div>
                    <div class="product-card-actions">
                        <span class="product-card-price">19.999FCFA</span>
                        <button class="add-to-cart-btn">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1484704849700-f032a568e944?w=300" alt="Casque audio">
                </div>
                <div class="product-card-info">
                    <h3 class="product-card-title">Bose QuietComfort 35</h3>
                    <div class="rating-info-small">
                        <div class="stars-list-small">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="rating-text-small">(4.7)</span>
                    </div>
                    <div class="product-card-actions">
                        <span class="product-card-price">19.999FCFA</span>
                        <button class="add-to-cart-btn">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1484704849700-f032a568e944?w=300" alt="Casque audio">
                </div>
                <div class="product-card-info">
                    <h3 class="product-card-title">Bose QuietComfort 35</h3>
                    <div class="rating-info-small">
                        <div class="stars-list-small">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="rating-text-small">(4.7)</span>
                    </div>
                    <div class="product-card-actions">
                        <span class="product-card-price">19.999FCFA</span>
                        <button class="add-to-cart-btn">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1484704849700-f032a568e944?w=300" alt="Casque audio">
                </div>
                <div class="product-card-info">
                    <h3 class="product-card-title">Bose QuietComfort 35</h3>
                    <div class="rating-info-small">
                        <div class="stars-list-small">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="rating-text-small">(4.7)</span>
                    </div>
                    <div class="product-card-actions">
                        <span class="product-card-price">19.999FCFA</span>
                        <button class="add-to-cart-btn">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1487215078519-e21cc028cb29?w=300" alt="Casque audio">
                </div>
                <div class="product-card-info">
                    <h3 class="product-card-title">Sennheiser HD 660 S</h3>
                    <div class="rating-info-small">
                        <div class="stars-list-small">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="rating-text-small">(4.6)</span>
                    </div>
                    <div class="product-card-actions">
                        <span class="product-card-price">5.999FCFA</span>
                        <button class="add-to-cart-btn">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="pagination-section">
            <div class="pagination-center-wrapper">
                <nav class="pagination-nav">
                    
                    <button class="pagination-btn-prev">
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
                    
                    <span class="pagination-ellipsis">.......</span>
                    
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
    </section>

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
                    <button class="video-cta-button button-blue-purple">
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
                    <button class="video-cta-button button-green-teal">
                        Voir les Offres
                    </button>
                </div>
            </section>
        </div>
    </section>
    
    <section class="best-sellers-section">
        <h2 class="section-title">
            <span class="gradient-yellow-orange">Meilleures Ventes</span>
        </h2>
        <div class="products-grid">
            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=300" alt="Casque audio">
                </div>
                <div class="product-card-info">
                    <h3 class="product-card-title">Sony WH-1000XM4</h3>
                    <div class="rating-info-small">
                        <div class="stars-list-small">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="rating-text-small">(4.9)</span>
                    </div>
                    <div class="product-card-actions">
                        <span class="product-card-price">19.99FCFA</span>
                        <button class="add-to-cart-btn">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1484704849700-f032a568e944?w=300" alt="Casque audio">
                </div>
                <div class="product-card-info">
                    <h3 class="product-card-title">Bose QuietComfort 35</h3>
                    <div class="rating-info-small">
                        <div class="stars-list-small">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="rating-text-small">(4.7)</span>
                    </div>
                    <div class="product-card-actions">
                        <span class="product-card-price">19.999FCFA</span>
                        <button class="add-to-cart-btn">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1484704849700-f032a568e944?w=300" alt="Casque audio">
                </div>
                <div class="product-card-info">
                    <h3 class="product-card-title">Bose QuietComfort 35</h3>
                    <div class="rating-info-small">
                        <div class="stars-list-small">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="rating-text-small">(4.7)</span>
                    </div>
                    <div class="product-card-actions">
                        <span class="product-card-price">19.999FCFA</span>
                        <button class="add-to-cart-btn">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1484704849700-f032a568e944?w=300" alt="Casque audio">
                </div>
                <div class="product-card-info">
                    <h3 class="product-card-title">Bose QuietComfort 35</h3>
                    <div class="rating-info-small">
                        <div class="stars-list-small">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="rating-text-small">(4.7)</span>
                    </div>
                    <div class="product-card-actions">
                        <span class="product-card-price">19.999FCFA</span>
                        <button class="add-to-cart-btn">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1484704849700-f032a568e944?w=300" alt="Casque audio">
                </div>
                <div class="product-card-info">
                    <h3 class="product-card-title">Bose QuietComfort 35</h3>
                    <div class="rating-info-small">
                        <div class="stars-list-small">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="rating-text-small">(4.7)</span>
                    </div>
                    <div class="product-card-actions">
                        <span class="product-card-price">19.999FCFA</span>
                        <button class="add-to-cart-btn">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1484704849700-f032a568e944?w=300" alt="Casque audio">
                </div>
                <div class="product-card-info">
                    <h3 class="product-card-title">Bose QuietComfort 35</h3>
                    <div class="rating-info-small">
                        <div class="stars-list-small">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="rating-text-small">(4.7)</span>
                    </div>
                    <div class="product-card-actions">
                        <span class="product-card-price">19.999FCFA</span>
                        <button class="add-to-cart-btn">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1484704849700-f032a568e944?w=300" alt="Casque audio">
                </div>
                <div class="product-card-info">
                    <h3 class="product-card-title">Bose QuietComfort 35</h3>
                    <div class="rating-info-small">
                        <div class="stars-list-small">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="rating-text-small">(4.7)</span>
                    </div>
                    <div class="product-card-actions">
                        <span class="product-card-price">19.999FCFA</span>
                        <button class="add-to-cart-btn">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1484704849700-f032a568e944?w=300" alt="Casque audio">
                </div>
                <div class="product-card-info">
                    <h3 class="product-card-title">Bose QuietComfort 35</h3>
                    <div class="rating-info-small">
                        <div class="stars-list-small">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="rating-text-small">(4.7)</span>
                    </div>
                    <div class="product-card-actions">
                        <span class="product-card-price">19.999FCFA</span>
                        <button class="add-to-cart-btn">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1484704849700-f032a568e944?w=300" alt="Casque audio">
                </div>
                <div class="product-card-info">
                    <h3 class="product-card-title">Bose QuietComfort 35</h3>
                    <div class="rating-info-small">
                        <div class="stars-list-small">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="rating-text-small">(4.7)</span>
                    </div>
                    <div class="product-card-actions">
                        <span class="product-card-price">19.999FCFA</span>
                        <button class="add-to-cart-btn">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1484704849700-f032a568e944?w=300" alt="Casque audio">
                </div>
                <div class="product-card-info">
                    <h3 class="product-card-title">Bose QuietComfort 35</h3>
                    <div class="rating-info-small">
                        <div class="stars-list-small">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="rating-text-small">(4.7)</span>
                    </div>
                    <div class="product-card-actions">
                        <span class="product-card-price">19.999FCFA</span>
                        <button class="add-to-cart-btn">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1545127398-14699f92334b?w=300" alt="Casque audio">
                </div>
                <div class="product-card-info">
                    <h3 class="product-card-title">Audio-Technica ATH-M50x</h3>
                    <div class="rating-info-small">
                        <div class="stars-list-small">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="rating-text-small">(4.8)</span>
                    </div>
                    <div class="product-card-actions">
                        <span class="product-card-price">5.999FCFA</span>
                        <button class="add-to-cart-btn">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://images.unsplash.com/photo-1487215078519-e21cc028cb29?w=300" alt="Casque audio">
                </div>
                <div class="product-card-info">
                    <h3 class="product-card-title">Sennheiser HD 660 S</h3>
                    <div class="rating-info-small">
                        <div class="stars-list-small">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="rating-text-small">(4.6)</span>
                    </div>
                    <div class="product-card-actions">
                        <span class="product-card-price">10.990FCFA</span>
                        <button class="add-to-cart-btn">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="pagination-section">
            <div class="pagination-center-wrapper">
                <nav class="pagination-nav">
                    
                    <button class="pagination-btn-prev">
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
                    
                    <span class="pagination-ellipsis">......</span>
                    
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
</body>
@endsection