<footer>
    <div class="footer-nav">

        <div class="my_container">
            <div class="nav-menu">

                @foreach ($footerLinks['navLinks'] as $link)
                <div class="ul-list-container">
                    <h3>{{ $link['title'] }}</h3>
                    <ul class="m-0 ps-0">
                        @foreach ($link['pages'] as $page)
                            <li>
                                <a href="">
                                    {{$page}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
            </div>

            <img src="../assets/dc-logo-bg.png" alt="">
        </div>

    </div>

    <div class="footer-cta my_container">
        <button class="button-cta">Sign-up now!</button>

        <nav>
            <a class="cta-txt" href="">
                follow us
            </a>

            @foreach ( $footerLinks['navSocials'] as $icon)
                <a href="">
                    <img src="{{ Vite::asset('resources/img/' . $icon['img'] )}}" alt="{{$icon['link']}}">
                </a>
            @endforeach
        </nav>

    </div>
</footer>
</template>