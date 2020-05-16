<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Advertise extends Model
{
    protected $fillable = ["title","description","category_id","price","img"];
    

    public function category(){

        return $this->belongsTo('App\Category');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
