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
                    <div class="top col-md-12">
                        <div class="left col-md-6 col-6 me-5">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th class="col-md-6">Name:</th> <td>{{ $users->partner->name }}</td>
                                    </tr>
                                    <tr>
                                        <th class="col-md-3">Company Desciption:</th> <td class="col-md-9">{{ $users->partner->description }}</td>
                                    </tr>
                                    <tr>
                                        <th>Industry:</th> <td>{{ $users->partner->industry->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Location:</th> <td>{{ $users->partner->location->name }}</td>
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
                                    <th>Phone Number:</th> <td class="col-md-9">{{ $users->phone }}</td>
                                </tr>
                                <tr>
                                    <th>Email Address:</th> <td>{{ $users->email }}</td>
                                </tr>
                                <tr>
                                    <th>Company Website:</th>
                                    <td> 
                                        @if($users->partner->website == null) 
                                            Empty
                                        @else
                                            {{ $users->partner->website }}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Company Facebook:</th>
                                    <td>
                                        @if($users->partner->facebook == null) 
                                            Empty
                                        @else
                                            {{ $users->partner->facebook }}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Comapny Instagram:</th>
                                    <td>
                                        @if($users->partner->instagram == null) 
                                            Empty
                                        @else
                                            {{ $users->partner->instagram }}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Comapny Linkedin:</th>
                                    <td>
                                        @if($users->partner->linkedin == null) 
                                            Empty
                                        @else
                                            {{ $users->partner->linkedin }}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Admin Approval:</th>
                                    <td>
                                        <p class="approved"> {{ $users->partner_requesting }} </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Joined since:</th> <td>{{ isset($users->created_at) ? $users->created_at->format('m / d / Y') : $users->email }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-around">
                            <div class="col-md-5">
                                <form method="POST" action="{{ url('approve-partner/'.$users->id)}}">
                                    @csrf
                                    @method('PUT')
                                    
                                    <button name='partner_requesting' class="btn btn-success w-100" type="submit" value='approved'>Approve</button>
                                </form>
                            </div>
                            <div class="col-md-5">
                                <form method="POST" action="{{ url('deny-partner/'.$users->id)}}">
                                    @csrf
                                    @method('PUT')

                                    <button name='partner_requesting' class="btn btn-danger w-100" type="submit" value='denied'>Deny</button>
                                </form>
                            </div>  
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection
