<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Recipe extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'edamam_id', 'json_data'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
