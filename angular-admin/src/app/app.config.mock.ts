import { ApplicationConfig, provideZoneChangeDetection } from '@angular/core';
import { provideRouter } from '@angular/router';
import { provideHttpClient, withInterceptors } from '@angular/common/http';
import { provideAnimations } from '@angular/platform-browser/animations';

import { routes } from './app.routes';
import { authInterceptor } from './core/interceptors/auth.interceptor';
import { errorInterceptor } from './core/interceptors/error.interceptor';

// Import des services mockés
import { AuthService } from './core/services/auth.service';
import { ProductService } from './core/services/product.service';
import { DashboardService } from './core/services/dashboard.service';
import { MockAuthService } from './core/services/mock-auth.service';
import { MockProductService } from './core/services/mock-product.service';
import { MockDashboardService } from './core/services/mock-dashboard.service';

/**
 * Configuration de l'application en mode MOCK (pour tester sans backend)
 *
 * Pour utiliser cette configuration :
 * 1. Renommez app.config.ts en app.config.real.ts
 * 2. Renommez app.config.mock.ts en app.config.ts
 * 3. Lancez ng serve
 *
 * Ou utilisez la commande : ng serve --configuration=mock (si configuré dans angular.json)
 */
export const appConfig: ApplicationConfig = {
  providers: [
    provideZoneChangeDetection({ eventCoalescing: true }),
    provideRouter(routes),
    provideHttpClient(withInterceptors([authInterceptor, errorInterceptor])),
    provideAnimations(),

    // Remplace les vrais services par les mocks
    { provide: AuthService, useClass: MockAuthService },
    { provide: ProductService, useClass: MockProductService },
    { provide: DashboardService, useClass: MockDashboardService },

    // Ajoutez d'autres services mockés ici selon vos besoins
  ],
};
