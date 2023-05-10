<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:admin');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function login_action(Request $request)
    {
        // Validate Data
        $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|string|max:255'
        ]);

        // Check Auth
        if(Auth::guard('admin')->attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            // Success
            return redirect()->route('admin.dashboard');
        } else {
            // Failed
            return redirect()->route('admin.login')->withErrors('بيانات الدخول غير صحيحة');
        }
    }
}
