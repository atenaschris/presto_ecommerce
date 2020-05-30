<?php

namespace App\Jobs;

use App\AdsImage;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class GoogleVisionSafeSearchImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $ads_image_id;

    public function __construct($_ads_image_id)
    {
        $this->ads_image_id = $_ads_image_id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $i = AdsImage::find($this->ads_image_id);
        if (!$i) {
            return;
        }
        $image = file_get_contents(storage_path('/app/' . $i->file));
        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . base_path('presto-fruttariani-google-vision.json'));

        $imageAnnotator = new ImageAnnotatorClient();
        $response = $imageAnnotator->safeSearchDetection($image);
        $imageAnnotator->close();
        $safe = $response->getSafeSearchAnnotation();

        $adult = $safe->getAdult();
        $spoof =$safe->getSpoof();
        $medical =$safe->getMedical();
        $violence = $safe->getViolence();
        $racy = $safe->getRacy();

       // echo json_encode([$adult, $spoof, $medical, $violence, $racy]);

        $likelyHoodName = ['0', '20', '40', '60', '80', '100'];
        $i->adult = $likelyHoodName[$adult];
        $i->spoof = $likelyHoodName[$spoof];
        $i->medical = $likelyHoodName[$medical];
        $i->violence = $likelyHoodName[$violence];
        $i->racy = $likelyHoodName[$racy];

        $i->save();
    }
}
