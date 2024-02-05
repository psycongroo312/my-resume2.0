<?php

namespace App\Services;

class ArrayMenuService implements MenuServiceInterface
{

    public function getMenu(): array
    {
        return [
            
                ['href' => route('qwe'), 'title'=> 'Портфолио'],
                ['href' => '/abc', 'about'=> 'Обо мне'],
                ['href' => '/qwe', 'kontacee'=> 'Контакты'],
            
            
        ];
    }
}