<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\Owner;
use App\Models\Pet;




class AdminController extends Controller
{
    public function loginsession_admin(Request $request){
        $name = $request->input('name');
        // dd($name);
    // $password =Hash::make($request->password);
        $user = Admin::where('name',$name)->first();

    if ($user){
            $id = $user->id;
            Session::put('name', $user->name);
            Session::put('id', $id);

            $value = Session::get('key');
            // echo($value);
             return view('/admin_index');
        }

        else{
            return "Admin not found";
        }
    }

    public function logoutUser(Request $request)
    {
        try {
            Auth::logout(); // Log the user out
            $request->session()->flush(); // Flush the session
            // return view('/index');
            return response()->json(['message' => 'Logout successful']);
        } 
        catch (\Exception $e) {
            // Log the exception for further analysis
            \Log::error('Logout failed: ' . $e->getMessage());
            return response()->json(['message' => 'Logout failed'], 500);
        }
    }

    public function delete_user(Request $request){
        $name = $request->input('name');
        $user = new Owner;
   //   $user = Owner::find($name);
      //  $name = $request->input('name');
        // $password =Hash::make($request->password);
       $user = Owner::where('name',$name)->first();

        if($user){
            $pets = Pet::where('owner_id',$user->id)->get();

            foreach($pets as $pet){
                $pet->delete();
            }

            $user->delete();
            return redirect('/admin_index')->with('success', 'User and associated pets deleted successfully.');
        }

        else{
            return "user not found";
        }
    }


    public function delete_pet(Request $request){
        $username = $request->input('username');
        $nickname = $request->input('nickname');

        $user = new Owner;
   //   $user = Owner::find($name);

      //  $name = $request->input('name');
        // $password =Hash::make($request->password);
       $user = Owner::where('name',$username)->first();

        if($user){
            $pet = new Pet;
            $pet = Pet::where('nickname',$nickname)->first();

            if($pet){
            $pet->delete();
            return view('/admin_index');
            } else{
                return "user not found";
            }
        }

        else{
            return "user not found";
        }
    }
    public function update_pet_new(Request $request){

        $usernameh = $request->input('usernameh');
        $nicknameh = $request->input('nicknameh');

        $pet = Pet::where('nickname',$nicknameh)->first();

        //    $pet->owner_id = $Oid;
        $pet->type = $request->input('type');
        $pet->breed = $request->input('breed');
        $pet->nickname = $request->input('nickname');
        $pet->age = $request->input('age');
        $pet->gender = $request->input('gender');
        $pet->group = $request->input('group');
        $pet->price = $request->input('price');
        $pet->owner_msg = $request->input('owner_msg', '');
        $pet->training = $request->input('training');
        $pet->vaccination = $request->input('vaccination');
        $pet->behaviour = $request->input('behaviour');

        if ($request->hasFile('fileInput')) {
            $uploadedFile = $request->file('fileInput');
    
            // Store the uploaded file with its original file name and extension in the public/images directory
            $storedFilePath = $uploadedFile->storeAs('public/images', $uploadedFile->getClientOriginalName());
    
            // Save the stored file path to the database for later retrieval
            $pet->image_path = str_replace('public/', '', $storedFilePath); // Store the path wit

        $pet->save();
        return redirect('/update_Pet');
        }

    }
    public function update_form(Request $request){
        $username = $request->input('username');
        $nickname = $request->input('nickname');

        return view('update_pet_form', compact('username','nickname'));

    }

    public function update_user(Request $request){

        $username = $request->input('username');
        return view('update_user_form',compact('username'));

    }

    
    public function update_user_form(Request $request){

        $usernameh = $request->input('usernameh');

        $user = Owner::where('name',$usernameh)->first();
        
        $user->name = $request->input('username');
        $user->email = $request->input('email');

        $user->save();
        return redirect('/update_user');

    }
}

