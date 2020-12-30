<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Validator;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }
    public function login(Request $request)
    {
        // Validate form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        $user = Admin::where('email',$request->email)->first();

        if($user != null && Hash::check($request->password,$user->password))
        {
            if($user->active != 1)
            {
                return redirect()->back()->withInput($request->only('email','remember'))->withMessage("Account is deactivated by Admin");
            }else
            {
                Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password,'active'=>1]);
                return redirect()->intended(route('admin.dashboard'));
            }
            
            
        }
        else
        {
            return redirect()->back()->withInput($request->only('email','remember'))->withMessage("Invalid Username or Passowrd");
        }
    }
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect()->route('admin.login');
        
    }
    public function changePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'oldpassword' => 'required',
            'newpassword' => 'required|confirmed|min:6',
        ]);
        if ($validator->passes()) {
            if(Hash::check($request->oldpassword, Auth::user()->password))
            {
                Auth::user()->update([
                    'password' => Hash::make($request->newpassword)
                ]);
                return response()->json(['status'=>true]);
            }
            else
            {
                $validator->getMessageBag()->add('password', 'Old Password doesn\'t matched');
                return response()->json(['status'=>false,'error'=>$validator->errors()->all()]);
            }
        }
        else
        {
            return response()->json(['status'=>false,'error'=>$validator->errors()->all()]);
        }
    }
}
