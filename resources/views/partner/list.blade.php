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
                <div class="body d-flex d-flex justify-content-around">
                    @foreach ($partners as $partner)
                    @if($partner->partner_requesting == 'approved')
                        <div class="box bg-gray-800 row col-md-5 p-2">
                            <div class="left col-md-3 p-0">
                                <div class="photo">
                                    
                                </div>
                            </div>
                            <div class="right col-md-9 p-0">
                                <div class="info">
                                    <div class="name">
                                        <a href="" class="text-dark fw-bold">{{ $partner->partner->name }}</a>
                                    </div>
                                    <div class="industry">
                                        {{ $partner->partner->industry->name }}
                                    </div>
                                    <div class="location">
                                        <i class="fa-solid fa-location-dot text-success"></i> {{ $partner->partner->location->name }}
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
@endsection
