<div class="col-md-3 my-3">
    <div class="side-navbar">
        <ul class="list">
            <li class="item">
                <a aria-current="page" href="{{ url('/') }}"> <i class="fa-solid fa-house pe-3"></i> Home </a>
            </li>
            <li class="item">
                <a aria-current="page" href="{{ url('show-customer/'.Auth::id()) }}"> <i class="fa-solid fa-circle-user pe-3"></i> My Profile </a>
            </li>
            <li class="item">
                <a aria-current="page" href="#"> <i class="fa-solid fa-ticket pe-3"></i> Tickets </a>
            </li>
            <li class="item logout">
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