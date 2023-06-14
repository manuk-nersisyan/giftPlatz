<?php

use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\EditorController;
use App\Http\Controllers\Admin\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin-home');
    Route::resource('/editors', EditorController::class)->middleware(['can:read.editor']);
    Route::resource('/categories', CategoryController::class)->middleware(['can:read.category']);
    Route::get('/get-subcategories-by-category-id', [SubcategoryController::class, 'getSubcategoriesByCategoaryId'])
                                                        ->name('get-subcategories-by-categoary-id')
                                                        ->middleware(['can:read.subcategory']);
    Route::resource('/subcategories', SubcategoryController::class)->middleware(['can:read.subcategory']);
    Route::resource('/products', ProductController::class)->middleware(['can:read.product']);
});
