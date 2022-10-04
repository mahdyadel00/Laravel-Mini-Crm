<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AuthImage;
use Validator;
use Illuminate\Support\Facades\Cache;

class AuthController extends Controller
{

    public function edit()
    {
        $auth = AuthImage::first();

        return view('admin.auth.edit' , compact('auth'));
    }


    public function update(Request $request)
    {

         $auth = AuthImage::first();

        $logo_in_db = NULL;
        if ($request->has('login_image')) {
            $request->validate([
                'login_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            ]);

            $path = public_path() . '/uploads/auth';
            $logo = request('login_image');
            $login_image = time() . request('login_image')->getClientOriginalName();
            $logo->move($path, $login_image);
            $logo_in_db = '/uploads/auth/' . $login_image;
        }
        $image_in_db = NULL;
        if ($request->has('contact_us_image')) {
            $request->validate([
                'contact_us_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            ]);

            $path = public_path() . '/uploads/auth';
            $image = request('contact_us_image');
            $contact_us_image = time() . request('contact_us_image')->getClientOriginalName();
            $image->move($path, $contact_us_image);
            $image_in_db = '/uploads/auth/' . $contact_us_image;
        }

        $register_in_db = NULL;
        if ($request->has('register_image')) {
            $request->validate([
                'register_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            ]);

            $path = public_path() . '/uploads/auth';
            $logo = request('register_image');
            $register_image = time() . request('register_image')->getClientOriginalName();
            $logo->move($path, $register_image);
            $register_in_db = '/uploads/auth/' . $register_image;
        }

        $auth->login_image = $logo_in_db;
        $auth->register_image = $register_in_db;
        $auth->contact_us_image = $image_in_db;

        $auth->save();
        Cache::forget('auth');

        return redirect()->back()->with('flash_message', ('Updated Successfully !'));
    }


}
