import { ApplicationConfig, provideZoneChangeDetection } from '@angular/core';
import { provideRouter } from '@angular/router';
import { provideHttpClient, withInterceptors } from '@angular/common/http';
import { provideAnimations } from '@angular/platform-browser/animations';

import { routes } from './app.routes';
import { authInterceptor } from './core/interceptors/auth.interceptor';
import { errorInterceptor } from './core/interceptors/error.interceptor';

// Import mock services
import { AuthService } from './core/services/auth.service';
import { ProductService } from './core/services/product.service';
import { DashboardService } from './core/services/dashboard.service';
import { MockAuthService } from './core/services/mock-auth.service';
import { MockProductService } from './core/services/mock-product.service';
import { MockDashboardService } from './core/services/mock-dashboard.service';

export const appConfig: ApplicationConfig = {
  providers: [
    provideZoneChangeDetection({ eventCoalescing: true }),
    provideRouter(routes),
    provideHttpClient(withInterceptors([authInterceptor, errorInterceptor])),
    provideAnimations(),
    // Use mock services instead of real services
    { provide: AuthService, useClass: MockAuthService },
    { provide: ProductService, useClass: MockProductService },
    { provide: DashboardService, useClass: MockDashboardService },
  ],
};
