<nav class="navbar navbar-expand navbar-auth">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="{{ route('home') }}">LOGO</a>
        <div>
            <ul class="navbar-nav gap-5">
                <li class="nav-item me-3">
                    <a class="nav-link text-white fw-bold" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link text-white" href="#peaples">Peoples</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link text-white" href="#photos">Photos</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link text-white" href="#about">About Us</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link text-white" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
        <div>
            <ul class="navbar-nav">
                @guest
                    <li class="nav-item me-3">
                        <a class="nav-link text-white" href="{{ route('register') }}">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn px-3 active-a" href="{{ route('login') }}">LOGIN</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <div class="rounded-circle border border-5 border-secondary" style="height: 50px; width: 50px">
                                <img class="rounded-circle w-100 h-100" src="{{ asset('assets/profile-non-user.png') }}" alt="PP">
                            </div>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
