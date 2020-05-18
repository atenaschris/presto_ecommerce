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



}
