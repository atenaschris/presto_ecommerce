<?php

namespace App\Http\Controllers;

use App\Advertise;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function homepage(){

        // $last_ads = DB::table('advertises')->latest()->take(5)->get();

       $ads = Advertise::where('is_accepted', true)->orderBy('id','desc')->withTrashed()->take(5)->get();
        // $ads = Advertise::all();
        $categories = Category::all();
       
        
        return view('public-views.homepage',compact('ads','categories'));
        
    }

    public function ad_details($id){
        $ad = Advertise::withTrashed()->find($id);
        if ($ad) {
            return view('public-views.ad_details',compact('ad'));
        } else {
            return redirect(route('homepage'));
        }
    }

    public function search(Request $request)
    {
        $q = $request->input('q');
        $searchadvertises = Advertise::search($q)->withTrashed()->where('is_accepted', true)->paginate(5);
        
        return view('public-views.search_results',compact('q','searchadvertises'));
    }

    public function locale($locale)
    {
        session()->put('locale',$locale);
        return redirect()->back();
    }
  
}