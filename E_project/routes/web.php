<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\newcontroller;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(newcontroller::class)->group(function(){
    Route::get('/', "homePg");
    Route::get('/about-us', "about");
    Route::get('/cart', "cart");
    Route::get('/checkout', "chackOut");
    Route::get('/contact', "contact");
    Route::get('/Login-Register', "loginRegister");
    Route::get('/product-Details', "productDetail");
    Route::get('/shopping-cart', "shoppingCart");
    Route::get('/Wishlist', "wishlist");
    Route::get('/Shop', "shopLeft");
    Route::get('/Dashboard_page', "home_dashboard");
    Route::get('/order_table', "orders_table");
    Route::get('/add_products', "add_products");
          //       browser route         functionname
    Route::get('/product_categorys', "product_category");
    Route::get('/transection', "transection_tbl");
    Route::get('/add_customers', "add_customer");




}
);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
