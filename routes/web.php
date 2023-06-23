<?php

use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\EditorController;
use App\Http\Controllers\Admin\HeaderController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\FooterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes(['register' => false]);
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('admin-home');
    Route::resource('/editors', EditorController::class)->middleware(['can:read.editor']);
    Route::resource('/categories', CategoryController::class)->middleware(['can:read.category']);
    Route::get('/get-subcategories-by-category-id', [SubcategoryController::class, 'getSubcategoriesByCategoaryId'])
                                                        ->name('get-subcategories-by-categoary-id')
                                                        ->middleware(['can:read.subcategory']);
    Route::resource('/subcategories', SubcategoryController::class)->middleware(['can:read.subcategory']);
    Route::resource('/products', ProductController::class)->middleware(['can:read.product']);
    Route::get('/contact', [ContactController::class, 'index'])->name('get-contact')->middleware(['can:read.contact']);
    Route::put('/contact/{contact}', [ContactController::class, 'update'])->name('update-contact')->middleware(['can:read.contact']);
    Route::get('/about-us', [AboutUsController::class, 'index'])->name('get-about-us')->middleware(['can:read.about-us']);
    Route::put('/about-us/{about_us}', [AboutUsController::class, 'update'])->name('update-about-us')->middleware(['can:read.about-us']);
    Route::get('/header', [HeaderController::class, 'index'])->name('get-header')->middleware(['can:read.header']);
    Route::put('/header/{header}', [HeaderController::class, 'update'])->name('update-header')->middleware(['can:read.header']);

    Route::get('/footer', [FooterController::class, 'index'])->name('get-footer')->middleware(['can:read.footer']);
    Route::put('/footer/{footer}', [FooterController::class, 'update'])->name('update-footer')->middleware(['can:read.footer']);
});
// Route::get('/',  [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('category/products/{category}',  [App\Http\Controllers\CategoryController::class, 'getProductsByCategoryId'])->name('get-products-by-category-id');
