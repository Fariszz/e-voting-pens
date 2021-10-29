<header class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand d-lg-none" href="#">
                <img src="/storage/images/nav-logo.png" alt="" width="40" height="40"
                    class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav gap-4">
                    <li class="nav-item">
                        <a class="nav-link active nav-text" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-text active" href="/candidate">Candidate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-text active" href="/announcement">Announcement</a>
                    </li>

                    <!-- Authentication Links -->
                    @guest
                    @if(Route::has('login'))
                    <li class="nav-item">
                        <a href="{{ route('login') }}">
                            <button type="button" class="btn btn-primary nav-text">Login</button>
                        </a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav-text active" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Account
                        </a>
                        <ul class="dropdown-menu align-middle" aria-labelledby="navbarDropdown">
                            <li>
                                <span class="fa fa-user-circle dropdown-item d-flex justify-content-around"
                                    aria-hidden="true">{{ Auth::user()->nim }}</span>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex justify-content-center" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    <button class="btn btn-info">{{ __('Logout') }}</button>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</header>
