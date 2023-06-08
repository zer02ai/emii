<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login_page()
    {
        if(Auth::user()){
            if(Auth::user()->role === 'admin'){
                return redirect(route('admin.dashboard'));
            }
        }
        return view('admin.login');
    }

    public function login(LoginRequest $request)
    {
        if(Auth::user()){
            if(Auth::user()->role === 'admin'){
                return redirect(route('admin.dashboard'));
            }
        }

        $request->authenticate();

        $request->session()->regenerate();

        return redirect(route('admin.dashboard'));
    }

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(route('admin.login_page2'));
    }

    public function dashboard(Request $request)
    {
        $page_title = 'Dashboard';
        return view('admin.dashboard',compact('page_title'));
    }

    public function profile()
    {
        $page_title = 'Profile';
        return view('admin.profile',compact('page_title'));
    }
}
