<?php

namespace App\Services;

class ArrayMenuService implements MenuServiceInterface
{

    public function getMenu(): array
    {
        return [
            
                ['href' => route('portfolio'), 'title'=> 'Портфолио'],
                ['href' => route('about'), 'title'=> 'Обо мне'],
                ['href' => route('contacts'), 'title'=> 'Контакты'],
            
            
        ];
    }
}