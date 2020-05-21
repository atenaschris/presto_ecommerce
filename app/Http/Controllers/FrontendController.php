<?php

namespace App\Http\Controllers;

use App\Advertise;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function homepage(){

        // $last_ads = DB::table('advertises')->latest()->take(5)->get();

       $ads = Advertise::where('is_accepted', true)->orderBy('id','desc')->withTrashed()->take(5)->get();
        // $ads = Advertise::all();
        
        return view('homepage',compact('ads'));
        
    }

    public function ad_details($id){
        $ad = Advertise::find($id);
        return view('ad_details',compact('ad'));
    }




}
