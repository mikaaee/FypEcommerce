<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;


// Public route for homepage
Route::get('/', [HomeController::class, 'index']);

// Authenticated route with middleware
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        //return view('dashboard');
    })->name('dashboard');
});

// Route for HomeController
Route::get('redirect', [HomeController::class, 'redirect']);

// Route for AdminController
Route::get('/home', [AdminController::class, 'home'])->name('admin.home');
//route for dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// Route for AdminController to view categories
Route::get('/view_category', [AdminController::class, 'view_category'])->name('view_category');

// Route to display the Add Category form (GET)
Route::get('/add_category', [AdminController::class, 'showAddCategoryPage'])->name('show_add_category');

// Route to handle the Add Category form submission (POST)
Route::post('/add_category', [AdminController::class, 'add_category'])->name('add_category.submit');

// Route to show the edit form
Route::get('/edit_category/{id}', [AdminController::class, 'edit_category'])->name('edit_category');

// Route to handle the update form submission
Route::post('/update_category/{id}', [AdminController::class, 'update_category'])->name('update_category');

// Route for deleting category
Route::get('/delete_category/{id}', [AdminController::class, 'delete_category']);

// Route for viewing products
Route::get('/view_product', [AdminController::class, 'view_product']);

// Route for adding products
Route::post('/add_product', [AdminController::class, 'add_product']);

// Route for showing products
Route::get('/show_product', [AdminController::class, 'show_product']);

// Route for deleting products
Route::get('/delete_product/{id}', [AdminController::class, 'delete_product']);

// Route for updating products
Route::get('/update_product/{id}', [AdminController::class, 'update_product']);

// Route for confirming product update
Route::post('/update_product_confirm/{id}', [AdminController::class, 'update_product_confirm']);

// Route for product details
Route::get('/product_details/{id}', [HomeController::class, 'product_details']);
