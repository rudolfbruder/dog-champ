<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    //
    public function type()
    {
        return $this->belongsTo('App\AwardType', 'award_type_id');
    }
}