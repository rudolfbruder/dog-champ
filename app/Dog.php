<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    //

    protected $fillable = ['name', 'nick_name', 'place_of_birth', 'about', 'gender', 'race_id', 'date_of_birth', 'user_id'];

    public function owner()
    {
        return $this->hasOne(User::class);
    }
}