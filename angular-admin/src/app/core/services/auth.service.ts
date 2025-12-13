import { Injectable, inject } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable, BehaviorSubject, tap } from 'rxjs';
import { Router } from '@angular/router';
import { environment } from '../../../environments/environment';
import {
  LoginRequest,
  RegisterRequest,
  AuthResponse,
  User,
  ApiResponse,
} from '../models/models';

@Injectable({
  providedIn: 'root',
})
export class AuthService {
  private readonly http = inject(HttpClient);
  private readonly router = inject(Router);
  private readonly apiUrl = environment.apiUrl;

  private currentUserSubject = new BehaviorSubject<User | null>(this.getUserFromStorage());
  public currentUser$ = this.currentUserSubject.asObservable();

  private tokenSubject = new BehaviorSubject<string | null>(this.getTokenFromStorage());
  public token$ = this.tokenSubject.asObservable();

  /**
   * Connexion d'un utilisateur
   */
  login(credentials: LoginRequest): Observable<AuthResponse> {
    return this.http.post<AuthResponse>(`${this.apiUrl}/login`, credentials).pipe(
      tap((response) => {
        this.handleAuthentication(response.token, response.user);
      })
    );
  }

  /**
   * Enregistrement d'un nouvel utilisateur
   */
  register(data: RegisterRequest): Observable<AuthResponse> {
    return this.http.post<AuthResponse>(`${this.apiUrl}/register`, data).pipe(
      tap((response) => {
        this.handleAuthentication(response.token, response.user);
      })
    );
  }

  /**
   * Déconnexion de l'utilisateur
   */
  logout(): Observable<ApiResponse<null>> {
    return this.http.post<ApiResponse<null>>(`${this.apiUrl}/logout`, {}).pipe(
      tap(() => {
        this.clearAuthentication();
        this.router.navigate(['/auth/login']);
      })
    );
  }

  /**
   * Récupération de l'utilisateur actuellement connecté
   */
  getCurrentUser(): Observable<User> {
    return this.http.get<User>(`${this.apiUrl}/user`).pipe(
      tap((user) => {
        this.currentUserSubject.next(user);
        this.saveUserToStorage(user);
      })
    );
  }

  /**
   * Mise à jour du token FCM pour les notifications push
   */
  updateFcmToken(fcmToken: string): Observable<ApiResponse<null>> {
    return this.http.post<ApiResponse<null>>(`${this.apiUrl}/user/fcm-token`, {
      fcm_token: fcmToken,
    });
  }

  /**
   * Vérifie si l'utilisateur est connecté
   */
  isAuthenticated(): boolean {
    return !!this.getToken();
  }

  /**
   * Récupère le token actuel
   */
  getToken(): string | null {
    return this.tokenSubject.value;
  }

  /**
   * Récupère l'utilisateur actuel
   */
  get currentUser(): User | null {
    return this.currentUserSubject.value;
  }

  /**
   * Vérifie si l'utilisateur a un rôle spécifique
   */
  hasRole(role: string | string[]): boolean {
    const user = this.currentUser;
    if (!user) return false;

    const roles = Array.isArray(role) ? role : [role];
    return roles.includes(user.role);
  }

  /**
   * Vérifie si l'utilisateur est admin
   */
  isAdmin(): boolean {
    return this.hasRole('ADMIN');
  }

  /**
   * Vérifie si l'utilisateur est vendor
   */
  isVendor(): boolean {
    return this.hasRole('VENDOR');
  }

  /**
   * Vérifie si l'utilisateur est manager
   */
  isManager(): boolean {
    return this.hasRole(['ADMIN', 'MANAGER', 'SUPERVISOR']);
  }

  /**
   * Gère l'authentification après login/register
   */
  private handleAuthentication(token: string, user: User): void {
    this.saveTokenToStorage(token);
    this.saveUserToStorage(user);
    this.tokenSubject.next(token);
    this.currentUserSubject.next(user);
  }

  /**
   * Nettoie les données d'authentification
   */
  private clearAuthentication(): void {
    localStorage.removeItem('token');
    localStorage.removeItem('user');
    this.tokenSubject.next(null);
    this.currentUserSubject.next(null);
  }

  /**
   * Sauvegarde le token dans le localStorage
   */
  private saveTokenToStorage(token: string): void {
    localStorage.setItem('token', token);
  }

  /**
   * Récupère le token depuis le localStorage
   */
  private getTokenFromStorage(): string | null {
    return localStorage.getItem('token');
  }

  /**
   * Sauvegarde l'utilisateur dans le localStorage
   */
  private saveUserToStorage(user: User): void {
    localStorage.setItem('user', JSON.stringify(user));
  }

  /**
   * Récupère l'utilisateur depuis le localStorage
   */
  private getUserFromStorage(): User | null {
    const userStr = localStorage.getItem('user');
    return userStr ? JSON.parse(userStr) : null;
  }
}
