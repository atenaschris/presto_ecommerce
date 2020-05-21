<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestRevisorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function revisor_request(){

        return view('revisor_request');
    }
}
