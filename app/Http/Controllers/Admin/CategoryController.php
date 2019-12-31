<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        return view('backend.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.categories.create');
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
        $request->validate([
            'name' => 'required',
        ]);

        Category::create([
            'name' => request('name'),
        ]);

        return back()->with('status', 'Category is successfully created!!!');
    }

    public function edit(Request $request) {

        $id = request('id');
        $category = Category::whereId($id)->firstOrFail();

        return $category;

        // return resopnse()->json([
        //     'name' => $category->name,
        // ]);

    }

    public function update(Request $request)
    {
        // dd($request);
        $request->validate([
            'id' => 'required',
            'name' => 'required',
        ]);
        $id = request('id');
        
        $category = Category::whereId($id)->firstOrFail();

        $category->name = request('name');
        $category->save();

        return back()->with('status', 'Category is successfully created!!!');
    }

    public function destroy(Request $request) {
        // dd($request);
        $id = request('id');
        $category = Category::whereId($id)->firstOrFail();
        $category->delete();

        return back();
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Request $request)
    // {
    //     // dd($request);
    //     // $category = Category::whereId($id)->firstOrFail();

    //     // return redirect('admin/category');
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }

    public function get(Request $request) {
        dd($request);
    }
}