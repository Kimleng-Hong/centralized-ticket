@extends('main.app')

@section('content')
<div class="customer-information container col-11">

    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <div class="row py-3">
        @include("extra.side-navbar")
        <div class="col-md-9 col-12 my-3">
            <div class="content">
                <div class="head d-flex justify-content-between align-items-center mb-5">
                    <h4 class="m-0">Master Configuration</h4>
                </div>
                <div class="body">
                    <div class="row">
                        <div class="box table-responsive mb-4">
                            <div class="title d-flex justify-content-between align-items-center">    
                                <h4 class="py-3">Industry List</h4>
                                <a class="btn btn-success" href="{{ url('/add-industry') }}"> <i class="fa-solid fa-pen"></i> </a>
                            </div>
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
                                        
                                    @endforeach
                                    <tr>
                                    <td scope="row">{{ $industry->id }}</td>
                                    <td>{{ $industry->name }}</td>
                                    <td class="text-center">
                                        <a class="btn btn-primary" href="{{ url('edit-industry/'.$industry->id) }}"> <i class="fa-solid fa-pen"></i> </a>
                                        <a class="btn btn-danger" href=""> <i class="fa-solid fa-trash"></i> </a>
                                    </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="box table-responsive mb-4">
                            <div class="title d-flex justify-content-between align-items-center">    
                                <h4 class="py-3">Country List</h4>
                                <a class="btn btn-success" href=""> <i class="fa-solid fa-pen"></i> </a>
                            </div>
                            <table class="table table-dark table-striped">
                                <thead>
                                    <tr class="text-center">
                                    <th scope="col">#</th>
                                    <th scope="col">Country</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td scope="row"></td>
                                    <td>
                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn-primary" href=""> <i class="fa-solid fa-pen"></i> </a>
                                        <a class="btn btn-danger" href=""> <i class="fa-solid fa-trash"></i> </a>
                                    </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="box table-responsive mb-4">
                            <div class="title d-flex justify-content-between align-items-center">    
                                <h4 class="py-3">State List</h4>
                                <a class="btn btn-success" href=""> <i class="fa-solid fa-pen"></i> </a>
                            </div>
                            <table class="table table-dark table-striped">
                                <thead>
                                    <tr class="text-center">
                                    <th scope="col">#</th>
                                    <th scope="col">State</th>
                                    <th scope="col">In Country</th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td scope="row"></td>
                                    <td></td>
                                    <td></td>
                                    <td class="text-center">
                                        <a class="btn btn-primary" href=""> <i class="fa-solid fa-pen"></i> </a>
                                        <a class="btn btn-danger" href=""> <i class="fa-solid fa-trash"></i> </a>
                                    </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection