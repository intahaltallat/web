<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;
    
    #protected $table = "pets";
    protected $table = "pets";
    public $timestamps = false;

    protected $fillable = ['owner_id', 'type', 'breed', 'nickname', 'age', 'gender', 'group', 'price', 'owner_msg', 'training', 'vaccination', 'behaviour','image_path'];

    public function owner(){
        // return $this->belongsTo('App\Owner', 'owner_id');
        return $this->belongsTo(Owner::class);
    }

}

