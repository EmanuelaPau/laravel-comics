<header class="my_container p-3">
    <img class="brand-logo" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc comics brand logo in blue">
    <nav>
        <ul class="">
            @foreach ($headerLinks as $link)
                <li>
                    <a href="#" class="not-active">
                        {{ $link['name']}} <span class="d-none"
                            ></span>
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>
   
</header>