<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
    });
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], static function () {

    }
    );
});

require __DIR__ . '/auth.php';
