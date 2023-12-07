<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Gallery;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function home()
    {
        $image = Setting::first()->parallax_image;
        $destination = Destination::latest()->take(4)->get();
        $gallery = Gallery::latest()->take(4)->get();
        $mostViewedDestination = Destination::orderBy('most_viewed', 'desc')->take(4)->get();

        return view('pages.home', compact('destination', 'gallery', 'mostViewedDestination', 'image'));
    }

    public function destination()
    {
        $destination = Destination::latest()->get();

        return view('pages.destination.index', compact('destination'));
    }

    public function showDestination($slug)
    {
        $destination = Destination::where('slug', $slug)->first();
        $destination->most_viewed += 1;
        $destination->update();

        return view('pages.destination.show', compact('destination'));
    }

    public function gallery()
    {
        $gallery = Gallery::latest()->get();

        return view('pages.gallery.index', compact('gallery'));
    }

    public function showGallery($slug)
    {
        $gallery = Gallery::where('slug', $slug)->first();

        return view('pages.gallery.show', compact('gallery'));
    }

    public function login()
    {
        if (Auth::check()) {
            return back();
        }

        return view('pages.auth.login');
    }

    public function dashboard()
    {
        $destination = Destination::count();
        $gallery = Gallery::count();

        return view('pages.dashboard.index', compact('gallery', 'destination'));
    }
}
