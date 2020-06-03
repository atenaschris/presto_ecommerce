<?php

namespace App\Http\Controllers;

use App\User;
use App\Advertise;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RevisorController extends Controller
{
    public function __construct(){
        
        $this->middleware('auth.revisor');

    }
    
    public function index()
    {
        $user = Auth::user();
        
        return view('dashboard.revisor.dashboard_revisor',compact('user'));
    }
    public function accepted($id)
    {
        return $this->setAccepted($id, true);
    }
    
    public function rejected($id)
    {
        return $this->setAccepted($id, false);
    }
    
    private function setAccepted($id, $value)
    {
        $ad = Advertise::find($id);
        $ad->is_accepted = $value;
        $ad->save();
        return redirect(route('revisor.to.be.revisioned.ads'));
    }
    
    public function undo_ads(){
        $user = Auth::user();
       $ads = Advertise::where('is_accepted' , "!=",  null)->get();
       
       return view('dashboard.revisor.dashboard_undo_ads', compact('ads','user'));
        
    }

    public function update_accepted($id)
    {
        return $this->updateStatus($id, true);
    }
    
    public function update_rejected($id)
    {
        return $this->updateStatus($id, false);
    }
    
    private function updateStatus($id, $value)
    {
        $ad = Advertise::find($id);
        $ad->is_accepted = $value;
        $ad->save();
        $ad->delete();
        
        return redirect(route('revisor.undo.ads'));
    }

    public function revisioning_Ads()
    {
        $user = Auth::user();
        $ads = Advertise::where('is_accepted', null)->orderBy('created_at', 'asc')->get();
       
        return view('dashboard.revisor.dashboard_revisor_ads', compact('ads','user')); 
    }

    public function edit(User $user)
    {   
        $user = Auth::user();
        return view('dashboard.revisor.dashboard_edit_profile', compact('user'));
    }

   

   
    
}
