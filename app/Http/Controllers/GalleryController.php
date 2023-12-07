<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::latest()->get();

        return view('pages.dashboard.gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'address' => 'required'
        ]);

        $validatedData['user_id'] = Auth::user()->id;
        $validatedData['slug'] = Str::slug($validatedData['name']) . '-' . Str::random(10);
    

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('image/gallery'), $imageName);
        $validatedData['image'] = 'image/gallery/' . $imageName;

        Gallery::create($validatedData);

        return redirect()->route('dashboard.gallery.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $gallery = Gallery::where('slug', $slug)->first();

        return view('pages.gallery.show', compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $gallery = Gallery::where('slug', $slug)->first();

        return view('pages.dashboard.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $gallery = Gallery::where('slug', $slug)->first();

        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image/gallery'), $imageName);

            if (isset($request->oldImage)) {
                $oldImagePath = public_path($request->oldImage);
                if (File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }
            }

            $validatedData['image'] = 'image/gallery/' . $imageName;
        }

        $gallery->update($validatedData);

        return redirect()->route('dashboard.gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $gallery = Gallery::where('slug', $slug)->first();

        if ($gallery->image) {
            $delPath = public_path($gallery->image);
            if (File::exists($delPath)) {
                File::delete($delPath);
            }
        }

        $gallery->delete();

        return back();
    }
}
