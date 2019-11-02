<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Competition extends Model
{
    //
    public function awards()
    {
        return $this->belongsToMany('App\Award', 'competition_id');
    }

    //accessor na formatiovanie datumu vzdy
    public function getDateAttribute($value)
    {

        return date('d/m/Y', strtotime($this->attributes['date']));
    }
}