<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('front.index', compact('products'));
    }

    public function show($id) {
        $product = Product::find($id);
        return view('front.show', compact('product'));
    }
}
