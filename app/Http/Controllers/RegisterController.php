<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Flash;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('user.auth.registrasi');
    }

    public function store(Request $request)
    {
        $validateDate = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6',
        ]);

        $validateDate['password'] = bcrypt($validateDate['password']);

        User::create($validateDate);
        dd('oke');
        // $request->session()->flash('berhasil', 'Silahkan Login');

        return redirect('/login')->with('berhasil', 'Silahkan Login');
    }
}
