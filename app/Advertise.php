<?php

namespace App;


use Laravel\Scout\Searchable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Advertise extends Model
{
    use Searchable;
    use SoftDeletes;

    public $asYouType = true;

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        
        $array = [
            'id' => $this->id,
            'title' => $this->title ,
            'description' => $this->description ,
        ];
        
        // Customize array...

        return $array;
    }

    protected $fillable = ["title","description","category_id","price","img"];
    

    public function category(){

        return $this->belongsTo('App\Category');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    static public function toBeRevisionedCount(){

        return Advertise::where('is_accepted',null )->count();
    }

    static public function adsCount(){

        return Advertise::all()->count();
    }

    static public function userPublishedAdsCount(){

        return Advertise::where('user_id','=',Auth::user()->id)->count();
    }

    public function images()
    {
        return $this->hasMany(AdsImage::class);
    }


}
