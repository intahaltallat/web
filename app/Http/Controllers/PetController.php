<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\DB;

use App\Models\Pet;

use App\Models\Owner;

use Illuminate\Support\Facades\Auth;

class PetController extends Controller
{
    public function addPet(Request $request){

        $userId = Session::get('id');
        $Oid = Owner::find($userId)->id;
        // dd($user);

        $pet = new Pet;
        $pet->owner_id = $Oid;
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
        // $pet->image_path = $request->file('fileInput');
        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     return "string";
        //     $path = $image->store('uploads/pets', 'public');
        //     $pet->image_path = $path;
        // }
        // if ($request->hasFile('fileInput')) {
        //     $uploadedFile = $request->file('fileInput');
    
        //     // Store the uploaded file to a specific location in your storage
        //     $storedFilePath = $uploadedFile->store('images', 'public'); // 'images' is the directory name
    
        //     // Save the $storedFilePath to the database for later retrieval
        //     // $pet = new Pet();
        //     $pet->image_path = $storedFilePath;
        //     // $pet->save();
    
        //     // return 'File has been uploaded and stored successfully.';

        if ($request->hasFile('fileInput')) {
            $uploadedFile = $request->file('fileInput');
            
            $uploadedFile->move(public_path('images'), $uploadedFile->getClientOriginalName());
    
            // Store the uploaded file with its original file name and extension in the public/images directory
    
            // Save the stored file path to the database for later retrieval
            $pet->image_path = $uploadedFile->getClientOriginalName(); // Store the path wit

        $pet->save();
        return redirect('/add');
        }

        
    }

    public function deletepet(Request $request){
        $id = $request->input('id');
        $pet = new Pet;
        $pet = Pet::find($id);

        if($pet){
            $pet->delete();
            return redirect('/index');
        }
        else{
            return "Pet not found";
        }
    }

    public function yourPets(Request $request){
        $userId = Session::get('id');
        $data = Pet::where('owner_id',$userId)->get();
        return view('yourPets',['data'=>$data]);
    }

    public function showAllPets(Request $request){
        $data = Pet::all();
        return view('showAllPets',['data'=>$data]);
    }

    public function index(){
        $data = Pet::all();
        return view('index',['data'=>$data]);
    }
    
    public function buyPet(Request $request){
        // $petId = $request->query('id');
        // $data = Pet::where('id',$petId)->get();
        // return view('buyPet', ['data' => $data]);

        $petId = $request->query('id');
        $data = Pet::with('owner')->find($petId);
        return view('buyPet', compact('data'));

        // $petId = $request->query('id');
        // $data = Pet::find($petId);
        // return view('buyPet', compact('data'));
    }
    public function searchPet($term)
    {
        $similarProducts = Pet::where('nickname', 'LIKE', "%$term%")->get();

        return $similarProducts;
    }

}