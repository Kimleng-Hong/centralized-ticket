<div class="col-md-3 my-3">
    <div class="side-navbar">
        <ul class="list">
            <li>
                <a aria-current="page" href="{{ url('/') }}"> <i class="fa-solid fa-house pe-3"></i> Home </a>
            </li>
            <li>
                <a aria-current="page" href="{{ url('index-master') }}"> <i class="fa-solid fa-lock pe-3"></i> Master </a>
            </li>
            <li>
                <a aria-current="page" href="{{ url('/request-partner') }}"> <i class="fa-solid fa-inbox pe-3"></i> Approval Request </a>
            </li>
            <li>
                <a aria-current="page" href="{{ url('setup-master') }}"> <i class="fa-solid fa-toolbox pe-3"></i> Setup </a>
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