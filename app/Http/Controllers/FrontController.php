<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(Request $request) {

        $id = $request->id;
        if($id) {
            $products = Product::where('cat_id', $id)->get();
            
            // echo $products->count();
            // var_dump($products);
            $categories = Category::get();
            return view('frontend.index', compact('products', 'categories'));
        }
        else {
            $products = Product::get();
            $categories = Category::get();
            return view('frontend.index', compact('products', 'categories'));
        }
        // return view('frontend.index', compact('products', 'categories'));
    }

    public function show($id) {
        $product = Product::find($id);
        return view('frontend.show', compact('product'));
    }

    public function add(Request $request, $id) {
        $items = array();

        if($request->session()->has('items')) {
            $items = $request->session()->get('items');
            if(!in_array($id, $items)) {
                array_push($items, $id);
            }
        }
        else {
            array_push($items, $id);
        }

        // $request->session()->flush();

        $request->session()->put('items', $items);

        return back();
    }

    public function cart(Request $request) {
        $carts = $request->session()->get('items');

        $products = array();

        foreach($carts as $cart) {
            $product = Product::find($cart);
            
            array_push($products, $product);
        }

        // for($i=0; $i < count($carts); $i++) {
        //     $products = Product::find($carts[$i]);
        //     var_dump($product);

        // }

        return view('frontend.cart', compact('products'));
    }
}
