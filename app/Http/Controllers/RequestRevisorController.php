<?php

namespace App\Http\Controllers;

use App\Mail\RevisorMail;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\RevisorRequest;

class RequestRevisorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function revisor_request(){

        return view('revisor_request');
    }

    public function revisor_submit(RevisorRequest $request){
        
        $name = Auth::user()->name;
        $email = Auth::user()->email;
        $presentation = $request->input('presentation');
        $description = $request->input('description');
        $revisor = compact('name','email','presentation','description');
        Mail::to('admin@presto.it')->send(new RevisorMail($revisor));
        Auth::user()->revisor_request += 1;
        Auth::user()->save();
        return redirect(route('homepage'))->with('revisor.request.submit','request successful');
    }


}

