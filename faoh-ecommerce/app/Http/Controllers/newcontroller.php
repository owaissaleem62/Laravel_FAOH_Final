<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newcontroller extends Controller
{

    public function about(){
        return view("about-us");
    }

    public function cart(){
        return view("cart");
    }

    public function chackOut(){
        return view("checkout");
    }

    public function contact(){
        return view("contact");
    }

    public function homePg(){
        return view("index");
    }

    public function loginRegister(){
        return view("login-register");
    }

    public function productDetail(){
        return view("product-details");
    }

    public function shopLeft(){
        return view("shop-left-sidebar");
    }

    public function shoppingCart(){
        return view("shopping-cart");
    }

    public function wishlist(){
        return view("wishlist");
    }

    public function home_dashboard(){
        return view("home_dashboard");
    }

    public function orders_table(){
        return view("orders_tbl");
    }

    public function add_products(){
        return view("add_product");
    }

    public function product_category(){
        //filename.blade.php
        return view("product_category");
    }

    public function transection_tbl(){
        return view("transection_tbl");
    }

    public function add_customer(){
        return view("add_customer");
    }

    public function profile(){
        return view("profile");
    }

    public function admin_login(){
        return view("admin_login");
    }

    public function sys_user(){
        return view("sys_user");
    }


}
