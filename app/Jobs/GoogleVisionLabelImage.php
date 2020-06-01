<?php

namespace App\Jobs;

use App\AdsImage;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;

class GoogleVisionLabelImage implements ShouldQueue
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
        $response = $imageAnnotator->labelDetection($image);
        $labels = $response->getLabelAnnotations();
        if ($labels) {
            $result = [];
            foreach ($labels as $label) {
                $result[] = $label->getDescription();
            }
            /* echo json_encode($result); */
            $i->labels = $result;
            $i->save();
        }
        $imageAnnotator->close();
    }

}
