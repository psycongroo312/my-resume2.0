    <header>
        <nav class="container">
            <ul class="menu">
                @forelse ($menu as $item)
                    {{-- <li><a href="{{ $item['href'] }}">{{ $item['title'] }}</a></li> --}}
                @empty
                    cdldkkfk
                @endforelse

            </ul>
        </nav>
    </header>
