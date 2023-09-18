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

}

