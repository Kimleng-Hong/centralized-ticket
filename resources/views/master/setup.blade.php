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

                <div class="head d-flex justify-content-between align-items-center mb-5">
                    <h3 class="m-0">Additional Setup</h3>
                </div>
                <div class="body">
                    <div class="row">
                        <div class="box table-responsive mb-4">
                            <div class="title d-flex justify-content-between align-items-center">    
                                <h4 class="fw-bold py-2">Industry List</h4>
                                <a class="fw-bold btn btn-success" href="{{ url('/create-industry') }}"> Add Industry </a>
                            </div>
                            <div class="table-responsive mb-3">
                                <table class="table table-dark table-striped">
                                    <thead>
                                        <tr class="text-center">
                                        <th scope="col">#</th>
                                        <th scope="col">Industry</th>
                                        <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($industry as $industry)
                                            <tr class="text-center">
                                            <td scope="row">{{ $industry->id }}</td>
                                            <td>{{ $industry->name }}</td>
                                            <td>
                                                <a class="btn btn-primary" href="{{ url('edit-industry/'.$industry->id) }}"> <i class="fa-solid fa-pen"></i> </a>
                                                <a class="btn btn-danger" href=""> <i class="fa-solid fa-trash"></i> </a>
                                            </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="box mb-4">
                            <div class="title d-flex justify-content-between align-items-center">    
                                <h4 class="fw-bold py-2">Location List</h4>
                                <a class="fw-bold btn btn-success" href="{{ url('/create-location') }}"> Add Location </a>
                            </div>
                            <div class="table-responsive mb-3">
                                <table class="table table-dark table-striped">
                                    <thead>
                                        <tr class="text-center">
                                        <th scope="col">#</th>
                                        <th scope="col">Location</th>
                                        <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($location as $location)
                                        <tr class="text-center">
                                        <td scope="row">{{ $location->id }}</td>
                                        <td>{{ $location->name }}</td>
                                        <td>
                                            <a class="btn btn-primary" href="{{ url('edit-location/'.$location->id) }}"> <i class="fa-solid fa-pen"></i> </a>
                                            <a class="btn btn-danger" href=""> <i class="fa-solid fa-trash"></i> </a>
                                        </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>  
</div>
@endsection