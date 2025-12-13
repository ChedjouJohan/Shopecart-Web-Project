import { Injectable, inject } from '@angular/core';
import { HttpClient, HttpParams } from '@angular/common/http';
import { Observable } from 'rxjs';
import { environment } from '../../../environments/environment';
import {
  User,
  CreateUserRequest,
  UpdateUserRequest,
  RoleStats,
  PaginatedResponse,
  ApiResponse,
} from '../models/models';

@Injectable({
  providedIn: 'root',
})
export class UserService {
  private readonly http = inject(HttpClient);
  private readonly apiUrl = `${environment.apiUrl}/users`;

  /**
   * Récupère tous les utilisateurs avec pagination et filtres
   */
  getAll(params?: {
    page?: number;
    per_page?: number;
    role?: string;
  }): Observable<PaginatedResponse<User>> {
    let httpParams = new HttpParams();

    if (params) {
      Object.keys(params).forEach((key) => {
        const value = (params as any)[key];
        if (value !== undefined && value !== null) {
          httpParams = httpParams.set(key, value.toString());
        }
      });
    }

    return this.http.get<PaginatedResponse<User>>(this.apiUrl, { params: httpParams });
  }

  /**
   * Récupère un utilisateur par son ID
   */
  getById(id: number): Observable<User> {
    return this.http.get<User>(`${this.apiUrl}/${id}`);
  }

  /**
   * Récupère les statistiques par rôle
   */
  getRoleStats(): Observable<ApiResponse<RoleStats[]>> {
    return this.http.get<ApiResponse<RoleStats[]>>(`${this.apiUrl}/roles/stats`);
  }

  /**
   * Crée un nouvel utilisateur
   */
  create(data: CreateUserRequest): Observable<ApiResponse<User>> {
    return this.http.post<ApiResponse<User>>(this.apiUrl, data);
  }

  /**
   * Met à jour un utilisateur
   */
  update(id: number, data: UpdateUserRequest): Observable<ApiResponse<User>> {
    return this.http.put<ApiResponse<User>>(`${this.apiUrl}/${id}`, data);
  }

  /**
   * Supprime un utilisateur
   */
  delete(id: number): Observable<ApiResponse<null>> {
    return this.http.delete<ApiResponse<null>>(`${this.apiUrl}/${id}`);
  }

  /**
   * Met à jour le token FCM d'un utilisateur
   */
  updateFcmToken(fcmToken: string): Observable<ApiResponse<null>> {
    return this.http.post<ApiResponse<null>>(`${environment.apiUrl}/user/fcm-token`, {
      fcm_token: fcmToken,
    });
  }
}
