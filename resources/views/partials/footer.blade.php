<footer>
    <div class="footer-nav">

        <div class="container">
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
    <div class="footer-cta container">
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
            {{-- <a v-for="icons in navSocials" href="">
                <img :src="'../assets/' + icons.img" :alt="icons.link">
            </a> --}}
        </nav>

    </div>
</footer>
</template>