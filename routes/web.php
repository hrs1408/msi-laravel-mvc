<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;


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
Route::group([], static function () {
    Route::group(['as' => 'home.'], static function () {
        Route::get('/', [HomeController::class, 'index'])->name('index');
        Route::get('/store', [HomeController::class, 'store'])->name('store');
        Route::get('/product/{slug}', [HomeController::class, 'show'])->name('show');
        Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');

    });
    Route::group(['as' => 'cart.'], static function () {
        Route::get('/cart', [CartController::class, 'index'])->name('index');
        Route::post('/cart/add', [CartController::class, 'insert'])->name('insert');
        Route::post('/cart/update', [CartController::class, 'update'])->name('update');
        Route::delete('/cart/remove', [CartController::class, 'remove'])->name('remove');
        Route::post('/cart/destroy', [CartController::class, 'destroy'])->name('destroy');
        Route::post('/checkout', [CartController::class, 'checkout'])->name('checkout');
    });
    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin.only'], static function () {
        Route::get('/', [AdminController::class, 'index'])->name('index');
        Route::resource('/categories', AdminCategoryController::class)->names([
            'index' => 'categories.index',
            'create' => 'categories.create',
            'store' => 'categories.store',
            'edit' => 'categories.edit',
            'update' => 'categories.update',
            'destroy' => 'categories.destroy',
        ]);
        Route::resource('/products', AdminProductController::class)->names([
            'index' => 'products.index',
            'create' => 'products.create',
            'store' => 'products.store',
            'edit' => 'products.edit',
            'update' => 'products.update',
            'destroy' => 'products.destroy',
        ]);
        Route::resource('/users', AdminUserController::class)->names([
            'index' => 'users.index',
            'create' => 'users.create',
            'store' => 'users.store',
            'edit' => 'users.edit',
            'update' => 'users.update',
            'destroy' => 'users.destroy',
        ]);
        Route::resource('/orders', AdminOrderController::class)->names([
            'index' => 'orders.index',
            'create' => 'orders.create',
            'store' => 'orders.store',
            'edit' => 'orders.edit',
            'update' => 'orders.update',
            'destroy' => 'orders.destroy',
        ]);
    });
});


require __DIR__ . '/auth.php';
