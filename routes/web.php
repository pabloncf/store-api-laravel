<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function(){
    return redirect('/products');
});

Route::get('products', [ProductController::class, 'index'])->name('products.index');

Route::get('products/create', [ProductController::class, 'create'])->name('products.create');

Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('products/{product}', [ProductController::class, 'update'])->name('products.update');

Route::post('products', [ProductController::class, 'store'])->name('products.store');

Route::delete('products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

Route::post('category/create', [CategoryController::class, 'store'])->name('category.create');
Route::get('category/create', [CategoryController::class, 'create'])->name('category.create');