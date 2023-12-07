<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'string',
            'password' => 'string',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard.index');
        } else {
            return back();
        }
    }
}
