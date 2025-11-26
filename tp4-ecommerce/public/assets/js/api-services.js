// api-service.js
/**
 * SERVICE API - Communication avec le backend Laravel
 * ===================================================
 */

class ApiService {
    constructor() {
        this.baseURL = 'http://localhost:8000/api';
        this.token = localStorage.getItem('auth_token');
    }

    async request(endpoint, options = {}) {
        const url = `${this.baseURL}${endpoint}`;
        const config = {
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
            },
            ...options
        };

        // Ajouter le token d'authentification si disponible
        if (this.token) {
            config.headers['Authorization'] = `Bearer ${this.token}`;
        }

        try {
            const response = await fetch(url, config);
            
            // Gérer les erreurs d'authentification
            if (response.status === 401) {
                this.handleUnauthorized();
                throw new Error('Session expirée');
            }

            if (!response.ok) {
                const errorData = await response.json().catch(() => ({}));
                throw new Error(errorData.message || `HTTP error! status: ${response.status}`);
            }

            return await response.json();
        } catch (error) {
            console.error('API Request failed:', error);
            throw error;
        }
    }

    handleUnauthorized() {
        localStorage.removeItem('auth_token');
        localStorage.removeItem('user');
        window.location.href = '/login.html';
    }

    // ==================== AUTHENTIFICATION ====================
    async register(userData) {
        return await this.request('/register', {
            method: 'POST',
            body: JSON.stringify(userData)
        });
    }

    async login(credentials) {
        const data = await this.request('/login', {
            method: 'POST',
            body: JSON.stringify(credentials)
        });
        
        if (data.token) {
            this.token = data.token;
            localStorage.setItem('auth_token', data.token);
            localStorage.setItem('user', JSON.stringify(data.user));
        }
        
        return data;
    }

    async logout() {
        try {
            await this.request('/logout', {
                method: 'POST'
            });
        } catch (error) {
            console.error('Logout error:', error);
        } finally {
            this.token = null;
            localStorage.removeItem('auth_token');
            localStorage.removeItem('user');
        }
    }

    async getCurrentUser() {
        return await this.request('/user');
    }

    // ==================== PRODUITS ====================
    async getProducts() {
        return await this.request('/products');
    }

    async getFeaturedProducts() {
        return await this.request('/products/featured');
    }

    async getProduct(id) {
        return await this.request(`/products/${id}`);
    }

    async getCategories() {
        return await this.request('/categories');
    }

    async getCategory(id) {
        return await this.request(`/categories/${id}`);
    }

    // ==================== PANIER ====================
    async getCart() {
        return await this.request('/cart');
    }

    async addToCart(productId, quantity = 1) {
        return await this.request(`/cart/add/${productId}`, {
            method: 'POST',
            body: JSON.stringify({ quantity })
        });
    }

    async updateCartItem(cartItemId, quantity) {
        return await this.request(`/cart/items/${cartItemId}`, {
            method: 'PUT',
            body: JSON.stringify({ quantity })
        });
    }

    async removeCartItem(cartItemId) {
        return await this.request(`/cart/items/${cartItemId}`, {
            method: 'DELETE'
        });
    }

    async clearCart() {
        return await this.request('/cart/clear', {
            method: 'DELETE'
        });
    }

    // Méthodes alternatives pour cartItems
    async getCartItems(cartId) {
        return await this.request(`/cartItems/cart/${cartId}`);
    }

    async addCartItem(itemData) {
        return await this.request('/cartItems', {
            method: 'POST',
            body: JSON.stringify(itemData)
        });
    }

    async updateCartItemAlt(cartItemId, itemData) {
        return await this.request(`/cartItems/${cartItemId}`, {
            method: 'PUT',
            body: JSON.stringify(itemData)
        });
    }

    async deleteCartItemAlt(cartItemId) {
        return await this.request(`/cartItems/${cartItemId}`, {
            method: 'DELETE'
        });
    }

    // ==================== COMMANDES ====================
    async getOrders() {
        return await this.request('/orders');
    }

    async createOrder(orderData) {
        return await this.request('/orders', {
            method: 'POST',
            body: JSON.stringify(orderData)
        });
    }

    async getOrder(orderId) {
        return await this.request(`/orders/${orderId}`);
    }

    // ==================== PAIEMENT ====================
    async createPaymentIntent(orderId, paymentData) {
        return await this.request(`/payment/create-payment-intent/order/${orderId}`, {
            method: 'POST',
            body: JSON.stringify(paymentData)
        });
    }

    async registerPayment(paymentData) {
        return await this.request('/payment/registerPayment', {
            method: 'POST',
            body: JSON.stringify(paymentData)
        });
    }
}

// Instance globale
window.apiService = new ApiService();