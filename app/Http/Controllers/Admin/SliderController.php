<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::paginate(20);
        return view('admin.sliders.index', compact('sliders'));
    }


    public function create()
    {
        return view('admin.sliders.create');
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

            $path = public_path().'/uploads/sliders';
            $image = request('image');
            $image_name = time().request('image')->getClientOriginalName();
            $image->move($path , $image_name);
            $image_in_db = '/uploads/sliders/'.$image_name;
        }

        $sliders = Slider::create([

            'title_en'  => $request->title_en,
            'title_ar'  => $request->title_ar,
            'description_en'  => $request->description_en,
            'description_ar'  => $request->description_ar,
            'image'  => $image_in_db,

        ]);
        return redirect()->route('admin.sliders.index')->with('Successfully' , 'Slider Added Successfully');
    }

    public function show($id)
    {
    }


    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('admin.sliders.edit', compact('slider'));

    }


    public function update(Request $request, $id)
    {

        $slider = Slider::find($id);

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

            $path = public_path() . '/uploads/sliders';
            $image = request('image');
            $image_name = time() . request('image')->getClientOriginalName();
            $image->move($path, $image_name);
            $image_in_db = '/uploads/sliders/' . $image_name;
        }


        $slider->update([
            'title_en' => $request->title_en,
            'title_ar' => $request->title_ar,
            'description_en' => $request->description_en,
            'description_ar' => $request->description_ar,
            'image' => $image_in_db,
        ]);

        return redirect()->route('admin.sliders.index')->with('flash_message', 'Slider Updated successfully !');
    }

    public function delete($id)
    {
        $slider = Slider::where('id' , $id)->first();
        $slider->delete();
        return back();
        flash()->success("Slider deleted successfully");

    }
}
