<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Race;

class Dog extends Model
{
    //
    use Sluggable;

    public function sluggable()
    {

        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    //replaces id field in route model binding
    public function getRouteKeyName()
    {
        return 'slug';
    }
    protected $fillable = ['name', 'nick_name', 'place_of_birth', 'about', 'gender', 'race_id', 'date_of_birth', 'user_id'];

    public function owner()
    {
        return $this->hasOne(User::class);
    }

    public function race()
    {
        return $this->belongsTo(Race::class);
    }
}