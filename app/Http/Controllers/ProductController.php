<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.read', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        // validation
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'brand' => 'required',
            'images' => 'required',
            'price' => 'required'
        ]);

        // dd($request);

        // file upload
        if($request->hasfile('images')) {
            $images = $request->file('images');
            $upload_path = public_path().'/storage/images/';
            $name = $images->getClientOriginalName();
            $images->move($upload_path, $name);
            $path = '/storage/images/'.$name; 
        }
        else {
            $path = "";
        }

        Product::create([
            "title" => request('title'),
            "description" => request('description'),
            "cat_id" => request('category'),
            "brand_id" => request('brand'),
            "images" => $path,
            "price" => request('price')
        ]);

        return back()->with('status', "Product is created successfully!!!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
