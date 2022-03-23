<nav class="navbar navbar-expand-lg navbar-dark bg-dark w-100 px-5">
    <div class="container-fluid">
            <a class="navbar-brand" href="#">Tinh Sroul</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item me-2">
                    <a class="nav-link" aria-current="page" href="{{ url('/') }}">Home <i class="fa-solid fa-house ps-1"></i></a>
                </li>
                <li class="nav-item pe-2">
                    <a class="nav-link" aria-current="page" href="#">Tickets <i class="fa-solid fa-ticket ps-1"></i> </a>
                </li>
                <li class="nav-item pe-2">
                    <a class="nav-link" aria-current="page" href="#">About Us <i class="fa-solid fa-circle-question ps-1"></i></a>
                </li>
                <li class="nav-item pe-2">
                    <a class="nav-link" aria-current="page" href="#">Contact Us <i class="fa-solid fa-phone ps-1"></i> </a>
                </li>
                @guest
                    @if (Route::has('register') or Route::has('login'))
                        <li class="nav-item px-1 mb-1">
                            <a class="btn btn-success w-100" href="{{ route('login') }}"> Login </a>
                        </li>
                        <li class="nav-item px-1 mb-1">
                            <a class="btn btn-light w-100" href="{{ route('register') }}"> Sign up</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            @if(Auth::user()->customer == null)
                                {{ Auth::user()->phone }}
                            @else
                                {{ Auth::user()->customer->first_name }} {{ Auth::user()->customer->last_name }}
                            @endif
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="{{ url('show-customer/'.Auth::id()) }}"> My Profile </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('edit-customer/'.Auth::id()) }}"> Setting </a>
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