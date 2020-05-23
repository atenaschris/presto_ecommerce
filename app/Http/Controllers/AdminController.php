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
        return view('dashboard.admin.dashboard_admin');
    }

    public function allads()
    {
        $all_ads = Advertise::withTrashed()->paginate(10);

        return view('dashboard.admin.admin_all_ads', compact('all_ads'));
    }

    public function allusers()
    {
        $all_users = User::where('roles', '<', '2')->orderBy('roles','desc')->paginate(10);

        return view('dashboard.admin.admin_all_users',compact('all_users'));
    }
    public function allrequest()
    {
          $all_users = User::where('revisor_request', '>', '0')->get();
         

        return view('dashboard.admin.admin_all_requests',compact('all_users'));
    }

    public function accepted($id)
    {
        return $this->setRoles($id, 1);
    }
    
    public function rejected($id)
    {
        return $this->setRoles($id, 0);
    }
    
    private function setRoles($id, $value)
    {
        $user = User::find($id);
        $user->roles = $value;
        $user->revisor_request=0;
        $user->save();
        return redirect(route('admin.all.request'));
    }

    public function revokedPermission($id)
    {
        return $this->revoked($id, 0);
    }
    private function revoked($id, $value)
    {
        $user = User::find($id);
        $user->roles = $value;
        
        $user->save();
        return redirect(route('admin.all.users'));
    }
}

