<nav class="navbar navbar-expand navbar-auth">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="{{ route('home') }}">LOGO</a>
        <div>
            <ul class="navbar-nav">
                @if (request()->is('login'))
                    <li class="nav-item me-3">
                        <a class="nav-link text-white" href="{{ route('register') }}">Register</a>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link btn px-3 active-a" type="button">LOGIN</button>
                    </li>
                @elseif (request()->is('register'))
                    <li class="nav-item me-3">
                        <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link btn px-3 active-a" type="button">REGISTER</button>
                    </li>
                @else
                    <li class="nav-item me-3">
                        <a class="nav-link text-white" href="{{ route('register') }}">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
