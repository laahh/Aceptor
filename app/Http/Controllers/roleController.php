<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class roleController extends Controller
{
    public function index()
    {
        return view('role');
    }

    public function chooseRole(Request $request)
    {
        $user = $request->user();

        if ($request->role != 'pengguna' && $request->role != 'dokter') {
            return redirect()->back();
        } else {
            $user->assignRole($request->role);
            // dd($user->assignRole($request->role));
            return redirect()->intended('/apa-itu-tbc');
        }
    }
}
