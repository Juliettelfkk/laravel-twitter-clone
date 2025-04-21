<nav class="navbar navbar-expand-lg sticky-top" style="background-color: #ffffff; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">

    <div class="container">
        <a class="navbar-brand fw-light text-white" href="/">
            <img src="{{asset('storage/profile/logo.png')}}" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                @guest
                    <li class="nav-item">
                        <a class="{{Route::is('login') ? 'active ' : ''}} nav-link " aria-current="page" href={{ route('login') }}>Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="{{Route::is('register') ? 'active' : ''}} nav-link" href={{ route('register') }}>Register</a>
                    </li>
                @endguest
                @auth()
                    <li class="nav-item">
                        <a class="nav-link" href={{ route('profile') }}>{{ Auth::user()->email }}</a>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="btn" type="submit" style="background-color: #1DA1F2; color: white;">Logout</button>
                        </form>
                    </li>
                @endauth

            </ul>
        </div>
    </div>
</nav>
