<div class="container-fluid top d-flex justify-content-end gap-2 text-white">
    <p>DC POWER VISA</p>
    <p>Additional DC Sites</p>

</div>

<nav class="bg-body-tertiary">
    <div class="container header_container d-flex">
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
                    <a class="nav-link text-uppercase" href="{{ url('/characters') }}">Characters</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link text-uppercase" href="{{ url('/') }}">Comics</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link text-uppercase" href="{{ url('/movies') }}">Movies</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link text-uppercase" href="{{ url('/tv') }}">Tv</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link text-uppercase" href="{{ url('/games') }}">Games</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link text-uppercase" href="{{ url('/collectibles') }}">Collectibles</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link text-uppercase" href="{{ url('/videos') }}">Videos</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link text-uppercase" href="{{ url('/fans') }}">Fans</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link text-uppercase" href="{{ url('/news') }}">News</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link text-uppercase" href="{{ url('/shop') }}">Shop</a>
                </li>
                <li class="nav-item mx-3">
                    <div class="form_nav">
                        <input class="form-control form-control-sm" type="text" placeholder="Search">
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
