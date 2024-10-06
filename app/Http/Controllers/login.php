<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Owner;
use App\Models\Pet;



class login extends Controller
{
    public function loginsession(Request $request){
        $name = $request->input('name');
    // $password =Hash::make($request->password);
    $user = Owner::where('name',$name)->first();

    if ($user && Hash::check($request->password, $user->password)){
            $id = $user->id;
            Session::put('name', $user->name);
            Session::put('id', $id);

            $value = Session::get('key');
            // echo($value);
            $data = Pet::all();
            return view('index_login',['data'=>$data]);
            //  return view('/index_login');
        }
        else{
            return "User not found";
        }
    }

    public function logoutUser(Request $request)
    {
        try {
            Auth::logout(); // Log the user out
            $request->session()->flush(); // Flush the session
            // return view('/index');
            return response()->json(['message' => 'Logout successful']);
        } catch (\Exception $e) {
            // Log the exception for further analysis
            \Log::error('Logout failed: ' . $e->getMessage());
            return response()->json(['message' => 'Logout failed'], 500);
        }
    }
}