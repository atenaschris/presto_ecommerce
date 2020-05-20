<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function __construct(){

        $this->middleware('auth.revisor');

    }

    public function revisorhome()
    {
        dd('ho accesso al middleware revisor');
    }
    
}
