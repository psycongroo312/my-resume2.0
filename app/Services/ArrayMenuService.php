<?php

namespace App\Services;

class ArrayMenuService implements MenuServiceInterface
{

    public function getMenu(): array
    {
        return [
            
                ['href' => route('abc'), 'title'=> 'Портфолио'],
                // ['href' => '/abc', 'about'=> 'Обо мне'],
                // ['href' => '/qwe', 'kontacee'=> 'Контакты'],
            
            
        ];
    }
}