<?php

namespace App\Jobs;

use App\AdsImage;
use Spatie\Image\Image;
use Illuminate\Bus\Queueable;
use Spatie\Image\Manipulations;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class AddWatermarkToImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $ads_image_id;

    public function __construct($_ads_image_id)
    {
        $this->ads_image_id = $_ads_image_id;
    }

    public function handle()
    {
        $i = AdsImage::find($this->ads_image_id);
        if (!$i) {
            return;
        }
       
        $srcPath = storage_path('/app/' . $i->file);
        $image=file_get_contents($srcPath);
        $image=Image::load($srcPath);
        $image->watermark(base_path('resources/img/eggplant.png'))
           ->watermarkPosition('bottom-right')
           ->watermarkPadding (10, 10, Manipulations::UNIT_PERCENT)
           ->watermarkWidth(64,Manipulations::UNIT_PIXELS)
           ->watermarkHeight(64,Manipulations::UNIT_PIXELS);
        

           $image->save($srcPath);
          
    }
}
