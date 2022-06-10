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
                    <h4 class="m-0">Partner List</h4>
                </div>
                <div class="body">
                    <div class="box table-container mb-4">
                        {{-- @foreach ($tickets as $ticket)
                            @if(($ticket->partner_approval == 'approved')) 
                                <div class="ticket-item row align-items-center p-0">
                                    <div class="left col-md-10 col-6 d-flex">
                                        <div class="photo pe-3">
                                            
                                        </div>
                                        <div class="info">
                                            <div class="title">
                                                <a class="fw-bold text-dark text-decoration-underline" href="{{ url('detail-ticket/'.$ticket->id) }}"> {{ $ticket->name }} </a>                                                  
                                            </div>
                                            <div class="description">
                                                <p>{{ $ticket->description }}</p>
                                            </div>
                                            <div class="location">
                                                <p><i class="fas fa-user-tie text-success"></i> {{ $ticket->partner->name }} - <i class="fas fa-location-arrow text-success"></i> {{ $ticket->partner->location->name }}</p>
                                            </div>
                                            <div class="price">
                                                <p class="fw-bold text-dark"><i class="fa-solid fa-dollar-sign text-success"></i> {{ $ticket->price }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right col-md-2 col-sm-4 d-flex flex-column py-1"> 
                                        <div class="d-flex justify-content-center">
                                            <label for="ticket_amount" class="col-form-label">{{ __('Amount') }}</label>
                                        </div>  
                                        <div class="d-flex align-self-center col-md-10 mb-1">
                                            <input id="ticket_name" type="text" class="form form-control @error('ticket_name') is-invalid @enderror" name="ticket_name" value="{{ old('ticket_name') }}" autocomplete="ticket_name" required>
                                                @error('ticket_name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                        </div>
                                        <div class="d-flex align-self-center col-md-10">
                                            <a class="btn btn-primary w-100" href="#buy-ticket/{id}"> Buy  </a>
                                        </div>
                                        
                                    </div>
                                </div>
                            @endif
                        @endforeach --}}
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection