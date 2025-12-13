import { inject } from '@angular/core';
import { Router, CanActivateFn, ActivatedRouteSnapshot } from '@angular/router';
import { AuthService } from '../services/auth.service';

/**
 * Guard pour vérifier les rôles des utilisateurs
 * Usage dans les routes:
 * {
 *   path: 'admin',
 *   canActivate: [roleGuard],
 *   data: { roles: ['ADMIN', 'MANAGER'] }
 * }
 */
export const roleGuard: CanActivateFn = (route: ActivatedRouteSnapshot) => {
  const authService = inject(AuthService);
  const router = inject(Router);

  const requiredRoles = route.data['roles'] as string[];

  if (!authService.isAuthenticated()) {
    router.navigate(['/auth/login']);
    return false;
  }

  if (!requiredRoles || requiredRoles.length === 0) {
    return true;
  }

  const hasRole = authService.hasRole(requiredRoles);

  if (!hasRole) {
    // Redirige vers une page d'accès refusé ou le dashboard
    router.navigate(['/dashboard']);
    return false;
  }

  return true;
};
