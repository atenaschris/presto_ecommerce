<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdsImage extends Model
{
    public function advertise()
    {
        return $this->belongsTo('App\Advertise');
    }
}
