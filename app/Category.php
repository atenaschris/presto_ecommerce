<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function advertise(){
        return $this->hasMany('App\Advertise');
    }
}
