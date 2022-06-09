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
                    <h4 class="m-0">Ticket List</h4>
                </div>
                <div class="body">
                    <div class="box table-container mb-4">
                        @foreach ($tickets as $ticket)
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
                                                <p class="fw-bold text-dark"><i class="fa-solid fa-dollar-sign"></i> {{ $ticket->price }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right col-md-2 col-sm-4 d-flex flex-column p-0">
                                        
                                        <a class="btn btn-primary rounded-0 py-3" href="#edit-ticket/{id}"> Buy  </a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection