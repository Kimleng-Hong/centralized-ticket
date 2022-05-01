@extends('main-layouts.app')

@section('content')
<div class="customer-information container col-11">

    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <div class="row py-3">
        @include("include-layouts.side-navbar")
        <div class="col-md-9 col-12 my-3">
            <div class="content">
                <div class="head d-flex justify-content-between align-items-center mb-5">
                    <h4 class="m-0">Account Information</h4>
                    <a class="btn btn-primary" href="{{ url('edit-customer/'.Auth::id()) }}"> Edit <i class="fa-solid fa-pen ps-2"></i> </a>
                </div>
                <div class="body">
                    <div class="row">
                        <div class="left col-md-6 col-6 me-5">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>Name:</th>
                                        <td>{{ Auth::user()->customer->first_name }} {{ Auth::user()->customer->last_name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone Number:</th>
                                        <td>{{ Auth::user()->phone }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email Address:</th>
                                        <td>{{ Auth::user()->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Joined since:</th>
                                        <td>{{ isset(Auth::user()->created_at) ? Auth::user()->created_at->format('m / d / Y') : Auth::user()->email }}</td>
                                    </tr>
                                </tbody>
                            </table>
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
