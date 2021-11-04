<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
Route::get('/', [App\Http\Controllers\HomePageController::class, 'index'])->name("myhome");

Route::get('/shop',[App\Http\Controllers\ShopController::class, "index"])->name('shop');
Route::get("/product/{slug}", [App\Http\Controllers\ProductDetailsController::class, 'index'])->name('products-details');
Route::post('/product', [App\Http\Controllers\ProductDetailsController::class, 'store'])->name('products.store');
Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart');

Route::post('/cart/{rowId}', [App\Http\Controllers\CartController::class, 'remove'])->name('cart.destroy');
Route::get('/product-category/{category_slug}', [App\Http\Controllers\CategoryController::class, 'index'])->name('products-category');
Route::get('/customer/editinformation',[App\Http\Controllers\EditInformationController::class, 'index'])->name('editinformation');
Auth::routes();
Route::get('/customer/changepass', [App\Http\Controllers\ChangePasswordController::class, 'index'])->name('changepassword');
Route::post('/customer/changepass', [App\Http\Controllers\ChangePasswordController::class, 'updatePassword'])->name('updatepassword');
Route::get('/customer/account', [App\Http\Controllers\AccountController::class, 'index'])->name('account');
Route::get('/home', [App\Http\Controllers\HomePageController::class, 'index'])->name('home');
Route::post('/customer/editinformation',[App\Http\Controllers\EditInformationController::class, 'updateInfo'])->name("update");


Route::group(['middleware' => ['auth', 'user'], 'prefix' => 'user'], function () {
    Route::get('/userhome', [App\Http\Controllers\HomeController::class, 'index'])->name('user_dashboard');
});

// admin protected routes
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'adminview'])->name('admin_dashboard');
    Route::get('/categories', [App\Http\Controllers\AdminCategoryController::class, 'index']);
    Route::get('/edit/{category_slug}', [App\Http\Controllers\EditCategoryController::class, 'index'])->name('edit-category');
});