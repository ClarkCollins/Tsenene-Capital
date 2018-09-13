<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function tracking(){
        return $this->hasMany('App\Tracking');
    }
}
