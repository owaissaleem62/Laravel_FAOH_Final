<?php

namespace App\Http\Controllers;
use Hash;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
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

    // public function home_dashboard(){
    //     return view("home_dashboard");
    // }

    public function orders_table(){
        return view("orders_tbl");
    }

    public function add_products(){
        return view("add_product");
    }

    public function product_category(){
        //filename.blade.php
        $category = Category::all();
        return view("product_category" , compact('category'));
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

    // public function Login_Register(){
    //     return view("Login-Register");
    // }

    public function sys_user(){
        return view("sys_user");
    }

    public function user_login(){
        return view("login-register");
    }

    public function loginCheck(Request $request){
        $data = array(
            'email' => $request->email,
            'password' => $request->password
        );
        if(Auth::attempt($data)){
            return redirect()->route('home');
        }else{
            return back()->withErrors(['message'=>'Invalid email or password']);
        }
    }



    public function user_store(Request $request){
     $data = array(
        'name' => $request->first_name.' '.$request->last_name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'role' => 'user'
     );
     $user = User::create($data);
     return redirect()->route('user_login');
    }


    public function logout() {
        Auth::logout();
        return redirect()->route('user_login');
    }

}
