<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class AdsImage extends Model
{
    public function advertise()
    {
        return $this->belongsTo('App\Advertise');
    }

    static public function getUrlByFilePath($filePath,$w = null,$h=null){

      if( !$w && !$h) {
          return Storage::url($filePath);
      }

      $path = dirname($filePath);
       
      $filename = basename($filePath);

      $file = "{$path}/crop{$w}x{$h}_{$filename}";

      return Storage::url($file);


    }

    public function getUrl($w = null, $h = null){
        return AdsImage::getUrlByFilePath($this->file, $w,$h);
    }
}
