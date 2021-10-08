<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('pages.content', compact('products'));
    }

    public function show(Product $product){

        return view('pages.detail', compact('product'));
    }
}
