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
                    <a class="btn btn-primary" href="{{ url('create-ticket') }}"> Add Ticket </a>
                </div>
                <div class="body">
                    <div class="box table-container mb-4">
                        <div class="ticket-item row align-items-center">
                            <div class="left col-md-9 col-6">
                                <div class="photo"></div>
                                <div class="info">
                                    <div class="title">
                                        <h6 class="fw-bold">blah</h6>
                                    </div>
                                    <div class="description">
                                        <p>blah blah</p>
                                    </div>
                                </div>
                            </div>
                            <div class="right col-md-3 col-sm-4 d-flex justify-content-end"> 
                                <a class="btn btn-primary" href="#edit-ticket/{id}"> Edit <i class="fa-solid fa-pen ps-2"></i> </a>
                            </div>
                        </div>
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
                                            @if($ticket->sale_partner == Auth::id())
                                                @if(($ticket->partner_approval == 'requesting')) 
                                                    <tr class="text-center">
                                                    <td> {{ $ticket->id }}</td>
                                                    <td> {{ $ticket->name }}</td>
                                                    <td> {{ $ticket->description }}</td>
                                                    <td> {{ $ticket->price }}</td>
                                                    <td> 
                                                        {{-- {{ $user->employee->first_name }} {{ $user->employee->last_name }} </td> --}}
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
