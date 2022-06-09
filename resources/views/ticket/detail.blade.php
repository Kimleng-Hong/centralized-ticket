@extends('main.app')

@section('content')
<div class="customer-information container col-11">

    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <div class="row py-3">
        <div class="col-md-12 col-12 my-3">
            <div class="content">
                <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    {{ __('Ticket Detail') }}
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection

