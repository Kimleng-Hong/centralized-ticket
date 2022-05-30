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
                    @if($user->partner !== null)
                        @if($user->partner->id !== null)
                            <hr>
                            <div class="body">
                                <div class="row col-md-12">
                                    <div class="top">
                                        <div class="left col-md-6 col-6 me-5">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th>Company Name:</th>
                                                        <td>{{ $user->partner->name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Type of Industry:</th>
                                                        <td>{{ $user->partner->industry }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Company Location:</th>
                                                        <td>{{ $user->partner->location }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Comapny Address:</th>
                                                        <td>{{ $user->partner->address }}</td>
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
                                                    <th class="col-md-3">Company Desciption:</th>
                                                    <td class="col-md-9">{{ $user->partner->description }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Company Website:</th>
                                                    <td> 
                                                        @if($user->partner->website == null) 
                                                            Empty
                                                        @else
                                                            {{ $user->partner->website }}
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Company Facebook:</th>
                                                    <td>
                                                        @if($user->partner->facebook == null) 
                                                            Empty
                                                        @else
                                                            {{ $user->partner->facebook }}
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Comapny Instagram:</th>
                                                    <td>
                                                        @if($user->partner->instagram == null) 
                                                            Empty
                                                        @else
                                                            {{ $user->partner->instagram }}
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Comapny Linkedin:</th>
                                                    <td>
                                                        @if($user->partner->linkedin == null) 
                                                            Empty
                                                        @else
                                                            {{ $user->partner->linkedin }}
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Admin Approval:</th>
                                                    <td>
                                                        @if($user->partner->partner_approval == 'Requesting')
                                                            <p class="requesting"> {{ $user->partner->partner_approval }} </p>
                                                        @elseif($user->partner->partner_approval == 'Approved')
                                                            <p class="approved"> {{ $user->partner->partner_approval }} </p>
                                                        @elseif($user->partner->partner_approval == 'Denied')
                                                            <p class="denied"> {{ $user->partner->partner_approval }} </p>
                                                        @endif
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        @else
                            <a class="btn btn-primary w-100" href="{{ url('create-partner/'.Auth::id()) }}"> 
                                {{ __('Interested in Becoming Our Partner?') }} 
                            </a>
                        @endif

                    @else
                        <a class="btn btn-primary w-100" href="{{ url('create-partner/'.Auth::id()) }}"> 
                            {{ __('Interested in Becoming Our Partner?') }} 
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection
