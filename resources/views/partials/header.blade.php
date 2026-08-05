<header>
    <nav class="navbar navbar-expand-lg">
        <div class="navbar container-fluid mx-3 d-flex justify-space-between">
            <div class="logo">
                <a class="navbar-brand" href="#">
                    <img class="navbar-logo" src="{{ Vite::asset('resources/images/dc-logo.png')}}" alt="DC logo">
                </a>
            </div>
            <div class="nav-links">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled" href="#" >comics</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled" href="#">movies</a>
                    </li>                             
                    <li class="nav-item">
                    <a class="nav-link disabled" href="#">collectibles</a>
                    </li>                             
                    <li class="nav-item">
                    <a class="nav-link disabled" href="#">videos</a>
                    </li>                             
                    <li class="nav-item">
                    <a class="nav-link disabled" href="#">fans</a>
                    </li>                             
                    <li class="nav-item">
                    <a class="nav-link disabled" href="#">news</a>
                    </li>                             
                    <li class="nav-item">
                    <a class="nav-link disabled" href="#">shops</a>
                    </li> 
                </ul>
            </div>

            </div>
        </div>
    </nav>
</header>