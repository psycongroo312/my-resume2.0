<?php

namespace App\Http\Controllers;

use App\Services\MenuServiceInterface;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    

    public function __construct(MenuServiceInterface $ArrayMenuService)
    {
        $this->arrayMenuService = $ArrayMenuService;
    }
    public function index()
    {
        $items = config('menu.items');
        
        return view('index.main', ['menu'=>$this->ArrayMenuService->getMenu()]);
    }
}


