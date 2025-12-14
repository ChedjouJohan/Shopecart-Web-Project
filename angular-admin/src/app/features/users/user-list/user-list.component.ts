import { Component, OnInit, inject } from '@angular/core';
import { CommonModule } from '@angular/common';
import { MatTableModule } from '@angular/material/table';
import { MatButtonModule } from '@angular/material/button';
import { MatIconModule } from '@angular/material/icon';
import { MatCardModule } from '@angular/material/card';
import { MatChipsModule } from '@angular/material/chips';
import { MatProgressSpinnerModule } from '@angular/material/progress-spinner';
import { MatTooltipModule } from '@angular/material/tooltip';
import { UserService } from '../../../core/services/user.service';
import { User } from '../../../core/models/models';

@Component({
  selector: 'app-user-list',
  standalone: true,
  imports: [
    CommonModule,
    MatTableModule,
    MatButtonModule,
    MatIconModule,
    MatCardModule,
    MatChipsModule,
    MatProgressSpinnerModule,
    MatTooltipModule,
  ],
  templateUrl: './user-list.component.html',
  styleUrl: './user-list.component.scss',
})
export class UserListComponent implements OnInit {
  private userService = inject(UserService);

  users: User[] = [];
  loading = false;
  error: string | null = null;

  displayedColumns: string[] = ['name', 'email', 'role', 'created_at', 'actions'];

  ngOnInit(): void {
    this.loadUsers();
  }

  loadUsers(): void {
    this.loading = true;
    this.error = null;

    this.userService.getAll().subscribe({
      next: (response) => {
        this.users = response.data;
        this.loading = false;
      },
      error: (err) => {
        this.error = 'Erreur lors du chargement des utilisateurs';
        this.loading = false;
        console.error('Error loading users:', err);
      },
    });
  }

  formatDate(date: string | Date): string {
    return new Date(date).toLocaleDateString('fr-FR', {
      year: 'numeric',
      month: 'short',
      day: 'numeric',
    });
  }

  getRoleColor(role: string): string {
    const colors: Record<string, string> = {
      ADMIN: 'warn',
      MANAGER: 'primary',
      SUPERVISOR: 'primary',
      VENDOR: 'accent',
      DELIVERY: 'accent',
      CUSTOMER: '',
    };
    return colors[role] || '';
  }

  getRoleLabel(role: string): string {
    const labels: Record<string, string> = {
      ADMIN: 'Administrateur',
      MANAGER: 'Gestionnaire',
      SUPERVISOR: 'Superviseur',
      VENDOR: 'Vendeur',
      DELIVERY: 'Livreur',
      CUSTOMER: 'Client',
    };
    return labels[role] || role;
  }

  editUser(userId: number): void {
    alert('Fonctionnalité en cours de développement');
  }

  deleteUser(userId: number): void {
    if (!confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')) {
      return;
    }

    this.userService.delete(userId).subscribe({
      next: () => {
        this.loadUsers();
      },
      error: (err) => {
        console.error('Error deleting user:', err);
        alert('Erreur lors de la suppression de l\'utilisateur');
      },
    });
  }
}
