<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    
    public function create()
    {
        return view('users.create');
    }

    public function show(User $user)
    {
        if(Auth::check()) {
            return view('users.show',compact('user'));
        } else {
            return redirect()->route('login');
        }
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6'
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        Auth::login($user);
        session()->flash('success','恭喜加入联盟！');
        return redirect()->route('users.show',[$user]);
    }

}
