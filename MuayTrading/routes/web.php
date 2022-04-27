<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\ProductController as UserProductController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/admin/products/', [AdminProductController::class, 'index'])->name('admin.products.index');
Route::get('/admin/products/create', [AdminProductController::class, 'create'])->name('admin.products.create');
Route::get('/admin/Products/{id}', [AdminProductController::class, 'show'])->name('admin.products.show');
Route::post('admin/Products/store', [AdminProductController::class, 'store'])->name('admin.products.store');
Route::get('/admin/Products{id}edit', [AdminProductController::class, 'edit'])->name('admin.products.edit');
Route::put('admin/Products/{id}', [AdminProductController::class, 'update'])->name('admin.products.update');
Route::delete('/admin/Products/{id}', [AdminProductController::class, 'destroy'])->name('admin.products.destroy');

Route::get('/user/products/', [UserProductController::class, 'index'])->name('user.products.index');
Route::get('/user/products/{id}', [UserProductController::class, 'show'])->name('user.products.show');

Route::get('admin/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');
Route::get('user/home', [App\Http\Controllers\User\HomeController::class, 'index'])->name('user.home');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
