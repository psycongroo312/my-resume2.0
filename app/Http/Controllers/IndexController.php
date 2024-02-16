<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Technology;
use App\Services\MenuServiceInterface;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    
    private MenuServiceInterface $menuService;
    public function __construct(MenuServiceInterface $menuService) 
    {
        $this->menuService = $menuService;
    }
        public function index()
    {
        $projects = Project::with('technologies')->get();
        $technologies = Technology::query()->with(['technologies'])->get();

         return view('index.main', ['menu' => $this->menuService->getMenu(), 'projects' => $projects]);    
    }

}




