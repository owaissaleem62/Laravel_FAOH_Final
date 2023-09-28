<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\newcontroller;
use App\Http\Controllers\AdminController;



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

Route::controller(newcontroller::class)->group(function(){
    Route::get('/', "homePg");
    Route::get('/home', "homePg")->name('home');
    Route::get('/about-us', "about")->name('about');
    Route::get('/cart', "cart")->name('cart');
    Route::get('/checkout', "chackOut")->name('checkout');
    Route::get('/contact', "contact")->name('contact');
    Route::get('/product-Details', "productDetail")->name('product_detail');
    Route::get('/shopping-cart', "shoppingCart")->name('shopping_cart');
    Route::get('/Wishlist', "wishlist")->name('wishlist');
    Route::get('/Shop', "shopLeft")->name('shop');
    Route::get('/dashboard', "home_dashboard")->name('dashboard');
    Route::get('/order_table', "orders_table")->name('order_table');
    Route::get('/add_products', "add_products")->name('add_products');

    //User Registration
    Route::get('/Login-Register', "user_login")->name('user_login');
    Route::post('/Login-Register', "user_store")->name('user_store');
    Route::post('/user-Login', "loginCheck")->name('loginCheck');
    Route::get('/user-Logout', "logout")->name('user_logout');

    // Route::post('/Login-Register', "loginCheck")->name('loginCheck');


          //       browser route         functionname
    Route::get('/product_categorys', "product_category")->name('product_categorys');
    Route::get('/transection', "transection_tbl")->name('transection');
    Route::get('/add_customers', "add_customer")->name('add_customers');
    Route::get('/user_profile', "profile")->name('user_profile');
    Route::get('/admin-login', "admin_login")->name('admin-login');
    Route::post('/admin-login', "makelogin")->name('makelogin');
    Route::get('/sys-user', "sys_user")->name('sys_user');





}
);
