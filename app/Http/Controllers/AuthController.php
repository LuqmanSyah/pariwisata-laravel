<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string|min:4',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard.index');
        } else {
            return back()->withErrors(['username' => 'Invalid username or password']);
        }
    }
}
