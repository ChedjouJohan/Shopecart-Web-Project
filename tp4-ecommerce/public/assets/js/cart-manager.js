/**
 * CART-MANAGER.JS - Gestion de l'ajout au panier via le HTML - VERSION CORRIGÉE COMPLÈTE
 * =============================================
 * Récupère directement les infos depuis le HTML des produits
 * Fonctionne sur TOUTES les pages (listes et détails)
 * 🟢 CORRECTION APPLIQUÉE : Initialisation des totaux globaux pour éviter l'erreur NaN
 */

// ========================================
// VARIABLES GLOBALES
// ========================================

const CART_STORAGE_KEY = 'shopcart_cart';

// Mapping des images par défaut par marque
const DEFAULT_IMAGES = {
    'sennheiser': '/assets/images/C1.jpeg',
    'beats by dre': '/assets/images/C6.jpeg',
    'bose': '/assets/images/M2.png',
    'sony': '/assets/images/M2.png',
    'jbl': '/assets/images/C13.jpeg',
    'marshall': '/assets/images/M4.jpeg',
    'anker': '/assets/images/C7.jpeg',
    'skullcandy': '/assets/images/C5.jpeg',
    'jabra': '/assets/images/C4.jpeg',
    'akg': '/assets/images/C3.png',
    'audio-technica': '/assets/images/C7.jpeg',
    'default': '/assets/images/placeholder.png'
};

// ========================================
// FONCTIONS DE GESTION DU PANIER
// ========================================

/**
 * Ajoute un produit au panier en récupérant les infos depuis le HTML
 */
function addToCartFromHTML(productElement, quantity = 1, color = 'Défaut') {
    try {
        console.log('🛒 Début ajout au panier...', productElement);
        
        // Extraire toutes les infos du HTML du produit
        const productData = extractProductInfoFromHTML(productElement);
        
        if (!productData) {
            console.error('❌ Impossible d\'extraire les données du produit');
            showNotification('Erreur: données produit non trouvées', 'error');
            return;
        }

        console.log('📦 Données extraites:', productData);

        // getCartFromStorage est maintenant robuste et renvoie les champs globaux (discount_percentage etc.) initialisés
        let cart = getCartFromStorage(); 
        
        // Vérifier si le produit existe déjà dans le panier
        const existingItemIndex = cart.cart_items.findIndex(item => 
            item.nom === productData.name && item.couleur === color
        );
        
        if (existingItemIndex !== -1) {
            // Produit existant - ajouter la quantité
            const newQuantity = cart.cart_items[existingItemIndex].quantite + quantity;
            
            if (newQuantity > 10) {
                showNotification('Quantité maximale atteinte (10)', 'warning');
                cart.cart_items[existingItemIndex].quantite = 10;
            } else {
                cart.cart_items[existingItemIndex].quantite = newQuantity;
                showNotification(`${quantity} ${productData.name} ajouté(s) - Total: ${newQuantity}`, 'success');
            }
        } else {
            // Nouveau produit
            const finalQuantity = quantity > 10 ? 10 : quantity;
            
            const cartItem = {
                id: generateUniqueId(),
                nom: productData.name,
                marque: productData.brand,
                prix: productData.price,
                quantite: finalQuantity,
                couleur: color,
                image: productData.image,
                note: productData.rating,
                // REMOVED : discount_percentage, shipping_cost, tax_percentage (sont maintenant globaux via getCartFromStorage)
            };
            
            cart.cart_items.push(cartItem);
            
            if (quantity > 10) {
                showNotification(`${productData.name} ajouté (quantité limitée à 10)`, 'warning');
            } else {
                showNotification(`${quantity} ${productData.name} ajouté(s) au panier`, 'success');
            }
        }
        
        // Sauvegarder le panier mis à jour
        saveCartToStorage(cart);
        
        // Mettre à jour le badge du panier
        updateCartBadge();
        
        console.log('✅ Produit ajouté au panier:', productData.name);
        
    } catch (error) {
        console.error('❌ Erreur lors de l\'ajout au panier:', error);
        showNotification('Erreur lors de l\'ajout au panier', 'error');
    }
}

/**
 * Extrait toutes les informations du produit depuis son HTML - VERSION UNIVERSELLE
 */
function extractProductInfoFromHTML(productElement) {
    try {
        console.log('🔍 Extraction des données depuis HTML...', productElement);

        // 1. NOM DU PRODUIT - Essayer tous les sélecteurs possibles
        let nameElement = productElement.querySelector('.product-title-card, .product-title, .product-name, h1.product, h1.name, h3, h4, .product-detail-title, .product.name, h1.product-title, h3.product-title, h1.product.name, h2.product-name, .detail-name, .product-detail h2, h1, h2, .title, .item-title, .product-header h1, .product-header h2, .ordi-title, .disk-title');
        const name = nameElement ? nameElement.textContent.trim() : 'Produit sans nom';
        console.log('📝 Nom trouvé:', name);

        // 2. MARQUE - Extraire depuis le nom ou un élément dédié
        let brandElement = productElement.querySelector('.product-brand, .brand, .marque, .product-info p:first-child, .product-detail-right .product-brand, .detail-brand, .product-detail-brand, .brand-name, .item-brand, p.brand, .product-header p, .brand-logo + p, .ordi-brand, .disk-brand');
        let brand = brandElement ? brandElement.textContent.trim() : getBrandFromTitle(name);
        console.log('🏷️ Marque trouvée:', brand);

        // 3. PRIX - Chercher dans tous les formats possibles
           let priceElement = productElement.querySelector('.product-price, .price, .prix, .main-price, .price-section .price, .product-card-price, .price-info .main-price, .detail-price, .product-detail-price, .product-detail .price, p.price, .item-price, span.price, .price-current, .product-price span, .ordi-price, .disk-price');
        let price = 0;
        if (priceElement) {
            const priceText = priceElement.textContent.trim();
            console.log('💰 Texte prix:', priceText);
            // Supprimer tout sauf les chiffres
            price = parseInt(priceText.replace(/[^\d]/g, '')) || 0;
        }
        console.log('💰 Prix converti:', price);

        // 4. NOTE/RATING - Extraire le nombre depuis le texte
        let ratingElement = productElement.querySelector(
            '.product-rating, .rating-text, ' +
            '.product-rate .rating-text, .stars, ' +
            '.rating-text-small'
        );
        let rating = 0;
        if (ratingElement) {
            const ratingText = ratingElement.textContent.trim();
            console.log('⭐ Texte note:', ratingText);
            // Chercher un nombre décimal dans le texte
            const match = ratingText.match(/(\d+\.?\d*)/);
            rating = match ? parseFloat(match[1]) : 0;
        }
        console.log('⭐ Note trouvée:', rating);

        // 5. IMAGE - Chercher dans tous les conteneurs possibles
               let imageElement = productElement.querySelector('img.product-image, img.product-img, .product-frame img, .main-image, .product-gallery img, .main-product-image img, .detail-image, img.main, .product-detail img, img[itemprop="image"], .item-image, img.primary, .product-image img, img[src^="/assets/images/"], .ordi-image, .disk-image');
        let image = DEFAULT_IMAGES.default;
        
        if (imageElement) {
            image = imageElement.src;
        } else {
            // Image par défaut selon la marque
            image = DEFAULT_IMAGES[brand.toLowerCase()] || DEFAULT_IMAGES.default;
        }
        console.log('🖼️ Image trouvée:', image);

        return {
            name,
            brand,
            price,
            rating,
            image
        };

    } catch (error) {
        console.error('❌ Erreur extraction:', error);
        return null;
    }
}

// ========================================
// FONCTIONS DE STOCKAGE (CORRIGÉES)
// ========================================

/**
 * Récupère le panier depuis localStorage ou renvoie un objet panier vide et initialisé.
 * 🟢 Assure que les propriétés globales sont initialisées (correction NaN).
 */
function getCartFromStorage() {
    try {
        const storedCart = localStorage.getItem(CART_STORAGE_KEY);
        
        let cart = storedCart ? JSON.parse(storedCart) : { cart_items: [] };

        // 🟢 CORRECTION : Assurer l'existence des propriétés globales pour les calculs de totaux
        cart.discount_percentage = cart.discount_percentage || 0;
        cart.shipping_cost = cart.shipping_cost || 0;
        cart.tax_percentage = cart.tax_percentage || 0;
        
        return cart;
    } catch (e) {
        console.error('Erreur lors de la lecture du localStorage:', e);
        // Retourner un objet vide initialisé en cas d'erreur
        return { 
            cart_items: [],
            discount_percentage: 0,
            shipping_cost: 0,
            tax_percentage: 0
        };
    }
}

function saveCartToStorage(cart) {
    localStorage.setItem(CART_STORAGE_KEY, JSON.stringify(cart));
}

// ========================================
// INITIALISATION DES ÉCOUTEURS
// ========================================

/**
 * Initialise les écouteurs pour les boutons "Ajouter au panier" sur les pages listes
 */
function initAddToCartListeners() {
    console.log('🔧 Initialisation écouteurs ajout panier (listes)...');
    
      const addButtons = document.querySelectorAll(
        '.add-to-cart-btn, .btn-outline, .btn-add-cart, ' +
        '.product-card-actions button, .btn-add-to-cart, ' +
        '.add-to-cart-btn, .product-actions button, ' +
        '.price-cart button, .btn-primary'
    );
    
    console.log(`✅ ${addButtons.length} boutons trouvés`);
    
    addButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            // Trouver l'élément produit parent
             const productElement = this.closest(
        '.product-card, .product-frame, ' +
        '.product-detail-wrapper, .product-info, ' +
        '.product-detail-container, .product-detail-flex, ' +
        '.products-grid .product-card, a.product-card'
    );
            
            if (!productElement) {
                console.error('❌ Élément produit parent non trouvé');
                return;
            }
            
            // Récupérer quantité (défaut: 1 pour les listes)
            const quantity = 1;
            
            // Récupérer couleur (défaut pour les listes)
            const color = 'Défaut';
            
            console.log(`🎯 Ajout produit - Quantité: ${quantity}, Couleur: ${color}`);
            addToCartFromHTML(productElement, quantity, color);
        });
    });
}

/**
 * Initialise les écouteurs pour la page détail
 */
function initDetailPageListeners() {
    console.log('🔧 Initialisation page détail...');
    
    // Bouton "Ajouter au panier"
    const detailAddBtn = document.querySelector(
        '.btn-add, .btn-add-cart, .add-to-cart, ' +
        '.btn-add-to-cart, .actions .btn-add-to-cart'
    );
    
    if (detailAddBtn) {
        console.log('✅ Bouton ajouter trouvé');
        detailAddBtn.addEventListener('click', function(e) {
            e.preventDefault();
            handleDetailPageAddToCart();
        });
    } else {
        console.log('ℹ️ Bouton ajouter non trouvé (page liste)');
    }
    
    // Bouton "Acheter maintenant"
    const buyNowBtn = document.querySelector(
        '.btn-buy, .buy-now, .btn-buy-it-now, ' +
        '.actions .btn-buy-it-now'
    );
    
    if (buyNowBtn) {
        console.log('✅ Bouton acheter trouvé');
        buyNowBtn.addEventListener('click', function(e) {
            e.preventDefault();
            handleDetailPageBuyNow();
        });
    }
    
    // Gestion des quantités
    initQuantityControls();
    
    // Gestion des couleurs
    initColorSelectors();
    
    // Galerie d'images
    initImageGallery();
}

/**
 * Gère l'ajout au panier depuis la page détail
 */
function handleDetailPageAddToCart() {
    console.log('🛒 Ajout depuis page détail...');
    
    // Sélectionner l'élément produit principal
    const productElement = document.querySelector(
        '.product-detail-wrapper, .product-info, ' +
        '.product-detail-section, .product-detail-container, ' +
        '.product-detail-flex'
    );
    
    if (!productElement) {
        console.error('❌ Élément produit non trouvé');
        showNotification('Erreur: produit non trouvé', 'error');
        return;
    }
    
    // Récupérer la quantité
    const quantityInput = document.querySelector('.qty-input, .quantity-display, .qty');
    let quantity = 1;
    
    if (quantityInput) {
        if (quantityInput.tagName === 'INPUT') {
            quantity = parseInt(quantityInput.value) || 1;
        } else {
            quantity = parseInt(quantityInput.textContent) || 1;
        }
    }
    console.log('📊 Quantité:', quantity);
    
    // Récupérer la couleur sélectionnée
    let color = 'Défaut';
    const activeColorBtn = document.querySelector('.color-btn-active');
    
    if (activeColorBtn) {
        // Essayer de récupérer le nom de la couleur depuis un attribut data
        color = activeColorBtn.dataset.color || 
                activeColorBtn.getAttribute('title') || 
                activeColorBtn.style.backgroundColor || 
                'Couleur sélectionnée';
    } else {
        // Essayer l'ancien format
        const selectedColor = document.querySelector('#selected-color, .selected-color-text span');
        if (selectedColor) {
            color = selectedColor.textContent.trim() || 'Défaut';
        }
    }
    console.log('🎨 Couleur:', color);
    
    addToCartFromHTML(productElement, quantity, color);
}

/**
 * Gère "Acheter maintenant" (ajout au panier + redirection)
 */
function handleDetailPageBuyNow() {
    handleDetailPageAddToCart();
    setTimeout(() => {
        window.location.href = '/panier.html';
    }, 500);
}

// ========================================
// AUTRES FONCTIONS (quantité, couleurs, galerie)
// ========================================

function initQuantityControls() {
    // Chercher l'input de quantité
    const quantityInput = document.querySelector('.qty-input, .quantity-display, .qty');
    const quantityBtns = document.querySelectorAll(
        '.quantity-btn, .qty-btn, ' +
        'button[data-action="decrease"], button[data-action="increase"]'
    );
    
    if (!quantityInput || quantityBtns.length === 0) {
        console.log('ℹ️ Contrôles de quantité non trouvés (normal pour page liste)');
        return;
    }
    
    console.log('✅ Contrôles de quantité initialisés');
    
    // Identifier les boutons + et -
    const decreaseBtn = Array.from(quantityBtns).find(btn => 
        btn.textContent.trim() === '-' || 
        btn.innerHTML.includes('minus') || 
        btn.classList.contains('decrease') || 
        btn.dataset.action === 'decrease' ||
        btn.querySelector('.fa-minus')
    );
    
    const increaseBtn = Array.from(quantityBtns).find(btn => 
        btn.textContent.trim() === '+' || 
        btn.innerHTML.includes('plus') || 
        btn.classList.contains('increase') || 
        btn.dataset.action === 'increase' ||
        btn.querySelector('.fa-plus')
    );
    
    if (decreaseBtn) {
        decreaseBtn.addEventListener('click', function(e) {
            e.preventDefault();
            let currentValue;
            
            if (quantityInput.tagName === 'INPUT') {
                currentValue = parseInt(quantityInput.value) || 1;
                if (currentValue > 1) {
                    quantityInput.value = currentValue - 1;
                }
            } else {
                currentValue = parseInt(quantityInput.textContent) || 1;
                if (currentValue > 1) {
                    quantityInput.textContent = currentValue - 1;
                }
            }
        });
    }
    
    if (increaseBtn) {
        increaseBtn.addEventListener('click', function(e) {
            e.preventDefault();
            let currentValue;
            
            if (quantityInput.tagName === 'INPUT') {
                currentValue = parseInt(quantityInput.value) || 1;
                if (currentValue < 10) {
                    quantityInput.value = currentValue + 1;
                } else {
                    showNotification('Quantité maximale: 10 articles', 'warning');
                }
            } else {
                currentValue = parseInt(quantityInput.textContent) || 1;
                if (currentValue < 10) {
                    quantityInput.textContent = currentValue + 1;
                } else {
                    showNotification('Quantité maximale: 10 articles', 'warning');
                }
            }
        });
    }
}

function initColorSelectors() {
    // Nouveau format (color-btn)
    const colorBtns = document.querySelectorAll('.color-btn, .color-btn-active');
    
    if (colorBtns.length > 0) {
        console.log('✅ Sélecteurs de couleur initialisés (nouveau format)');
        
        colorBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                // Retirer la classe active de tous les boutons
                colorBtns.forEach(b => {
                    b.classList.remove('color-btn-active');
                    b.classList.add('color-btn');
                });
                // Ajouter la classe active au bouton cliqué
                this.classList.remove('color-btn');
                this.classList.add('color-btn-active');
            });
        });
        return;
    }
    
    // Ancien format (color-option)
    const colorOptions = document.querySelectorAll('.color-option');
    const selectedColorText = document.querySelector('#selected-color');
    
    if (colorOptions.length > 0) {
        console.log('✅ Sélecteurs de couleur initialisés (ancien format)');
        
        colorOptions.forEach(option => {
            option.addEventListener('click', function() {
                colorOptions.forEach(opt => opt.classList.remove('active'));
                this.classList.add('active');
                if (selectedColorText) {
                    selectedColorText.textContent = this.dataset.color;
                }
            });
        });
    } else {
        console.log('ℹ️ Sélecteurs de couleur non trouvés (normal pour page liste)');
    }
}

function initImageGallery() {
    const mainImage = document.querySelector('#main-image, .main-image');
    const thumbnails = document.querySelectorAll('.thumbnail, .thumbnails img');
    
    if (!mainImage || thumbnails.length === 0) {
        console.log('ℹ️ Galerie d\'images non trouvée (normal pour page liste)');
        return;
    }
    
    console.log('✅ Galerie d\'images initialisée');
    
    thumbnails.forEach(thumbnail => {
        thumbnail.addEventListener('click', function() {
            thumbnails.forEach(thumb => thumb.classList.remove('active', 'thumbnail-active'));
            this.classList.add('active', 'thumbnail-active');
            
            const newImage = this.dataset.image || this.src;
            mainImage.src = newImage;
        });
    });
}

// ========================================
// NOTIFICATIONS ET UTILITAIRES
// ========================================

function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.innerHTML = `
        <i class="fas fa-${getNotificationIcon(type)}"></i>
        <span>${message}</span>
    `;
    
    notification.style.cssText = `
        position: fixed;
        top: 100px;
        right: 20px;
        background: ${getNotificationColor(type)};
        color: white;
        padding: 15px 20px;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        z-index: 10000;
        display: flex;
        align-items: center;
        gap: 10px;
        max-width: 300px;
        transform: translateX(400px);
        opacity: 0;
        transition: all 0.3s ease;
    `;
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.style.transform = 'translateX(0)';
        notification.style.opacity = '1';
    }, 10);
    
    setTimeout(() => {
        notification.style.transform = 'translateX(400px)';
        notification.style.opacity = '0';
        setTimeout(() => notification.remove(), 300);
    }, 3000);
}

function getNotificationIcon(type) {
    const icons = {
        success: 'check-circle',
        error: 'exclamation-circle',
        warning: 'exclamation-triangle',
        info: 'info-circle'
    };
    return icons[type] || 'info-circle';
}

function getNotificationColor(type) {
    const colors = {
        success: '#4CAF50',
        error: '#f44336',
        warning: '#ff9800',
        info: '#2196F3'
    };
    return colors[type] || '#2196F3';
}

function updateCartBadge() {
    const cart = getCartFromStorage();
    const totalItems = cart.cart_items.reduce((sum, item) => sum + item.quantite, 0);
    const badge = document.querySelector('.cart-count');
    if (badge) {
        badge.textContent = totalItems;
        badge.style.display = totalItems > 0 ? 'flex' : 'none';
    }
    console.log('🔄 Badge mis à jour:', totalItems, 'articles');
}

function generateUniqueId() {
    return Date.now().toString(36) + Math.random().toString(36).substr(2);
}

function getBrandFromTitle(title) {
    const brands = [
        'Sennheiser', 'Beats by Dre', 'Bose', 'Sony', 'JBL', 'Marshall', 
        'Anker', 'Jabra', 'AKG', 'Skullcandy', 'Audio-Technica', 
        'Nikon', 'Canon', 'Lumix', 'Fujifilm', 'Olympus', 'Leica', 
        'Casio', 'Pentax', 'Sigma',
        'Itel', 'Samsung', 'Apple', 'Iphone', 'Google', 'Pixel',
        'Razer', 'Microsoft', 'Seagate', 'Western Digital', 
        'Dell', 'HP', 'Lenovo', 'Asus'
    ];
    
    for (const brand of brands) {
        if (title.toLowerCase().includes(brand.toLowerCase())) {
            return brand;
        }
    }
    return 'Autre';
}

// ========================================
// INITIALISATION GLOBALE
// ========================================

function initCartManager() {
    console.log('🛒 Initialisation du gestionnaire de panier...');
    console.log('📍 URL actuelle:', window.location.pathname);
    
    initAddToCartListeners(); // Pour listes
    initDetailPageListeners(); // Pour détails
    updateCartBadge();
    
    console.log('✅ Gestionnaire de panier initialisé');
}

// Démarrer quand le DOM est chargé
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initCartManager);
} else {
    initCartManager();
}

// Export pour utilisation globale
window.addToCartFromHTML = addToCartFromHTML;
window.updateCartBadge = updateCartBadge;