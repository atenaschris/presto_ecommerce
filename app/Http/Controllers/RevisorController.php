<?php

namespace App\Http\Controllers;

use App\Advertise;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function __construct(){
        
        $this->middleware('auth.revisor');
        
    }
    
    public function index()
    {
        $ads = Advertise::where('is_accepted', null)->orderBy('created_at', 'asc')->get();
        
        return view('dashboard_revisor', compact('ads'));
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
        return redirect(route('revisor.home'));
    }
    
    public function undo_ads(){
        
       $ads = Advertise::where('is_accepted' , "!=",  null)->get();
       
       return view('dashboard_undo_ads', compact('ads'));
        
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
    
}
