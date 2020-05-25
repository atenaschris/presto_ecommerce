<?php

namespace App\Http\Controllers;

use App\Advertise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index ()
    {
        return view('dashboard.user.dashboard_user');
    }
    public function ads()
    {  
        $ads=Advertise::where('user_id','=', Auth::user()->id)->get();
     
        return view ('dashboard.user.dashboard_user_ads', compact('ads'));    
    }
}
    