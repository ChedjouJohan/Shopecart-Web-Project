import { Component, OnInit, inject } from '@angular/core';
import { CommonModule } from '@angular/common';
import { Router, ActivatedRoute } from '@angular/router';
import {
  FormBuilder,
  FormGroup,
  ReactiveFormsModule,
  Validators,
} from '@angular/forms';
import { MatCardModule } from '@angular/material/card';
import { MatFormFieldModule } from '@angular/material/form-field';
import { MatInputModule } from '@angular/material/input';
import { MatButtonModule } from '@angular/material/button';
import { MatIconModule } from '@angular/material/icon';
import { MatSelectModule } from '@angular/material/select';
import { MatCheckboxModule } from '@angular/material/checkbox';
import { MatProgressSpinnerModule } from '@angular/material/progress-spinner';
import { ProductService } from '../../../core/services/product.service';
import { CategoryService } from '../../../core/services/category.service';
import { Product, Category } from '../../../core/models/models';

@Component({
  selector: 'app-product-form',
  standalone: true,
  imports: [
    CommonModule,
    ReactiveFormsModule,
    MatCardModule,
    MatFormFieldModule,
    MatInputModule,
    MatButtonModule,
    MatIconModule,
    MatSelectModule,
    MatCheckboxModule,
    MatProgressSpinnerModule,
  ],
  templateUrl: './product-form.component.html',
  styleUrl: './product-form.component.scss',
})
export class ProductFormComponent implements OnInit {
  private fb = inject(FormBuilder);
  private productService = inject(ProductService);
  private categoryService = inject(CategoryService);
  private router = inject(Router);
  private route = inject(ActivatedRoute);

  productForm: FormGroup;
  productId: number | null = null;
  isEditMode = false;
  loading = false;
  categories: Category[] = [];
  error: string | null = null;

  constructor() {
    this.productForm = this.fb.group({
      name: ['', [Validators.required, Validators.maxLength(255)]],
      description: [''],
      price: [0, [Validators.required, Validators.min(0)]],
      compare_price: [0, Validators.min(0)],
      stock: [0, [Validators.required, Validators.min(0)]],
      sku: ['', Validators.maxLength(100)],
      category_id: [null],
      is_visible: [true],
      is_featured: [false],
    });
  }

  ngOnInit(): void {
    this.loadCategories();

    this.route.paramMap.subscribe((params) => {
      const id = params.get('id');
      if (id) {
        this.productId = parseInt(id, 10);
        this.isEditMode = true;
        this.loadProduct();
      }
    });
  }

  loadCategories(): void {
    this.categoryService.getAll().subscribe({
      next: (categories) => {
        this.categories = categories;
      },
      error: (err) => {
        console.error('Error loading categories:', err);
      },
    });
  }

  loadProduct(): void {
    if (!this.productId) return;

    this.loading = true;
    this.productService.getById(this.productId).subscribe({
      next: (product) => {
        this.productForm.patchValue({
          name: product.name,
          description: product.description,
          price: product.price,
          compare_price: product.compare_price,
          stock: product.stock,
          sku: product.sku,
          category_id: product.category_id,
          is_visible: product.is_visible,
          is_featured: product.is_featured,
        });
        this.loading = false;
      },
      error: (err) => {
        this.error = 'Erreur lors du chargement du produit';
        this.loading = false;
        console.error('Error loading product:', err);
      },
    });
  }

  onSubmit(): void {
    if (this.productForm.invalid) {
      return;
    }

    this.loading = true;
    this.error = null;

    const formData = this.productForm.value;

    const request = this.isEditMode && this.productId
      ? this.productService.update(this.productId, formData)
      : this.productService.create(formData);

    request.subscribe({
      next: () => {
        this.router.navigate(['/products']);
      },
      error: (err) => {
        this.error = `Erreur lors de ${this.isEditMode ? 'la modification' : 'la création'} du produit`;
        this.loading = false;
        console.error('Error saving product:', err);
      },
    });
  }

  cancel(): void {
    this.router.navigate(['/products']);
  }

  get title(): string {
    return this.isEditMode ? 'Modifier le produit' : 'Nouveau produit';
  }
}
