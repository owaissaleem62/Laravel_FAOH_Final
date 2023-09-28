<?php

<<<<<<< HEAD
=======
namespace App\Http\Controllers;

>>>>>>> parent of f055201 (admin login & logout session complete)
use Illuminate\Http\Request;
use Hash;
use Illuminate\Http\Facades\Auth;

class AdminController extends Controller
{
    public function login(){
        return view('admin_login');
    }

    public function makeLogin(Requst $requst){
        $data= array(
            'email'=>$requst->email,
            'password'=>$requst->password

        );
    if(Auth::attempt($data)){
        echo "Login Success";
    }else{
        return back()->withErrors(['Messege'=>'invalid email & password']);
    }

    }


}
