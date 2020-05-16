<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function homepage(){

        $last_ads = DB::table('advertises')->latest()->take(5)->get();
      
        return view('homepage',compact('last_ads'));
        
    }

    public function add(){

        
        $categories = DB::table('categories')->select('id','name')->get();
        return view('add_ads',compact('categories'));
    }

    public function thankyouads()
    {
        return view('thank_you_ads');
    }

}
