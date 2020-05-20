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
        $ad = Advertise::where('is_accepted', null)->orderBy('created_at', 'asc')->first();

        return view('dashboard_revisor', compact('ad'));
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
}
