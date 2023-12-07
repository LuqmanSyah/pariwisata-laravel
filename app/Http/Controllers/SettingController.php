<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

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
        ]);

        $validatedData['site_name'] = ucfirst($request->site_name);

        Setting::first()->update($validatedData);

        return back();
    }
}
