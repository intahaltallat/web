<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
    function login(){
        if (Auth::check()){
            return redirect()->intended(route('home'));
        }
        return view('login');
    }

    function loginPost(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)){
            return redirect()->intended(route('index'));
        }    
        return redirect()->intended(route('index'));
    }

    function signupPost(Request $request){
        $request->validate([
            'name'=> 'required',
            'email' => 'required|email|unique:owners',
            'password' => 'required'
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        
        $user = Owner::create($data);

        if(!$user){
            return redirect()->intended(route('register'));

        }

        return redirect()->intended(route('login'));
    }

    function signupPost_admin(Request $request){
        $request->validate([
            'name'=> 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required'
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = Admin::create($data);
        if(!$user){
            return redirect()->intended(route('register_admin'));
        }
        return redirect()->intended(route('login_admin'));
    }

    function logout(){
        Session::flush();
        Auth::logout();

        return redirect()->intended(route('login'));

    }

    function signup(){
        return view('registration');
    }


}