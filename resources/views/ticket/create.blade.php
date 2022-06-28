@extends('main.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            @if(session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif

            <div class="card">
                <div class="card-header bg-dark text-light">{{ __('Input Ticket Information') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('store-ticket/'.Auth::id()) }}">
                        @csrf
                        
                        <div class="mb-2">
                            <label for="ticket_name" class="col-form-label text-md-end">{{ __('Ticket Name') }}</label>
                            <div class="col-md-12">
                                <input id="ticket_name" type="text" class="form form-control @error('ticket_name') is-invalid @enderror" name="ticket_name" value="{{ old('ticket_name') }}" autocomplete="ticket_name" required>
                                    @error('ticket_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                            </div>
                        </div>

                        <div class="mb-2">
                            <label for="ticket_description" class="col-form-label text-md-end">{{ __('Description') }}</label>
                            <div class="col-md-12">
                                <textarea id="ticket_description" class="form form-control @error('ticket_description') is-invalid @enderror" rows="2" name="ticket_description" value="{{ old('ticket_description') }}" autocomplete="ticket_description" required placeholder="Describe the ticket"></textarea>
                                    @error('ticket_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>

                        <div class="mb-2">
                            <label for="ticket_price" class="col-form-label text-md-end">{{ __('Price ($)') }}</label>
                            <div class="col-md-12">
                                <input id="ticket_price" type="text" class="form form-control @error('ticket_price') is-invalid @enderror" name="ticket_price" value="{{ old('ticket_price') }}" autocomplete="ticket_price" required>
                                    @error('ticket_price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>

                        <div class="mb-2">
                            <a href="#" class="fw-bold"> Add Photos </a>
                        </div>

                        <div class="row mt-4 mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="w-100 btn btn-primary">
                                    {{ __('Request Approval') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
