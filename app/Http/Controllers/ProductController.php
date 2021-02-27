<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\ProductImages;

class ProductController extends Controller
{ 
    public function index(Request $request, $categoryCode,$productName = null)
    {   
        $product = Product::where('code',$productName)->first();
        //$images = ProductImages::where('id', $product->id)->first();
        return view('product.index', ['product' => $product]);
    }
}
