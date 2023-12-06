<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;


class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinations = Destination::latest()->get();

        return view('pages.dashboard.destination.index', compact('destinations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.destination.create');
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
            'price' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'address' => 'required',
            'description' => 'required'
        ]);

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('image/destination'), $imageName);
        $validatedData['image'] = 'image/destination/' . $imageName;

        $validatedData['user_id'] = Auth::user()->id;
        $validatedData['slug'] = Str::slug($validatedData['name']) . '-' . Str::random(10);

        Destination::create($validatedData);

        return redirect()->route('dashboard.destination.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $destination = Destination::where('slug', $slug)->first();

        return view('pages.destination.show', compact('destination'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $destination = Destination::where('slug', $slug)->first();

        return view('pages.dashboard.destination.edit', compact('destination'));
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
        $destination = Destination::where('slug', $slug)->first();

        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'address' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image/destination'), $imageName);

            if ($request->oldImage) {
                $oldImagePath = public_path($request->oldImage);
                if (File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }
            }

            $validatedData['image'] = 'image/destination/' . $imageName;
        }
        $validatedData['user_id'] = Auth::user()->id;
        $validatedData['slug'] = Str::slug($validatedData['name']) . '-' . Str::random(10);

        $destination->update($validatedData);

        return redirect()->route('dashboard.destination.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $destination = Destination::where('slug', $slug)->first();

        if ($destination->image) {
            $delImage = public_path($destination->image);
            if (File::exists($delImage)) {
                File::delete($delImage);
            }
        }

        $destination->delete();

        return back();
    }
}
