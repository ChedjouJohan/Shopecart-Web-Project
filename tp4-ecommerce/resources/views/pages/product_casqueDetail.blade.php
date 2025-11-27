
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Headphones Max - Détails | SonicWave</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}" >
    <link rel="stylesheet" href="{{ asset('assets/css/products_casque.css') }}">
    <script defer src="{{ asset('assets/js/newsletter.js') }}"></script>
    
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
    <script src="{{ asset('assets/js/product_navigation_casques.js') }}" defer></script> 
    <script src="{{ asset('assets/js/product_pagination.js') }}" defer></script> 
    <script defer src="{{ asset('assets/js/newsletter.js') }}"></script>
    <script src="{{ asset('assets/js/cart-manager.js') }}" defer></script>
</head>
@extends('layouts.app')

@section('title', 'Produit- Shopecart')

@section('content')
  <main class="main-content-container">
      
    <div class="product-detail-container">
        <div class="product-detail-flex">
            <div class="product-detail-left">
                <div class="image-gallery-box">
                    <div class="main-product-image">
                        <img id="main-image" src="/assets/images/C7.jpeg" alt="Casque Max">
                    </div>
                    <div class="thumbnail-row">
                        <div class="thumbnail active">
                            <img src="/assets/images/C1.jpeg" alt="Vue 1" data-image="/assets/images/C1.jpeg">
                        </div>
                        <div class="thumbnail">
                            <img src="/assets/images/C2.jpeg" alt="Vue 2" data-image="/assets/images/C2.jpeg">
                        </div>
                        <div class="thumbnail">
                            <img src="/assets/images/C3.png" alt="Vue 3" data-image="/assets/images/C3.jpeg">
                        </div>
                        <div class="thumbnail">
                            <img src="/assets/images/C4.jpeg" alt="Vue 4" data-image="/assets/images/C4.jpeg">
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
    
        <section class="products-section">
            <h2 class="section-title" id="title-best-sellers">
                <span class="gradient-blue-purple">Best Sellers</span>
            </h2>
            <p class="section-subtitle">Nos meilleures ventes</p>
            <div class="products-grid" id="best-sellers-grid">
                <a href="{{ route('casque_details', ['id' => 3]) }}" class="product-card">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C2.jpeg" alt="QuietComfort 45" class="product-image">
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
                <a href="{{ route('casque_details', ['id' => 4]) }}" class="product-card">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C4.jpeg" alt="WH-1000XM5" class="product-image">
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
                <a href="{{ route('casque_details', ['id' => 9]) }}" class="product-card">
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
                <a href="{{ route('casque_details', ['id' => 10]) }}" class="product-card">
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
                <a href="{{ route('casque_details', ['id' => 13]) }}" class="product-card">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C4.jpeg" alt="WH-1000XM4" class="product-image">
                        <div class="product-tag tag-best-seller">TOP VENTE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sony</p>
                        <h3 class="product-title-card">WH-1000XM4</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.9)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">19 990 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 3]) }}" class="product-card">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C4.jpeg" alt="QuietComfort 45" class="product-image">
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
                <a href="{{ route('casque_details', ['id' => 4]) }}" class="product-card">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C4.jpeg" alt="WH-1000XM5" class="product-image">
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
                <a href="{{ route('casque_details', ['id' => 9]) }}" class="product-card">
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
                <a href="{{ route('casque_details', ['id' => 10]) }}" class="product-card">
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
                <a href="{{ route('casque_details', ['id' => 13]) }}" class="product-card">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C4.jpeg" alt="WH-1000XM4" class="product-image">
                        <div class="product-tag tag-best-seller">TOP VENTE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sony</p>
                        <h3 class="product-title-card">WH-1000XM4</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.9)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">19 990 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
               <a href="{{ route('casque_details', ['id' => 3]) }}" class="product-card">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C4.jpeg" alt="QuietComfort 45" class="product-image">
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
                <a href="{{ route('casque_details', ['id' => 4]) }}" class="product-card">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C4.jpeg" alt="WH-1000XM5" class="product-image">
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
                <a href="{{ route('casque_details', ['id' => 9]) }}" class="product-card">
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
                <a href="{{ route('casque_details', ['id' => 9]) }}" class="product-card">
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
                <a href="{{ route('casque_details', ['id' => 13]) }}" class="product-card">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C4.jpeg" alt="WH-1000XM4" class="product-image">
                        <div class="product-tag tag-best-seller">TOP VENTE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sony</p>
                        <h3 class="product-title-card">WH-1000XM4</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.9)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">19 990 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 14]) }}" class="product-card">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/M3.png" alt="WH-1000XM4" class="product-image">
                        <div class="product-tag tag-best-seller">TOP VENTE</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Sony</p>
                        <h3 class="product-title-card">WH-1000XM4</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.9)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">19 990 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 15]) }}" class="product-card">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C7.jpeg" alt="ATH-M50x Studio" class="product-image">
                        <div class="product-tag tag-new tag-right">NOUVEAU</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Audio-Technica</p>
                        <h3 class="product-title-card">ATH-M50x Studio</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.9)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">200 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 16]) }}" class="product-card">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C4.jpeg" alt="ATH-M50x Studio" class="product-image">
                        <div class="product-tag tag-new tag-right">NOUVEAU</div>
                    </div>
                    <div class="product-info">
                        <p class="product-brand">Audio-Technica</p>
                        <h3 class="product-title-card">ATH-M50x Studio</h3>
                        <div class="rating-info">
                            <div class="stars-list"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                            <span class="rating-text">(4.9)</span>
                        </div>
                        <div class="product-actions">
                            <span class="product-price">200 000 FCFA</span>
                            <button class="add-to-cart-btn"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </a>
                <a href="{{ route('casque_details', ['id' => 3]) }}" class="product-card">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C4.jpeg" alt="QuietComfort 45" class="product-image">
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
                        <img src="/assets/images/C4.jpeg" alt="WH-1000XM5" class="product-image">
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
                        <img src="/assets/images/C4.jpeg" alt="WH-1000XM5" class="product-image">
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
                <a href="{{ route('casque_details', ['id' => 3]) }}" class="product-card" data-id="4" data-brand="sony" data-price-raw="349000" data-rating-raw="4.9">
                    <div class="product-image-wrapper">
                        <img src="/assets/images/C4.jpeg" alt="WH-1000XM5" class="product-image">
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
                <a href="{{ route('casque_details', ['id' => 3]) }}" class="product-card" data-id="5" data-brand="jbl" data-price-raw="129000" data-rating-raw="4.2">
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
                        <img src="/assets/images/C4.jpeg" alt="WH-1000XM5" class="product-image">
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

        
       
  </main>
 @endsection