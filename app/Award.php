<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    //


    protected $fillable = [
        'dog_id', 'competition_id', 'user_id', 'award_type_id', 'date', 'comment',
    ];

    public function type()
    {
        return $this->belongsTo('App\AwardType', 'award_type_id');
    }

    public function dog()
    {
        return $this->belongsTo('App\Dog', 'dog_id');
    }

    public function competition()
    {
        return $this->hasOne('App\Competition', 'competition_id');
    }

    public function setDateAttribute($value)
    {
        $this->attributes['date'] = Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d');
    }

    public function getDateAttribute($value)
    {
        return date('d/m/Y', strtotime($this->attributes['date']));
    }
}