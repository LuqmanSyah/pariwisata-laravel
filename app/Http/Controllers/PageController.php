<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function destination()
    {
        return view('pages.destination.index');
    }

    public function gallery()
    {
        return view('pages.gallery.index');
    }

    public function login()
    {
        return view('pages.auth.login');
    }

    public function dashboard()
    {
        return view('pages.dashboard.index');
    }
}
