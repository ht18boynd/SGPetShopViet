<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrderDetailController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\CategoryController;

use App\Http\Controllers\FE\HomeController as FEController;

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

Route::get('/', [FEController::class, 'index'])->name('home');

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::get('/register', [LoginController::class, 'register'])->name('register');

Route::post('/login', [LoginController::class, 'login'])->name('checkLogin');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// for product details
Route::get('/product/{slug}', [FEController::class, 'product'])->name('product.details');

Route::post('/add-cart', [FEController::class, 'addCart'])->name('addCart');
Route::get('/shop', [FEController::class, 'shop'])->name('shop');
Route::get('/about', [FEController::class, 'about'])->name('about');
Route::get('/contact', [FEController::class, 'contact'])->name('contact');
Route::get('/person', [FEController::class, 'person'])->name('person');
Route::get('/view-cart', [FEController::class, 'viewCart'])->name('viewCart');
Route::get('/clear-cart', [FEController::class, 'clearCart'])->name('clearCart');

Route::post('/change-cart-item', [FEController::class, 'changeCartItem'])->name('changeCart');
Route::post('/remove-cart-item', [FEController::class, 'removeCartItem'])->name('removeCart');


Route::post('/process-checkout', [FEController::class, 'processCheckout'])->name('processCheckout');


Route::group(['middleware'=>'canLogin'], function() {
    // c???n login m???i truy c???p
    Route::post('/process-checkout', [FEController::class, 'processCheckout'])->name('processCheckout');
    Route::get('/checkout', [FEController::class, 'checkout'])->name('checkout');
    Route::group(['middleware'=>'canAdmin', 'prefix'=> 'admin', 'as' => 'admin.'], function() {
        // c???n admin m???i truy c???p
        Route::get('/', [HomeController::class, 'homedb'])->name('homedb');

        Route::resource('/user', UserController::class);

        Route::resource('/product', ProductController::class);

        Route::resource('/orderdetail', OrderDetailController::class);

        Route::resource('/order', OrderController::class);

        Route::resource('/category',CategoryController::class);
    });
        
});

