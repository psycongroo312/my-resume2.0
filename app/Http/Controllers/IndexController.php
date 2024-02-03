<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $items = config('menu.items');
        
        return view('index.main', ['menu'=>$items]);
    }
}


