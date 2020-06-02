<?php

namespace App\Http\Controllers;

use App\User;
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
        $user = Auth::user();
        return view('dashboard.user.dashboard_user',compact('user'));
    }
    public function ads()
    {  
        $user = Auth::user();
        $ads=Advertise::where('user_id','=', Auth::user()->id)->get();
     
        return view ('dashboard.user.dashboard_user_ads', compact('ads','user'));    
    }

    public function edit(User $user)
    {   
        $user = Auth::user();
        return view('dashboard.user.dashboard_edit_profile', compact('user'));
    }

    public function update(User $user)
    { 
        if(Auth::user()->email == request()) {
        
       $user->name = request();
      
        $user->save();

        return back();
        
    }
    else{
        

        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));

        $user->save();

        return back();  
        
    }
    }

    // public function update_avatar(Request $request){


    //     $request->validate([
    //         'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ]);

    //     $user = Auth::user();

    //     $avatarName = $user->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();

    //     $request->avatar->storeAs('avatars',$avatarName);

    //     $user->avatar = $avatarName;
    //     $user->save();

    //     return back()->with('success','You have successfully upload image.');

    // }

}
    