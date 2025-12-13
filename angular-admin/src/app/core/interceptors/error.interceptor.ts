import { HttpInterceptorFn, HttpErrorResponse } from '@angular/common/http';
import { inject } from '@angular/core';
import { Router } from '@angular/router';
import { catchError, throwError } from 'rxjs';
import { AuthService } from '../services/auth.service';

/**
 * Interceptor pour gérer les erreurs HTTP globalement
 */
export const errorInterceptor: HttpInterceptorFn = (req, next) => {
  const router = inject(Router);
  const authService = inject(AuthService);

  return next(req).pipe(
    catchError((error: HttpErrorResponse) => {
      let errorMessage = 'Une erreur est survenue';

      if (error.error instanceof ErrorEvent) {
        // Erreur côté client
        errorMessage = `Erreur: ${error.error.message}`;
      } else {
        // Erreur côté serveur
        switch (error.status) {
          case 401:
            // Non authentifié - déconnecter et rediriger vers login
            localStorage.removeItem('token');
            localStorage.removeItem('user');
            router.navigate(['/auth/login']);
            errorMessage = 'Session expirée. Veuillez vous reconnecter.';
            break;
          case 403:
            errorMessage = 'Accès refusé. Vous n\'avez pas les permissions nécessaires.';
            break;
          case 404:
            errorMessage = 'Ressource non trouvée.';
            break;
          case 422:
            // Erreur de validation Laravel
            if (error.error.errors) {
              const validationErrors = Object.values(error.error.errors)
                .flat()
                .join(', ');
              errorMessage = validationErrors;
            } else {
              errorMessage = error.error.message || 'Erreur de validation.';
            }
            break;
          case 500:
            errorMessage = 'Erreur serveur. Veuillez réessayer plus tard.';
            break;
          default:
            errorMessage = error.error.message || `Erreur HTTP ${error.status}`;
        }
      }

      console.error('Erreur HTTP:', {
        status: error.status,
        message: errorMessage,
        error: error.error,
      });

      // Retourne l'erreur pour que les composants puissent la gérer
      return throwError(() => new Error(errorMessage));
    })
  );
};
