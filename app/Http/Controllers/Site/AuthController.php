<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('site.auth.register');
    }
    public function registerStore(Request $request)
    {
        $request->validate([
            'name'=>'required|min:5',
            'email'=>'required|email:rfc,dns',
            'password' => 'required|min:8'
        ]);
        $user = User::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'password' =>Hash::make($request->password),
            'active' =>1,
        ]);
        Auth::login($user);
        return redirect()->route('home');
    }
    public function login()
    {
        return view('site.auth.login');
    }
    public function loginStore(Request $request)
    {
        $request->validate([
            'email'=>'required|email:rfc,dns',
            'password' => 'required|min:8'
        ]);
        if(Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password,'active'=>1]))
        {
            return redirect()->intended(route('home'));
        }
        else
        {
            return redirect()->back()->withInput($request->only('email','remember'))->withMessage("Invalid Username or Passowrd");
        }
    }
    public function logout(Request $request)
    {
        Auth::guard('user')->logout();
        $request->session()->invalidate();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect()->route('home');
        
    }
}
