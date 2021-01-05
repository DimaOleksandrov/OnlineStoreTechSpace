<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CatalogController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('catalog.index', compact('categories'));
    }
}
