<div class="col-md-3 my-3">
    <div class="side-navbar">
        <ul class="list">
            <li>
                <a aria-current="page" href="{{ url('/') }}"> <i class="fa-solid fa-house pe-3"></i> Home </a>
            </li>
            @if(Auth::user()->user_role == "partner")
                <li>
                    <a aria-current="page" href="{{ url('show-employee') }}"> <i class="fa-solid fas fa-users pe-3"></i></i> Employee </a>
                </li>
            @endif
            <li>
                <a aria-current="page" href="{{ url('show-customer/'.Auth::id()) }}"> <i class="fa-solid fa-circle-user pe-3"></i> My Profile </a>
            </li>
            <li>
                <a aria-current="page" href="#"> <i class="fa-solid fa-ticket pe-3"></i> Tickets </a>
            </li>
            </li>
            <li>
                <a aria-current="page" href="{{ url('index-master') }}"> <i class="fa-solid fa-lock pe-3"></i> Master </a>
            </li>
            <li class="logout">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa-solid fa-arrow-right-from-bracket pe-3"></i> Logout
                </a>
                
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</div>