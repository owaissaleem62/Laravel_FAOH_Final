<?php

namespace App\Http\Controllers;
use Hash;
use App\Models\user;
use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;

use Illuminate\Support\Facades\Session;
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
        $product = product::all();
        return view("shop-left-sidebar",compact('product'));
    }


    public function bookCart()
    {
        $product = product::all();

        $cartItems = session()->get('cart', []);
        return view('index', compact('cartItems','product'));
    }
    public function addBooktoCart($id)
    {
        $book = product::findOrFail($id); // Assuming 'Product' is your model name
        $cart = session()->get('cart', []);
        
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "id" => $book->id,
                "Title" => $book->Title,
                "quantity" => 1,
                "price" => $book->price,
                "image" => $book->image
            ];
        }
        
        session()->put('cart', $cart);
        
        return redirect()->back()->with('success', 'Item has been added to cart!');
    }
    


    public function clearCart()
    {
        // Clear the cart items in the session
        Session::forget('cart');
    
        // Optionally, you can set a flash message
        session()->flash('success', 'Cart has been cleared.');
    
        return redirect()->route('view-cart'); // Redirect to the cart view or any other page
    }
    

    public function shoppingCart(){
        
        $product = product::all();
        return view("shopping-cart",compact('product'));
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
