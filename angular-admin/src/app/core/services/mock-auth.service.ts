import { Injectable } from '@angular/core';
import { Observable, of, delay, throwError } from 'rxjs';
import { AuthResponse, LoginRequest, RegisterRequest, User } from '../models/models';

/**
 * Service d'authentification mocké pour tester sans backend
 */
@Injectable({
  providedIn: 'root',
})
export class MockAuthService {
  private mockUser: User = {
    id: 1,
    name: 'Admin Test',
    email: 'admin@test.com',
    role: 'ADMIN',
    phone: '+237653982736',
    address: 'Yaoundé, Cameroun',
    created_at: new Date().toISOString(),
    updated_at: new Date().toISOString(),
  };

  private mockToken = 'mock-jwt-token-123456789';

  /**
   * Connexion mockée
   * Email: admin@test.com / Password: password
   */
  login(credentials: LoginRequest): Observable<AuthResponse> {
    // Simule une validation
    if (credentials.email === 'admin@test.com' && credentials.password === 'password') {
      // Sauvegarde dans localStorage
      localStorage.setItem('token', this.mockToken);
      localStorage.setItem('user', JSON.stringify(this.mockUser));

      const response: AuthResponse = {
        message: 'Login successful',
        token: this.mockToken,
        user: this.mockUser,
      };

      return of(response).pipe(delay(800)); // Simule un délai réseau
    }

    // Erreur si mauvais credentials
    return throwError(() => new Error('Invalid credentials')).pipe(delay(800));
  }

  /**
   * Inscription mockée
   */
  register(data: RegisterRequest): Observable<AuthResponse> {
    const newUser: User = {
      id: 2,
      name: data.name,
      email: data.email,
      role: 'CUSTOMER',
      phone: data.phone,
      address: data.address,
      created_at: new Date().toISOString(),
      updated_at: new Date().toISOString(),
    };

    localStorage.setItem('token', this.mockToken);
    localStorage.setItem('user', JSON.stringify(newUser));

    const response: AuthResponse = {
      message: 'Registered',
      token: this.mockToken,
      user: newUser,
    };

    return of(response).pipe(delay(1000));
  }

  /**
   * Déconnexion mockée
   */
  logout(): Observable<{ message: string }> {
    localStorage.removeItem('token');
    localStorage.removeItem('user');

    return of({ message: 'Logged out' }).pipe(delay(300));
  }

  /**
   * Récupère l'utilisateur actuel
   */
  getCurrentUser(): Observable<User> {
    return of(this.mockUser).pipe(delay(400));
  }

  /**
   * Vérifie si l'utilisateur est connecté
   */
  isAuthenticated(): boolean {
    return !!localStorage.getItem('token');
  }

  /**
   * Récupère le token
   */
  getToken(): string | null {
    return localStorage.getItem('token');
  }

  /**
   * Récupère l'utilisateur depuis le storage
   */
  get currentUser(): User | null {
    const userStr = localStorage.getItem('user');
    return userStr ? JSON.parse(userStr) : null;
  }

  /**
   * Vérifie les rôles
   */
  hasRole(role: string | string[]): boolean {
    const user = this.currentUser;
    if (!user) return false;

    const roles = Array.isArray(role) ? role : [role];
    return roles.includes(user.role);
  }

  isAdmin(): boolean {
    return this.hasRole('ADMIN');
  }

  isVendor(): boolean {
    return this.hasRole('VENDOR');
  }

  isManager(): boolean {
    return this.hasRole(['ADMIN', 'MANAGER', 'SUPERVISOR']);
  }

  updateFcmToken() {
    return of({ message: 'FCM token updated', data: null }).pipe(delay(300));
  }
}
