<?php

namespace App\Http\Controllers;

use App\Advertise;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    public function index()
    {
        return view('dashboard_admin');
    }

    public function allads()
    {
        $all_ads = Advertise::withTrashed()->get();

        return view('admin_all_ads', compact('all_ads'));
    }

    public function allusers()
    {
        $all_users = User::where('roles', '<', '2')->get();

        return view('admin_all_users');
    }
}
