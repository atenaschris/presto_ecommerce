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
use Google\Cloud\Vision\V1\ImageAnnotatorClient;

class GoogleVisionRemoveFaces implements ShouldQueue
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
        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . base_path('presto-fruttariani-google-vision.json'));
        $imageAnnotator=new ImageAnnotatorClient();
        $response=$imageAnnotator->faceDetection($image);
        $faces=$response->getFaceAnnotations();

        foreach ($faces as $face) {
           $vertices=$face->getBoundingPoly()->getVertices();
          
           $bounds=[];
           foreach ($vertices as $vertex) {
               $bounds[]=[$vertex->getX(),$vertex->getY()];
           }
           
           $w=$bounds[2][0] - $bounds[0][0];
           $h=$bounds[2][1] - $bounds[0][1];
           $image=Image::load($srcPath);
           $image->watermark(base_path('resources/img/chris_smile.png'))
           ->watermarkPosition('top-left')
           ->watermarkPadding ($bounds[0][0], $bounds[0][1])
           ->watermarkWidth($w, Manipulations::UNIT_PIXELS)
           ->watermarkHeight($h, Manipulations::UNIT_PIXELS)
           ->watermarkFit(Manipulations::FIT_STRETCH);

           $image->save($srcPath);
          
        }
    }
}
