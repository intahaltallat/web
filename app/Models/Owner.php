<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;
    #protected $table = "owners";
    public $timestamps = false;

    protected $fillable = ['name', 'email', 'password'];

    public function pets()
    {
        // return $this->hasMany('App\Pet', 'owner_id', 'id');
        return $this->hasMany(Pet::class);
    }

    
}
