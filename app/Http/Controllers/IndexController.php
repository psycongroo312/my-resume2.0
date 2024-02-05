<?php

namespace App\Http\Controllers;

use App\Services\MenuServiceInterface;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    
    private MenuServiceInterface $ArrayMenuService;

    public function __construct(MenuServiceInterface $ArrayMenuService)
    {
        $this->arrayMenuService = $ArrayMenuService;
    }
    public function index()
    {
        
        return view('index.main', ['menu'=>$this->ArrayMenuService->getMenu()]);
    }
}


