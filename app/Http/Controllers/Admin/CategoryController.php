<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

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
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $count = Category::get()->count();
        return view('admin.categories.create', compact('count'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        if($request->file("image")){
            $request->validate(
                [
                    'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:7048',
                ]
            );
            $path = $request->file("image")->store('public/categories/image');
        }else{
            $path=NULL;
        };
        $params = $request->all();
        $params['image'] = $path;
        $category = Category::create($params);
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('admin.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $params = $request->all();
        if($request['image']){
            $request->validate(
                [
                    'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:7048',
                ]
            );
            $path = $request->file("image")->store('public/categories/image');
            $params['image'] = $path;
            Storage::delete($category->image);
        }
        $category->update($params);
        return redirect()->route('categories.show',$category);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
       $category->products()->delete();
       Storage::delete($category->image);
       $category->delete();
        return redirect()->route('categories.index');
    }
}
