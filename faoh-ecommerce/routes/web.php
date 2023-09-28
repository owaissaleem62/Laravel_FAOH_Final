<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\newcontroller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;

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
    Route::get('/home', [newcontroller::class,'homePg'])->name('home');
    Route::get('/about-us', [newcontroller::class,'about'])->name('about');
    Route::get('/cart', [newcontroller::class,'cart'])->name('cart');
    Route::get('/checkout', [newcontroller::class,'checkout'])->name('checkout');
    Route::get('/contact', [newcontroller::class,'contact'])->name('contact');
    // Route::get('/Login-Register', [newcontroller::class,'Login_Register'])->name('Login-Register');
    Route::get('/product-Details', [newcontroller::class,'productDetail'])->name('product_detail');
    Route::get('/shopping-cart', [newcontroller::class,'shoppingCart'])->name('shopping_cart');
    Route::get('/Wishlist', [newcontroller::class,'wishlist'])->name('wishlist');
    Route::get('/Shop', [newcontroller::class,'shopLeft'])->name('shop');
    Route::get('/order_table', [newcontroller::class,'orders_table'])->name('order_table');
    Route::get('/add_products', [newcontroller::class,'add_products'])->name('add_products');
    Route::get('/add_products', [CategoryController::class,'index'])->name('add_products');

//login register
    Route::get('/Login-Register', "user_login")->name('user_login');
    Route::post('/Login-Register', "user_store")->name('user_store');
    Route::post('/user-Login', "loginCheck")->name('loginCheck');
    Route::get('/user-Logout', "logout")->name('user_logout');
          //       browser route         functionname
    Route::get('/product_categorys', [newcontroller::class,'product_category'])->name('product_categorys');
    Route::get('/transection', [newcontroller::class,'transection_tbl'])->name('transection');
    Route::get('/add_customers', [newcontroller::class,'add_customer'])->name('add_customers');
    Route::get('/user_profile', [newcontroller::class,'profile'])->name('user_profile');
    Route::get('/admin-login', [AdminController::class,'admin_login'])->name('admin-login');
    Route::post('/admin-login', [AdminController::class,'makelogin'])->name('makelogin');
    Route::get('/sys-user', [newcontroller::class,'sys_user'])->name('sys_user');

    Route::group(['middleware' => 'auth'], function (){
    Route::get('/dashboard', [AdminController::class,'home_dashboard'])->name('dashboard');
    Route::get('/admin-logout', [AdminController::class,'admin_logout'])->name('admin-logout');
    Route::post('add-category', [CategoryController::class, 'store']);


    });

});
