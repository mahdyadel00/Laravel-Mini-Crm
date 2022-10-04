<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;


class BannerController extends Controller
{
   
    public function index()
    {
        $banners = Banner::paginate(20);
        return view('admin.banners.index', compact('banners'));
    }


    public function create()
    {
        return view('admin.banners.create');
    }
    public function store(Request $request)
    {
        $request->validate([

            'title_en' => 'required',
            'title_ar' => 'required',
            'description_en' => 'required',
            'description_ar' => 'required',
        ]);
        $image_in_db = NULL;
        if( $request->has('image') )
        {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            ]);

            $path = public_path().'/uploads/banners';
            $image = request('image');
            $image_name = time().request('image')->getClientOriginalName();
            $image->move($path , $image_name);
            $image_in_db = '/uploads/banners/'.$image_name;
        }

        $banners = Banner::create([

            'title_en'  => $request->title_en,
            'title_ar'  => $request->title_ar,
            'description_en'  => $request->description_en,
            'description_ar'  => $request->description_ar,
            'image'  => $image_in_db,

        ]);
        return redirect()->route('admin.banners.index')->with('Successfully' , 'Banner Added Successfully');
    }

    public function show($id)
    {
    }


    public function edit($id)
    {
        $banner = Banner::find($id);
        return view('admin.banners.edit', compact('banner'));
    }


    public function update(Request $request, $id)
    {

        $banner = Banner::find($id);

        $this->validate($request, [
            'title_en' => 'filled',
            'title_ar' => 'filled',
            'description_en' => 'filled',
            'description_ar' => 'filled',

        ]);
        $image_in_db = NULL;
        if ($request->has('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            ]);

            $path = public_path() . '/uploads/products';
            $image = request('image');
            $image_name = time() . request('image')->getClientOriginalName();
            $image->move($path, $image_name);
            $image_in_db = '/uploads/products/' . $image_name;
        }


        $banner->update([
            'title_en' => $request->title_en,
            'title_ar' => $request->title_ar,
            'description_en' => $request->description_en,
            'description_ar' => $request->description_ar,
            'image' => $image_in_db,
        ]);

        return redirect()->route('admin.banners.index')->with('flash_message', 'Banner Updated successfully !');
    }

    public function delete($id)
    {
        $banner = Banner::where('id' , $id)->first();
        $banner->delete();
        return back();
        flash()->success("Banner deleted successfully");

    }
}
