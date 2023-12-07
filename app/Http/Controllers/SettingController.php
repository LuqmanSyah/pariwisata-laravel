<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::first();

        return view('pages.dashboard.setting.index', compact('setting'));
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'site_name' => 'string',
            'about' => 'string',
            'address' => 'string',
            'phone_number' => 'string',
            'email' => 'email',
            'parallax_image' => 'image|mimes:png,jpg,jpeg'
        ]);

        if ($request->hasFile('parallax_image')) {
            $image = $request->file('parallax_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image/parallax'),  $imageName);

            if ($request->oldImage) {
                $path = public_path($request->oldImage);
                if (File::exists($path)) {
                    File::delete($path);
                }
            }

            $validatedData['parallax_image'] = 'image/parallax/' . $imageName;
        }

        $validatedData['site_name'] = ucfirst($request->site_name);

        Setting::first()->update($validatedData);

        return back();
    }
}
