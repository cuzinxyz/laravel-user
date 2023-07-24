<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function auth(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/admin');
        } else {
            $request->session()->flash('error', 'Sai tài khoản hoặc mật khẩu!');
            return redirect('/login');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login')
            ->with('success', 'Logout successfully');
    }
}
