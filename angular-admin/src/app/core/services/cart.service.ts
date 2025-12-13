import { Injectable, inject } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable, BehaviorSubject, tap } from 'rxjs';
import { environment } from '../../../environments/environment';
import { Cart, AddToCartRequest, UpdateCartItemRequest, ApiResponse } from '../models/models';

@Injectable({
  providedIn: 'root',
})
export class CartService {
  private readonly http = inject(HttpClient);
  private readonly apiUrl = `${environment.apiUrl}/cart`;

  private cartSubject = new BehaviorSubject<Cart | null>(null);
  public cart$ = this.cartSubject.asObservable();

  /**
   * Récupère le panier de l'utilisateur connecté
   */
  get(): Observable<Cart> {
    return this.http.get<Cart>(this.apiUrl).pipe(
      tap((cart) => {
        this.cartSubject.next(cart);
      })
    );
  }

  /**
   * Crée ou récupère le panier
   */
  createOrGet(): Observable<ApiResponse<Cart>> {
    return this.http.post<ApiResponse<Cart>>(this.apiUrl, {}).pipe(
      tap((response) => {
        this.cartSubject.next(response.data);
      })
    );
  }

  /**
   * Ajoute un article au panier
   */
  addItem(data: AddToCartRequest): Observable<ApiResponse<Cart>> {
    return this.http.post<ApiResponse<Cart>>(`${this.apiUrl}/add`, data).pipe(
      tap((response) => {
        this.cartSubject.next(response.data);
      })
    );
  }

  /**
   * Met à jour la quantité d'un article du panier
   */
  updateItem(cartItemId: number, data: UpdateCartItemRequest): Observable<ApiResponse<Cart>> {
    return this.http.put<ApiResponse<Cart>>(`${this.apiUrl}/items/${cartItemId}`, data).pipe(
      tap((response) => {
        this.cartSubject.next(response.data);
      })
    );
  }

  /**
   * Supprime un article du panier
   */
  removeItem(cartItemId: number): Observable<ApiResponse<Cart>> {
    return this.http.delete<ApiResponse<Cart>>(`${this.apiUrl}/items/${cartItemId}`).pipe(
      tap((response) => {
        this.cartSubject.next(response.data);
      })
    );
  }

  /**
   * Vide complètement le panier
   */
  clear(): Observable<ApiResponse<null>> {
    return this.http.delete<ApiResponse<null>>(`${this.apiUrl}/clear`).pipe(
      tap(() => {
        this.cartSubject.next(null);
      })
    );
  }

  /**
   * Récupère le panier actuel du state
   */
  get currentCart(): Cart | null {
    return this.cartSubject.value;
  }
}
