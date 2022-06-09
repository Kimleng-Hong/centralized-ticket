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
                <div class="head d-flex justify-content-between align-items-center mb-5">
                    <h4 class="m-0">Ticket List</h4>
                    @if(Auth::user()->user_role == "employee")
                        <a class="btn btn-primary" href="{{ url('create-ticket') }}"> Add Ticket </a>
                    @endif
                </div>
                <div class="body">
                    <div class="box table-container mb-4">
                        @foreach ($tickets as $ticket)
                            @if($ticket->partner_id == Auth::user()->partner->id)
                                @if(($ticket->partner_approval == 'approved')) 
                                    <div class="ticket-item row align-items-center p-0">
                                        <div class="left col-md-10 col-6 d-flex">
                                            <div class="photo pe-3">
                                                
                                            </div>
                                            <div class="info">
                                                <div class="title">
                                                    <p class="fw-bold text-dark"> {{ $ticket->name }} </p>                                                   
                                                </div>
                                                <div class="description">
                                                    <p>{{ $ticket->description }}</p>
                                                </div>
                                                <div class="location">
                                                    <p>{{ $ticket->partner->name }} - {{ $ticket->partner->location->name }}</p>
                                                </div>
                                                <div class="price">
                                                    <p class="fw-bold text-dark">$ {{ $ticket->price }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="right col-md-2 col-sm-4 d-flex flex-column p-0"> 
                                            <a class="btn btn-primary rounded-0 py-3" href="#edit-ticket/{id}"> Edit  </a>
                                            <a class="btn btn-danger rounded-0 py-3" href="#edit-ticket/{id}"> Delete </a>
                                        </div>
                                    </div>
                                @endif
                            @endif
                        @endforeach
                    </div>
                    @if(Auth::user()->user_role == "partner")
                        <div class="box table-container mb-4">
                            <div class="title d-flex justify-content-between align-items-center">    
                                <h4 class="py-3">Ticket Approval</h4>
                            </div>
                            <div class="table-responsive mb-3">
                                <table class="table table-dark table-striped">
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Registered By</th>
                                            <th scope="col" colspan="2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>    
                                        @foreach ($tickets as $ticket)
                                            @if($ticket->partner_id == Auth::user()->partner->id)
                                                @if(($ticket->partner_approval == 'requesting')) 
                                                    <tr class="text-center">
                                                    <td> {{ $ticket->id }}</td>
                                                    <td> {{ $ticket->name }}</td>
                                                    <td> {{ $ticket->description }}</td>
                                                    <td> {{ $ticket->price }}</td>
                                                    <td> 
                                                        {{ $ticket->employee->first_name }} {{ $ticket->employee->last_name }}
                                                    <td>
                                                        <form method="POST" action="{{ url('approve-ticket/'.$ticket->id)}}">
                                                            @csrf
                                                            @method('PUT')
                                                            
                                                            <button name='partner_requesting' class="btn btn-success" type="submit" value='Approved'><i class="fa-solid fa-circle-check"></i></button>
                                                        </form>
                                                    </td>
                                                    <td>
                                                        <form method="POST" action="{{ url('deny-ticket/'.$ticket->id)}}">
                                                            @csrf
                                                            @method('PUT')

                                                            <button name='partner_requesting' class="btn btn-danger" type="submit" value='Denied'><i class="fa-solid fa-circle-xmark"></i></button>
                                                        </form>
                                                    </td>
                                                    </tr>
                                                @endif  
                                            @endif                                        
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection
