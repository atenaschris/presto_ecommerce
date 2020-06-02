<?php

namespace App\Http\Controllers;

use App\AdsImage;
use App\Category;
use App\Advertise;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\AdvertiseRequest;
use App\Jobs\AddWatermarkToImage;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearchImage;
use App\Jobs\GoogleVisionRemoveFaces;
use App\Jobs\ResizeImage;
use Illuminate\Support\Facades\Storage;
use Monolog\Handler\PushoverHandler;
use Symfony\Component\Console\Input\Input;

class AdvertiseController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function submit(AdvertiseRequest $request){
        
        $user = Auth::user()->id;
        $advertise = new Advertise();
        $advertise->title = $request->input('title');
        $advertise->description = $request->input('description');
        $advertise->category_id = $request->input('category_id');
        $advertise->price = $request->input('price');   
        $advertise->user()->associate($user);
        $advertise->save();
        //immagini
        $uniquesecret = $request->input('uniquesecret');
        $images = session()->get("images.{$uniquesecret}",[]);
        $removedimages = session()->get("removedimages.{$uniquesecret}", []);
        $images = array_diff($images,$removedimages);

      
        
        
        foreach ($images as $image) {
            
            $i = new AdsImage();
            $filename = basename($image);
            $newfilename = "public/ads/{$advertise->id}/{$filename}";
            Storage::move($image, $newfilename);
            
            $i->file = $newfilename;
            $i->advertise_id = $advertise->id;
            $i->save();
                 GoogleVisionSafeSearchImage::withChain([
                new GoogleVisionLabelImage($i->id),
                new GoogleVisionRemoveFaces($i->id),
                new AddWatermarkToImage($i->id),
                new ResizeImage($newfilename,300,150),
                new ResizeImage($newfilename,150,150),
                new ResizeImage($newfilename,200,300)
            ]) ->dispatch($i->id);
        }
        File::deleteDirectory(storage_path("/app/public/temp/{$uniquesecret}"));
        
        
        
        // $advertise = Advertise::create($request->validated());
        return redirect(route('thank.you.ads'))->with('ads.created','ok');
    }
    
    public function add(Request $request){
        
        $uniquesecret = $request->old('uniquesecret',base_convert(sha1(uniqid(mt_rand())),16,36));
        
        return view('add_ads',compact('uniquesecret'));
        
    }
    
    
    public function uploadImages(Request $request)
    {
        $uniquesecret = $request->input('uniquesecret');
        $filename = $request->file('file')->store("public/temp/{$uniquesecret}");
        dispatch(new ResizeImage($filename,120,120));
        session()->push("images.{$uniquesecret}",$filename);   
        
        return response()->json([ 
            'id'=>$filename

            ]);
            
            
    }
        
        public function removeimages(Request $request)
        {
            $uniquesecret = $request->input('uniquesecret');
            $filename = $request->input('id');
            session()->push("removedimages.{$uniquesecret}",$filename);
            Storage::delete($filename);
            
            return response()->json('OK');
 
        }
        
        public function getImages(Request $request)
        {
            
            $uniquesecret = $request->input('uniquesecret');
            $images = session()->get("images.{$uniquesecret}",[]);
            
            $removedimages = session()->get("removedimages.{$uniquesecret}", []);
            $images = array_diff($images,$removedimages);
            $data = []; 
            foreach ($images as $image ) {
                $data[] = [

                    'id'=>$image,
                    'src'=> AdsImage::getUrlByFilePath($image, 120,120),
                    
                ];
                
            }
            return response()->json($data);
            
        }
        
        
        
        public function thankyouads()
        {
            return view('thank-you.thank_you_ads');
        }
        
        
        /**
        * Display a listing of the resource.
        *
        * @return \Illuminate\Http\Response
        */
        public function index()
        {
            //
        }
        
        /**
        * Show the form for creating a new resource.
        *
        * @return \Illuminate\Http\Response
        */
        public function create()
        {
            //
        }
        
        /**
        * Store a newly created resource in storage.
        *
        * @param  \Illuminate\Http\Request  $request
        * @return \Illuminate\Http\Response
        */
        public function store(Request $request)
        {
            //
        }
        
        /**
        * Display the specified resource.
        *
        * @param  \App\Advertise  $advertise
        * @return \Illuminate\Http\Response
        */
        public function show(Advertise $advertise)
        {
            //
        }
        
        /**
        * Show the form for editing the specified resource.
        *
        * @param  \App\Advertise  $advertise
        * @return \Illuminate\Http\Response
        */
        public function edit(Advertise $advertise)
        {
            //
        }
        
        /**
        * Update the specified resource in storage.
        *
        * @param  \Illuminate\Http\Request  $request
        * @param  \App\Advertise  $advertise
        * @return \Illuminate\Http\Response
        */
        public function update(Request $request, Advertise $advertise)
        {
            //
        }
        
        /**
        * Remove the specified resource from storage.
        *
        * @param  \App\Advertise  $advertise
        * @return \Illuminate\Http\Response
        */
        public function destroy(Advertise $advertise)
        {
            //
        }
    }
    