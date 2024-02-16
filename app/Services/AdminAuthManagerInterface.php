<?php

namespace App\Services;

interface AdminAuthManagerInterface
{
    public function isAdmin(Request $request): bool; 
    
}