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
                                        <th class="col-md-6">Name:</th> <td>{{ $users->customer->first_name }} {{ $users->customer->last_name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone Number:</th> <td>{{ $users->phone }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email Address:</th> <td>{{ $users->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Joined since:</th> <td>{{ isset($users->created_at) ? $users->created_at->format('m / d / Y') : $users->email }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="right col-md-3 col-sm-4 "> 

                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    @if($users->partner_requesting == 'null')
                        <a class="btn btn-primary w-100" href="{{ url('create-partner/'.Auth::id()) }}"> 
                            {{ __('Interested in Becoming Our Partner?') }} 
                        </a>
                    @elseif($users->partner_requesting == 'checking')
                        <div class="table-container">
                            <h5 class="text-center p-2"> The partnership request is currently being check by the admin</h5>
                        </div>
                    @elseif($users->partner_requesting == 'denied')
                        <div class="table-container">
                            <h5 class="text-center p-2"> The partnership request has been denied</h5>
                        </div>
                    @else
                        <hr>
                        <div class="body">
                            <div class="row col-md-12">
                                <div class="top">
                                    <div class="left col-md-6 col-6 me-5">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th class="col-md-6">Company Name:</th> <td>{{ $users->partner->name }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Type of Industry:</th> <td>{{ $users->partner->industry->name }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Company Location:</th> <td>{{ $users->partner->location->name }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Comapny Address:</th> <td>{{ $users->partner->address }}</td>
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
                                                <th class="col-md-3">Company Desciption:</th> <td class="col-md-9">{{ $users->partner->description }}</td>
                                            </tr>
                                            <tr>
                                                <th>Company Website:</th>
                                                <td> 
                                                    @if($users->partner->website == null) 
                                                        <p class="text-danger m-0">Owner Not Provided</p> 
                                                    @else
                                                        <a href="{{ $users->partner->website }}">{{ $users->partner->website }}</a>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Company Facebook:</th>
                                                <td>
                                                    @if($users->partner->facebook == null) 
                                                        <p class="text-danger m-0">Owner Not Provided</p> 
                                                    @else
                                                        <a href="{{ $users->partner->facebook }}">{{ $users->partner->facebook }}</a>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Comapny Instagram:</th>
                                                <td>
                                                    @if($users->partner->instagram == null) 
                                                        <p class="text-danger m-0">Owner Not Provided</p> 
                                                    @else
                                                        <a href="{{ $users->partner->instagram }}"> {{ $users->partner->instagram }} </a>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Comapny Linkedin:</th>
                                                <td>
                                                    @if($users->partner->linkedin == null) 
                                                        <p class="text-danger m-0">Owner Not Provided</p> 
                                                    @else
                                                        <a href="{{ $users->partner->linkedin }}">{{ $users->partner->linkedin }}</a>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Admin Approval:</th>
                                                <td>
                                                    <p class="approved m-0"> {{ $users->partner_requesting }}</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Becoming a Member Since:</th>
                                                <td>
                                                    <p class="m-0"> {{ isset($users->partner->created_at) ? $users->partner->created_at->format('m / d / Y') : $users->email }}</p>
                                                </td>
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
