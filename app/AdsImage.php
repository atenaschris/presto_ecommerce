<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdsImage extends Model
{
    public function advertises()
    {
        return $this->belongsTo(Advertise::class);
    }
}