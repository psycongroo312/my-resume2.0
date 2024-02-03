<?php


class MenuService implements MenuServiceInterface
{
    public function getMenu(): array 
    {
        return [
            ['href'=> '/abc', 'title'=> 'Портфолио'],
            ['href'=> '/abc', 'about'=> 'Обо мне'],
            ['href'=> '/abc', 'kontacee'=> 'Контакты'],
        ];
      
    }

       
  
}

