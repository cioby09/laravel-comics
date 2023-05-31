<nav class="bg-body-tertiary">
    <div class="container-fluid">
        <div id="navbarNav" class="justify-content-center d-flex">
            <ul class="list-unstyled d-flex align-items-center">
                <li class="nav-item mx-3">
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}">
                        <div class="logo">
                            <img src="{{ Vite::asset('\resources\img\dc-logo.png') }}" alt="">
                        </div>
                    </a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ url('/characters') }}">Characters</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ url('/comics') }}">Comics</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ url('/movies') }}">Movies</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ url('/tv') }}">Tv</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ url('/games') }}">Games</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ url('/collectibles') }}">Collectibles</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ url('/videos') }}">Videos</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ url('/fans') }}">Fans</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ url('/news') }}">News</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ url('/shop') }}">Shop</a>
                </li>
                <li class="nav-item mx-3">
                    <div class="search">
                        <input type="text" placeholder="Search">
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
