<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function index(){
        return view('brands.index');
    }
}
