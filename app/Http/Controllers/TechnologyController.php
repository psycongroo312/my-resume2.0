<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Technology;

class TechnologyController extends Controller
{

    public function index()
    {
        $technologies = Technology::all(); 

        return view('index.main', compact('technologies'));
}

}