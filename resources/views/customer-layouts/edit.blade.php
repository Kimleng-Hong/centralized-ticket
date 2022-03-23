@extends('main-layouts.app')

@section('content')
<div class="customer-information container col-11">

    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <div class="row py-3">
        <div class="col-md-3 my-3">
            <div class="side-navbar">
                <ul class="list">
                    <li class="item">
                        <a aria-current="page" href="#"> <i class="fa-solid fa-house pe-3"></i> Home </a>
                    </li>
                    <li class="item active">
                        <a aria-current="page" href="#"> <i class="fa-solid fa-circle-user pe-3"></i> My Profile </a>
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
        <div class="col-md-9 col-12 my-3">
            <div class="content">
                <div class="head d-flex justify-content-between align-items-center mb-5">
                    <h4 class="m-0">Edit Account</h4>
                    <a class="btn btn-danger" href="{{ url('show-customer/'.Auth::id()) }}"> Back <i class="fa-solid fa-pen ps-2"></i> </a>
                </div>
                <div class="body">
                    <div class="row">
                        <div class="left col-md-6 col-6 me-5">
                            <form action="{{ url('update-customer/'.Auth::id()) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <th>First Name: </th>
                                            <td><input type="text" name="first_name" value="{{ $customer->customer->first_name }}" class="form form-control"></td>
                                        </tr>
                                        <tr>
                                            <th>Last Name: </th>
                                            <td><input type="text" name="last_name" value="{{ $customer->customer->last_name }}" class="form form-control"></td>
                                        </tr>
                                        <tr>
                                            <th>Phone Number:</th>
                                            <td><input type="text" name="phone" value="{{ $customer->phone }}" class="form form-control"></td>
                                        </tr>
                                        <tr>
                                            <th>Email Address:</th>
                                            <td><input type="text" name="email" value="{{ $customer->email }}" class="form form-control"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><button type="submit" class="btn btn-primary w-100"> Confirm </button></td>                                        
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                        <div class="right col-md-3 col-sm-4 "> 

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection
