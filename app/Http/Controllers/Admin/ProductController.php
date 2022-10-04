<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{

    public function index()
    {
        $products = Product::with([
            'category',
            'user',
        ])->paginate(20);
        return view('admin.products.index', compact('products'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function delete($id)
    {
        $product = Product::where('id' , $id)->first();

        $product->delete();

        return redirect()->back()->with(['success' => 'Deleted Successfully']);
    }
}
