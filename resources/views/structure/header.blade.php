    <header>
        <nav class="container">
            <ul class="menu">
                @forelse ($items as $item)
                    <li><a href="{{$item['url']}}">{{$item['title']}}</a></li>
                @empty
                    Error
                @endforelse
                <li><a class="menu__link" href="#portfolio">Портфолио</a></li>
                <li><a class="menu__link" href="#about">Обо мне</a></li>
                <li><a class="menu__link" href="#kontakti">Контакты</a></li>
            </ul>
        </nav>
    </header>
