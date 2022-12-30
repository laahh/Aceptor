<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Flash;
use Laravel\Socialite\Facades\Socialite;
use Termwind\Components\Dd;

class AdminLoginController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:1',
        ]);


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('admin-dashboard');
        }
        // return redirect('admin-dashboard');
        // dd($credentials);
        return redirect('admin-dashboard');



        // return back()->with('loginError', 'Login Gagal');
    }
}
