@extends('main.app')

@section('content')
<div class="customer-information container col-11">

    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <div class="row py-3">
        @include("master.include.side-navbar")
        <div class="col-md-9 col-12 my-3">
            <div class="content mb-5">
                <div class="head d-flex justify-content-between align-items-center mb-3">
                    <h4 class="m-0">Partner List</h4>
                    <a class="fw-bold btn btn-success" href="{{ url('/create-user') }}"> Register Partner </a>
                </div>
                <div class="body">
                    <div class="row">
                        <div class="box py-1 px-4">
                            @foreach ($partners as $partner)
                                @if(($partner->partner_requesting === 'approved'))
                                    <div class=" row ticket-item p-0 my-3">
                                        <div class="col-md-12 col-6 d-flex justiy-content-between">
                                            <div class="ticket-photo col-md-2 d-flex py-3 m-0">
                                                <figure class="image m-0 d-flex align-self-center">
                                                    <img src="https://luxurytravelvietnam.com/blog/wp-content/uploads/2020/02/Phnom-Phenh-Royal-Palace-history.jpg" alt="Royal Palace Picture">
                                                </figure>
                                            </div>
                                            <div class="info d-flex justify-content-between col-md-10 p-2 ms-3 ">
                                                <div class="main col-md-10 border-end border-dark pe-3">
                                                    <div class="name d-flex">
                                                        <a class="fw-bold text-dark" href="{{ url('show-partner/'.$partner->id) }}"> {{ $partner->partner->name }} </a>
                                                        <p class="rounded-3 btn-success text-white px-1 mx-3">{{ $partner->partner->industry->name }}</p>
                                                    </div>
                                                    <p class="description">{{ $partner->partner->description }}</p>
                                                    <p class="text-dark"><i class="fas fa-location-arrow text-success"></i> {{ $partner->partner->location->name }} </p>
                                                    <p class="text-dark"><i class="fa-solid fa-phone text-success"></i> {{ $partner->phone }}</p>
                                                    <p class="text-dark"><i class="fa-solid fa-at text-success"></i> {{ $partner->email }}</p>
                                                </div>
                                                <div class="sub col-md-2 d-flex flex-column justify-content-evenly">
                                                    <div class="text-center">
                                                        <a class="fw-bold text-dark" href="{{ url('show-partner/'.$partner->id) }}"> Info <i class="fa-solid fa-file text-warning fs-5"></i> </a>
                                                    </div>
                                                    <div class=" text-center">
                                                        <a class="fw-bold text-dark" href="#"> Edit <i class="fa-solid fa-pen-to-square text-primary fs-5"></i> </a>
                                                    </div>
                                                    <div class=" text-center">
                                                        <a class="fw-bold text-dark" href="#"> Remove <i class="fa-solid fa-trash-can text-danger fs-5"></i> </a>
                                                    </div>
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
</div>
@endsection
