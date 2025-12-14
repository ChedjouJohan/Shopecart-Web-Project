import { Component, OnInit, inject } from '@angular/core';
import { CommonModule } from '@angular/common';
import { MatTableModule } from '@angular/material/table';
import { MatButtonModule } from '@angular/material/button';
import { MatIconModule } from '@angular/material/icon';
import { MatCardModule } from '@angular/material/card';
import { MatChipsModule } from '@angular/material/chips';
import { MatProgressSpinnerModule } from '@angular/material/progress-spinner';
import { MatTooltipModule } from '@angular/material/tooltip';
import { MatDialogModule, MatDialog } from '@angular/material/dialog';
import { CategoryService } from '../../../core/services/category.service';
import { Category } from '../../../core/models/models';

@Component({
  selector: 'app-category-list',
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
    MatDialogModule,
  ],
  templateUrl: './category-list.component.html',
  styleUrl: './category-list.component.scss',
})
export class CategoryListComponent implements OnInit {
  private categoryService = inject(CategoryService);
  private dialog = inject(MatDialog);

  categories: Category[] = [];
  loading = false;
  error: string | null = null;

  displayedColumns: string[] = ['name', 'description', 'products_count', 'actions'];

  ngOnInit(): void {
    this.loadCategories();
  }

  loadCategories(): void {
    this.loading = true;
    this.error = null;

    this.categoryService.getAll().subscribe({
      next: (categories) => {
        this.categories = categories;
        this.loading = false;
      },
      error: (err) => {
        this.error = 'Erreur lors du chargement des catégories';
        this.loading = false;
        console.error('Error loading categories:', err);
      },
    });
  }

  addCategory(): void {
    const name = prompt('Nom de la nouvelle catégorie :');
    if (!name) return;

    const description = prompt('Description (optionnel) :');

    this.categoryService
      .create({
        name,
        description: description || undefined,
        is_visible: true,
        position: 0,
      })
      .subscribe({
        next: () => {
          this.loadCategories();
        },
        error: (err) => {
          console.error('Error creating category:', err);
          alert('Erreur lors de la création de la catégorie');
        },
      });
  }

  editCategory(category: Category): void {
    const name = prompt('Nouveau nom :', category.name);
    if (!name) return;

    const description = prompt('Nouvelle description :', category.description || '');

    this.categoryService
      .update(category.id, {
        name,
        description: description || undefined,
      })
      .subscribe({
        next: () => {
          this.loadCategories();
        },
        error: (err) => {
          console.error('Error updating category:', err);
          alert('Erreur lors de la modification de la catégorie');
        },
      });
  }

  deleteCategory(categoryId: number): void {
    if (!confirm('Êtes-vous sûr de vouloir supprimer cette catégorie ?')) {
      return;
    }

    this.categoryService.delete(categoryId).subscribe({
      next: () => {
        this.loadCategories();
      },
      error: (err) => {
        console.error('Error deleting category:', err);
        alert('Erreur lors de la suppression de la catégorie');
      },
    });
  }
}
