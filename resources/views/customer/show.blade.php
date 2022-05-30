@extends('main.app')

@section('content')
<div class="customer-information container col-11">

    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <div class="row py-3">
        @include("extra.side-navbar")
        <div class="col-md-9 col-12 my-3">
            <div class="content">
                <div class="head d-flex justify-content-between align-items-center mb-3">
                    <h4 class="m-0">Account Information</h4>
                    <a class="btn btn-primary" href="{{ url('edit-user/'.Auth::id()) }}"> Edit <i class="fa-solid fa-pen ps-2"></i> </a>
                </div>
                <div class="body">
                    <div class="row col-md-12">
                        <div class="left col-md-6 col-6 me-5">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>Name:</th>
                                        <td>{{ $user->customer->first_name }} {{ $user->customer->last_name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone Number:</th>
                                        <td>{{ $user->phone }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email Address:</th>
                                        <td>{{ $user->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Joined since:</th>
                                        <td>{{ isset($user->created_at) ? $user->created_at->format('m / d / Y') : $user->email }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="right col-md-3 col-sm-4 "> 

                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    @if(Auth::user()->partner->id !== null) 
                        <a class="btn btn-primary w-100" href="{{ url('create-partner/'.Auth::id()) }}"> 
                            {{ __('Interested in Becoming Our Partner?') }} 
                        </a>
                    @else
                        <hr>
                        <div class="body">
                            <div class="row col-md-12">
                                <div class="top">
                                    <div class="left col-md-6 col-6 me-5">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th>Company Name:</th>
                                                    <td>{{ Auth::user()->partner->name }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Type of Industry:</th>
                                                    <td>{{ Auth::user()->partner->industry }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Company Location:</th>
                                                    <td>{{ Auth::user()->partner->location }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Comapny Address:</th>
                                                    <td>{{ Auth::user()->partner->address }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="right col-md-3 col-sm-4 "> 

                                    </div>
                                </div>
                                <div class="buttom col-md-12">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>Company Desciption:</th>
                                                <td>{{ Auth::user()->partner->description }}</td>
                                            </tr>
                                            <tr>
                                                <th>Company Website:</th>
                                                <td>{{ Auth::user()->partner->website }}</td>
                                            </tr>
                                            <tr>
                                                <th>Company Facebook:</th>
                                                <td>{{ Auth::user()->partner->facebook }}</td>
                                            </tr>
                                            <tr>
                                                <th>Comapny Instagram:</th>
                                                <td>{{ Auth::user()->partner->intagram }}</td>
                                            </tr>
                                            <tr>
                                                <th>Comapny Linkedin:</th>
                                                <td>{{ Auth::user()->partner->linkedin }}</td>
                                            </tr>
                                            <tr>
                                                <th>Admin Approval:</th>
                                                <td>{{ Auth::user()->partner->partner_approval }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection
