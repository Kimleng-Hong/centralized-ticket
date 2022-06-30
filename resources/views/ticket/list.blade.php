
@extends('main.app')

@section('content')
<div class="customer-information container col-11">

    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <div class="row py-3">
        <div class="col-md-12 col-12 my-3">
            <div class="content">
                <div class="head mb-3">
                    <h4 class="m-0">Ticket List</h4>
                </div>
                <div class="body">
                    <div class="box py-1 px-4">
                        @foreach ($tickets as $ticket)
                            @if(($ticket->partner_approval == 'approved')) 
                                <div class=" row ticket-item p-0 my-3">
                                    <div class="col-md-12 col-6 d-flex justiy-content-between">
                                        <div class="ticket-photo col-md-2 d-flex py-3 m-0">
                                            <figure class="image m-0 d-flex align-self-center">
                                                <img src="https://luxurytravelvietnam.com/blog/wp-content/uploads/2020/02/Phnom-Phenh-Royal-Palace-history.jpg" alt="Royal Palace Picture">
                                            </figure>
                                        </div>
                                        <div class="info d-flex flex-column justify-content-between col-md-10 p-2 ms-3">
                                            <div class="main">
                                                <div class="name d-flex">
                                                    <a class="fw-bold text-dark" href="{{ url('buy-ticket/'.$ticket->id) }}"> {{ $ticket->name }} </a>
                                                    <p class="rounded-3 btn-success text-white px-1 mx-3">{{ $ticket->partner->industry->name }}</p>
                                                </div>
                                                <p class="pe-2">{{ $ticket->description }}</p>
                                                <p class="fw-bold text-dark"><i class="fas fa-location-arrow text-success"></i> {{ $ticket->partner->location->name }}</p>
                                                <p class="fw-bold text-dark"><i class="fas fa-user-tie text-success"></i> {{ $ticket->partner->name }}</p>
                                            </div>
                                            <div class="sub">
                                                
                                                <p class="fw-bold text-dark">Price: <i class="fa-solid fa-dollar-sign text-success"></i> {{ $ticket->price }}</p>
                                            </div>
                                        </div>
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