<nav class="navbar navbar-expand-lg navbar-dark bg-dark w-100 px-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><i class="fas fa-shopping-bag pe-1"></i> Tinh Sroul</a>
        <button class="navbar-toggler m-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item me-2">
                        <a class="nav-link" aria-current="page" href="{{ url('/') }}"> Welcome </a>
                    </li>
                    @guest
                    @else
                        <li class="nav-item me-2">
                            <a class="nav-link py-2" aria-current="page" href="{{ url('/home') }}"> Home </a>
                        </li>
                    @endguest
                    <li class="nav-item me-2">
                        <a class="nav-link" aria-current="page" href="{{ url('/list-ticket') }} "> Ticket </a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link" aria-current="page" href="{{ url('list-partner') }} "> Company </a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link" aria-current="page" href="{{ url('/about') }}"> About Us </a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link" aria-current="page" href="{{ url('/contact') }}"> Contact Us </a>
                    </li>
                @guest
                    @if (Route::has('register') or Route::has('login'))
                        <li class="me-2 my-1">
                            <a class="btn btn-success w-100" href="{{ route('login') }}"> Login </a>
                        </li>
                        <li class="me-2 my-1">
                            <a class="btn btn-light w-100" href="{{ route('register') }}"> Sign up </a>
                        </li>
                    @endif
                @else
                    <li class="me-2 my-1 dropdown">
                        <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->email }}
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="{{ url('show-user/'.Auth::id()) }}"> My Profile </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('edit-user/'.Auth::id()) }}"> Setting </a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
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