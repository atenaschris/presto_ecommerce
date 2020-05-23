<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Advertise extends Model
{
    use SoftDeletes;

    protected $fillable = ["title","description","category_id","price","img"];
    

    public function category(){

        return $this->belongsTo('App\Category');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    static public function toBeRevisionedCount(){

        return Advertise::where('is_accepted',null)->count();
    }

    static public function adsCount(){

        return Advertise::all()->count();
    }


}
