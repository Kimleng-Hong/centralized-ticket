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
                    <h4 class="m-0">Partner List</h4>
                    <a class="btn btn-success" href="{{ url('/create-partner') }}"> Register Partner </a>
                </div>
                <div class="body">
                    <div class="row">
                        <div class="box mb-4">
                            <div class="table-responsive pt-3 mb-3">
                                <table class="table table-dark table-striped">
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Industry</th>
                                            <th scope="col">Location</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($partners as $partner)
                                            @if(($partner->partner_requesting === 'approved'))
                                                <tr class="text-center">
                                                    <td>{{ $partner->id }}</td>
                                                    <td>{{ $partner->partner->name }}</td>
                                                    <td>{{ $partner->partner->industry->name }}</td>
                                                    <td>{{ $partner->partner->location->name }}</td>
                                                    <td>{{ $partner->phone }}</td>
                                                    <td>{{ $partner->email }}</td>
                                                    <td>
                                                        <a class="btn btn-primary" href="#"> <i class="fa-solid fa-pen"></i> </a>
                                                        <a class="btn btn-danger" href="#"> <i class="fa-solid fa-trash"></i> </a>
                                                    </td>
                                                </tr>
                                            @endif
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
@endsection
