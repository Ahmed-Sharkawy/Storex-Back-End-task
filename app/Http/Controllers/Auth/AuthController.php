<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginView()
    {
        return view('Auth.login');
    }

    public function login(Request $request)
    {
        if (! Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('login.view')->with('error', 'not valid');
        }

        return redirect()->route('home');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

}
