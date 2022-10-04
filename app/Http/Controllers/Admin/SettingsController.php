<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings;
use Validator;
use Illuminate\Support\Facades\Cache;

class SettingsController extends Controller
{

    public function edit()
    {
        $setting = Settings::first();

        return view('admin.settings.edit' , compact('setting'));
    }


    public function update(Request $request)
    {

         $setting = Settings::first();

        $logo_in_db = NULL;
        if ($request->has('logo')) {
            $request->validate([
                'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            ]);

            $path = public_path() . '/uploads/settings';
            $logo = request('logo');
            $logo_name = time() . request('logo')->getClientOriginalName();
            $logo->move($path, $logo_name);
            $logo_in_db = '/uploads/settings/' . $logo_name;
        }
        $setting->title_en = $request->title_en;
        $setting->title_ar = $request->title_ar;
        $setting->email = $request->email;
        $setting->address = $request->address;
        $setting->phone = $request->phone;
        $setting->start_from = $request->start_from;
        $setting->end_at = $request->end_at;
        $setting->facebook_link = $request->facebook_link;
        $setting->twitter_link = $request->twitter_link;
        $setting->youtube_link = $request->youtube_link;
        $setting->linkedin_link = $request->linkedin_link;
        $setting->logo = $logo_in_db;

        $setting->save();
        Cache::forget('setting');

        return redirect()->back()->with('flash_message', ('Updated Successfully !'));
    }


}
