<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Auth;



class AdminController extends Controller
{
    public function admin_login(){
        return view('admin_login');
    }

    public function makelogin(Request $request){
        $data= array(
            'email'=>$request->email,
            'password'=>$request->password,
            'role'=>'admin'
        );
    if(Auth::attempt($data)){
        return redirect()->route('dashboard');
    }else{
        return back()->withErrors(['Messege'=>'invalid email & password']);
    }
}

    public function home_dashboard(){
        return view('home_dashboard');
    }

    public function admin_logout(){
        Auth::logout();
        return redirect()->route('admin-login');
    }

}
