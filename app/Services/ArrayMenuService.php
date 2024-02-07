<?php

namespace App\Services;

class ArrayMenuService implements MenuServiceInterface
{

    public function getMenu(): array
    {
        return [
            
                ['href' => route('abc'), 'title'=> 'Портфолио'],
                ['href' => '/qwe', 'title'=> 'Обо мне'],
                ['href' => '/', 'title'=> 'Контакты'],
            
            
        ];
    }
}