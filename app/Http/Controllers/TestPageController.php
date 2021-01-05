<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestPageController extends Controller
{ 
    public function index(){
        return view('test.index');
    }
}
