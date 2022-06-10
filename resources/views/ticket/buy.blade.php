@extends('main.app')

@section('content')
<div class="customer-information container col-11">

    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <div class="row py-3">
        <div class="content col-md-8 col-12 my-3">
            <div class="head d-flex justify-content-between align-items-center mb-3">
                <h4 class="m-0">Ticket Information</h4>
                <a class="btn btn-danger" href="{{ url()->previous() }}"> Back </a>
            </div>
            <div class="body col-md-12">
                <div class="ticket-information">
                    <h5 class="fw-bold m-0"> {{ $ticket->name }} </h5> 
                    <p class="text-secondary m-0">{{ $ticket->description }} </p>
                    <p class="text-secondary m-0">Date Posted: {{ isset($ticket->created_at) ? $ticket->created_at->format('m / d / Y') : $ticket->name }} </p>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>  
</div>
@endsection
