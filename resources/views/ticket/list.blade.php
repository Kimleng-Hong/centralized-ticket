
@extends('main.app')

@section('content')
<div class="customer-information container col-11">

    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <div class="row py-3">
        <div class="col-md-12 col-12 my-3">
            <div class="content">
                <div class="head d-flex justify-content-between align-items-center mb-3">
                    <h4 class="m-0">Ticket List</h4>
                </div>
                <div class="body">
                    <div class="box table-container mb-4">
                        @foreach ($tickets as $ticket)
                            @if(($ticket->partner_approval == 'approved')) 
                                <div class="ticket-item row align-items-center p-0">
                                    <div class="col-md-10 col-6 d-flex">
                                        <div class="ticket-photo col-md-2 m-0 d-flex justify-content-center">
                                            <figure class="image m-0">
                                                <img src="https://luxurytravelvietnam.com/blog/wp-content/uploads/2020/02/Phnom-Phenh-Royal-Palace-history.jpg" alt="Royal Palace Picture">
                                            </figure>
                                        </div>
                                        <div class="info col-md-10 p-2 ms-3">
                                            <div class="title">
                                                <a class="fw-bold text-dark" href="{{ url('buy-ticket/'.$ticket->id) }}"> {{ $ticket->name }} </a>                                                  
                                            </div>
                                            <div class="description">
                                                <p>{{ $ticket->description }}</p>
                                            </div>
                                            <div class="location">
                                                <p><i class="fas fa-location-arrow text-success"></i> {{ $ticket->partner->location->name }}</p>
                                            </div>
                                            <div class="company">
                                                <p><i class="fas fa-user-tie text-success"></i> {{ $ticket->partner->name }}</p>
                                            </div>
                                            <div class="price">
                                                <p class="fw-bold text-dark"><i class="fa-solid fa-dollar-sign text-success"></i> {{ $ticket->price }}</p>
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