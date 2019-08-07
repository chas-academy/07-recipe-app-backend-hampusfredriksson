<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Recipe extends Model
{

    // _ Bind the recipe to user! 
    // public function User()
    // {
    //     return $this->belongsTo(User::class);
    // }
}
