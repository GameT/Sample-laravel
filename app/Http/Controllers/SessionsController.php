<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class SessionsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('guest',[
            'only' => ['create']
        ]);
    }
    
    public function create()
    {
        if(Auth::user()) {
            return redirect(route('users.show',[Auth::user()]));
        }
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        $credentials = $this->validate($request,[
            'email' => 'required|email|max:255',
            'password' => 'required|min:6'
        ]);
        if(Auth::attempt(['email'=>$request->email,'password'=> $request->password],$request->has('remember'))) {
            if (Auth::user()->activated) {
                session()->flash('success', '欢迎回来！');
                return redirect()->intended(route('users.show',[Auth::user()]));
            } else {
                session()->flash('warning', '您的账号尚未激活，请前往注册邮箱激活账号！');
                return redirect('/');
            }
        } else {
            session()->flash('danger','很抱歉，账号或密码错误！');
            return redirect()->back();
        }
    }

    public function destroy()
    {
        Auth::logout();
        session()->flash('success','您已成功退出！');
        return redirect('login');
    }

}
