<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginController extends Controller
{


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function viewRegister()
    {
        return view('register');
    }

    public function Register(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'badge' =>'required|unique:user_ad',
            'password' =>'required|min:6|confirmed'
        ]);
        User::create([
            'name' => $request->name,
            'badge' => $request->badge,
            'password' => bcrypt($request->password)
        ]);

        return redirect()->back();
    }

    public function viewLogin(Request $request)
    {

        return view('login');
    }

    public function postLogin(Request $request)
    {
        if(!Auth::attempt(['badge' => $request->badge, 'password' => $request->password])){
            return redirect()->back();
        }

        if (Auth::user()->role == "USER") {
            return redirect("/datadiri");
        }

        if (Auth::user()->role == "ADMIN") {
            return redirect()->route('List_Ex.index');
        }
        
    }

    public function logout()
    {
        Auth::logout();
        return view('/login');
    }
}
