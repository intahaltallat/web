<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Pet;

use App\Models\Owner;

use Illuminate\Support\Facades\Auth;

class PetController extends Controller
{

    public function addPet(Request $request){

        // dd("hi");
        // $request->validate([
        //     'type' => 'required|in:cat,dog,bird',
        //     'breed' => 'required|string',
        //     'nickname' => 'required|string',
        //     'age' => 'required|integer',
        //     'gender' => 'required|in:male,female',
        //     'group' => 'required|in:young,adult,baby,senior',
        //     'price' => 'required|numeric',
        //     'owner-msg' => 'required|string',
        //     'training' => 'required|in:basic-trained,well-trained,need-training',
        //     'vaccination' => 'required|in:Vaccinated,not-vaccinated',
        //     'behaviour' => 'required|in:energetic,playful,loving,gentle,protective',
        // ]);
 
        // $user_id=$user->id;
        // dd($user_id);

        // $user = Auth::user();
        // $id = Auth::id();
        // dd($user);

        $Oid = Owner::find(1)->id;
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

        $pet->save();
        return redirect('/add');
    }
}
