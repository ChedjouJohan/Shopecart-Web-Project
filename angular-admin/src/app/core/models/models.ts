// Enums et types utilitaires
export type UserRole = 'ADMIN' | 'VENDOR' | 'CUSTOMER' | 'DELIVERY' | 'MANAGER' | 'SUPERVISOR';

export type OrderStatus =
  | 'PENDING'
  | 'PROCESSING'
  | 'PAID'
  | 'SHIPPED'
  | 'DELIVERED'
  | 'CANCELED'
  | 'FAILED'
  | 'IN_DELIVERY'
  | 'ASSIGNED'
  | 'EN_ROUTE'
  | 'PENDING_PAYMENT';

export type PaymentMethod = 'card' | 'cash' | 'mobile_money' | 'bank_transfer';

export type ProofType = 'image' | 'signature';

// Interface User
export interface User {
  id: number;
  name: string;
  email: string;
  role: UserRole;
  phone?: string;
  address?: string;
  fcm_token?: string;
  created_at: string;
  updated_at: string;
}

// Interface Product
export interface Product {
  id: number;
  category_id?: number;
  name: string;
  slug: string;
  description?: string;
  price: number;
  compare_price?: number;
  stock: number;
  sku?: string;
  barcode?: string;
  is_visible: boolean;
  is_featured: boolean;
  published_at?: string;
  meta_title?: string;
  meta_description?: string;
  image?: string;
  gallery?: string[];
  formatted_price?: string;
  has_discount?: boolean;
  discount_percentage?: number;
  variants?: ProductVariant[];
  category?: Category;
  created_at: string;
  updated_at: string;
  deleted_at?: string;
}

// Interface ProductVariant
export interface ProductVariant {
  id: number;
  productId: number; // Note: camelCase dans le backend Laravel
  name: string;
  sku: string;
  price: number;
  stock: number;
  color?: string;
  attributes?: Record<string, any>;
  image?: string;
  product?: Product;
  created_at: string;
  updated_at: string;
}

// Interface Category
export interface Category {
  id: number;
  name: string;
  slug: string;
  description?: string;
  image?: string;
  is_visible: boolean;
  position: number;
  products?: Product[];
  created_at: string;
  updated_at: string;
}

// Interface Order
export interface Order {
  id: number;
  user_id: number;
  order_number: string;
  status: OrderStatus;
  subtotal: number;
  shipping: number;
  tax: number;
  discount?: number;
  total: number;
  customer_email: string;
  customer_name: string;
  customer_phone?: string;
  shipping_address: string;
  shipping_city: string;
  shipping_zipcode: string;
  shipping_country: string;
  billing_address?: string;
  billing_city?: string;
  billing_zipcode?: string;
  billing_country?: string;
  payment_method?: PaymentMethod;
  payment_status?: string;
  transaction_id?: string;
  shipping_method?: string;
  notes?: string;
  delivery_user_id?: number;
  proof_path?: string;
  proof_type?: ProofType;
  processed_at?: string;
  completed_at?: string;
  cancelled_at?: string;
  items?: OrderItem[];
  user?: User;
  deliveryUser?: User;
  created_at: string;
  updated_at: string;
}

// Interface OrderItem
export interface OrderItem {
  id: number;
  order_id: number;
  product_id: number;
  product_variant_id?: number;
  product_name: string;
  product_sku: string;
  quantity: number;
  unit_price: number;
  total: number;
  product?: Product;
  productVariant?: ProductVariant;
}

// Interface Cart
export interface Cart {
  id: number;
  user_id?: number;
  session_id?: string;
  items_count: number;
  total: number;
  items?: CartItem[];
  created_at: string;
  updated_at: string;
}

// Interface CartItem
export interface CartItem {
  id: number;
  cart_id: number;
  productVariantId: number; // Note: camelCase
  quantity: number;
  unit_price: number;
  total: number;
  productVariant?: ProductVariant;
}

// Interface Payment
export interface Payment {
  id: number;
  order_id: number;
  amount: number;
  method: PaymentMethod;
  status: string;
  transaction_id?: string;
  stripe_payment_intent_id?: string;
  created_at: string;
  updated_at: string;
}

// Interface DeliveryGeolocation
export interface DeliveryGeolocation {
  id: number;
  user_id: number;
  latitude: number;
  longitude: number;
  updated_at: string;
  user?: User;
}

// Interfaces pour les réponses API

export interface ApiResponse<T> {
  message: string;
  data: T;
  token?: string;
}

export interface PaginationMeta {
  current_page: number;
  from: number;
  last_page: number;
  path: string;
  per_page: number;
  to: number;
  total: number;
}

export interface PaginatedResponse<T> {
  data: T[];
  links: {
    first: string;
    last: string;
    prev: string | null;
    next: string | null;
  };
  meta: PaginationMeta;
}

export interface ErrorResponse {
  message: string;
  errors?: Record<string, string[]>;
}

// Interfaces pour le Dashboard

export interface DashboardKPIs {
  total_revenue: number;
  total_orders: number;
  active_users: number;
  delivery_rate: number;
  orders_ready_to_ship: number;
  deliveries_in_progress: number;
  deliveries_successful: number;
  deliveries_failed: number;
}

export interface SalesDataPoint {
  label: string;
  revenue: number;
  order_count: number;
}

export interface TopProduct {
  product_name: string;
  total_quantity: number;
  total_revenue: number;
}

export interface OrderStatusDistribution {
  [status: string]: number;
}

// Interfaces pour les formulaires

export interface LoginRequest {
  email: string;
  password: string;
}

export interface RegisterRequest {
  name: string;
  email: string;
  password: string;
  password_confirmation: string;
  phone?: string;
  address?: string;
}

export interface AuthResponse {
  message: string;
  token: string;
  user: User;
}

export interface CreateProductRequest {
  name: string;
  description?: string;
  price: number;
  compare_price?: number;
  stock: number;
  category_id?: number;
  is_visible: boolean;
  is_featured: boolean;
  image?: string;
  gallery?: string[];
  sku?: string;
  barcode?: string;
  meta_title?: string;
  meta_description?: string;
}

export interface UpdateProductRequest extends Partial<CreateProductRequest> {}

export interface CreateVariantRequest {
  name: string;
  sku: string;
  price: number;
  stock: number;
  color?: string;
  attributes?: Record<string, any>;
  image?: string;
}

export interface CreateCategoryRequest {
  name: string;
  description?: string;
  is_visible: boolean;
  position: number;
  image?: string;
}

export interface CreateOrderRequest {
  customer_name: string;
  customer_email: string;
  customer_phone?: string;
  shipping_address: string;
  shipping_city: string;
  shipping_zipcode: string;
  shipping_country: string;
  payment_method: PaymentMethod;
  items: Array<{
    product_variant_id: number;
    quantity: number;
    unit_price: number;
  }>;
}

export interface UpdateOrderStatusRequest {
  status: OrderStatus;
}

export interface AssignDeliveryRequest {
  delivery_user_id: number;
}

export interface UpdateLocationRequest {
  latitude: number;
  longitude: number;
}

export interface AddToCartRequest {
  productVariantId: number;
  quantity: number;
}

export interface UpdateCartItemRequest {
  quantity: number;
}

export interface CreateUserRequest {
  name: string;
  email: string;
  password: string;
  role: UserRole;
  phone?: string;
  address?: string;
}

export interface UpdateUserRequest extends Partial<Omit<CreateUserRequest, 'password'>> {
  password?: string;
}

// Interface pour les statistiques de rôles
export interface RoleStats {
  role: UserRole;
  count: number;
}

// Interface pour les stats de vendor
export interface VendorStats {
  total_products: number;
  total_sales: number;
  total_revenue: number;
  active_products: number;
}
