<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Image;
use Illuminate\Http\File;
use App\Http\Controllers\Admin\ImageController;
use Illuminate\Support\Facades\Storage;
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
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->file("firstImage")){
            $path = $request->file("firstImage")->store('public/products/image');
        }else{
            $path=NULL;
        };
        $params = $request->all();
        $params['image'] = $path;
        $params['code'] = str_replace(' ', '_',$request->title);
        $product = Product::create($params);
        if($request->file("newImages")){
            $this->createImages($request,$product);
        }
        return redirect()->route('products.show', $product->id);
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return redirect()->route('prod', [$product->category->code ,$product->code]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product, Image $image)
    {
        $params = $request->all();
        if($request['firstImage']){
            $path = $request->file("firstImage")->store('public/products/image');
            $params['image'] = $path;
            Storage::delete($product->image);
        }
        if($request->file("newImages")){
            $this->createImages($request,$product);
        }
        $product->update($params);
        return view('admin.products.edit', compact('product'));
    }


    public function createImages($request,$product){
            foreach($request->newImages as $image){
                $path = $image->store('public/categories/image');
                $params=[ 
                    'img' => $path,
                    'product_id' => $product->id,
                ];
                $image = Image::create($params); 
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->images()->delete();
        Storage::delete($product->image);
        $product->delete();
        return redirect()->route('products.index');
    }
}
