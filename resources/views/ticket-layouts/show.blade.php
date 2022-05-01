@extends('main-layouts.app')

@section('content')
<div class="customer-information container col-11">

    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <div class="row py-3">
        @include("include-layouts.side-navbar")
        <div class="col-md-9 col-12 my-3">
            <div class="content">
                <div class="head d-flex justify-content-between align-items-center mb-5">
                    <h4 class="m-0">Ticket List</h4>
                    <a class="btn btn-primary" href="{{ url('create-ticket/'.Auth::id()) }}"> Add Ticket </a>
                </div>
                <div class="body">
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
                            <p>-</p>
                            <p>1</p>
                            <p>+</p>
                            <p>Add</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection
