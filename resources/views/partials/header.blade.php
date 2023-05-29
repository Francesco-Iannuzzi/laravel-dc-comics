<header>
    <div class="current_page">
        <div class="container d-flex justify-content-end text-light gap-5">
            <small>DC POWER VISA &copy;</small>
            <small>ADDITIONAL DC SITES</small>
        </div>
    </div>
    <div class="container d-flex justify-content-between text-uppercase">
        <div class="logo d-flex">
            <a class="align-self-center" href="{{ route('home') }}"><img class="ms-2"
                    src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt=""></a>
        </div>
        <nav class="navbar navbar-expand-lg p-0">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link fw-semibold py-4 {{ Route::currentRouteName() === 'characters' ? 'current_page text-light' : '' }}"
                            href="{{ route('characters') }}">characters</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold py-4 {{ Route::currentRouteName() === 'comics' ? 'current_page text-light' : '' }}"
                            href="{{ route('comics') }}">comics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold py-4 {{ Route::currentRouteName() === 'movies' ? 'current_page text-light' : '' }}"
                            href="{{ route('movies') }}">movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold py-4 {{ Route::currentRouteName() === 'tv' ? 'current_page text-light' : '' }}"
                            href="{{ route('tv') }}">tv</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold py-4 {{ Route::currentRouteName() === 'games' ? 'current_page text-light' : '' }}"
                            href="{{ route('games') }}">games</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold py-4 {{ Route::currentRouteName() === 'collectibles' ? 'current_page text-light' : '' }}"
                            href="{{ route('collectibles') }}">collectibles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold py-4 {{ Route::currentRouteName() === 'videos' ? 'current_page text-light' : '' }}"
                            href="{{ route('videos') }}">videos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold py-4 {{ Route::currentRouteName() === 'fans' ? 'current_page text-light' : '' }}"
                            href="{{ route('fans') }}">fans</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold py-4 {{ Route::currentRouteName() === 'news' ? 'current_page text-light' : '' }}"
                            href="{{ route('news') }}">news</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold py-4 {{ Route::currentRouteName() === 'shop' ? 'current_page text-light' : '' }}"
                            href="{{ route('shop') }}">shop</a>
                    </li>
                </ul>
            </div>
            <div>
                <input type="search" name="search" class="border_dc border-0 ms-3 text-end" placeholder="Search"><i
                    class="fa-solid fa-magnifying-glass"></i>
            </div>
        </nav>
    </div>
</header>
