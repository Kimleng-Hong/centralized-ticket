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
                    <h4 class="m-0">Company List</h4>
                    <a class="btn btn-success" href="{{ url('/create-partner') }}"> Register Partner </a>
                </div>
                <div class="body">
                    <div class="row">
                        <div class="box table-responsive mb-4">
                            <div class="title d-flex justify-content-between align-items-center">    
                                <h4 class="py-3">Partner List</h4>
                                
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
                                        <tr class="text-center">
                                        <td scope="row"></td>
                                        <td></td>
                                        <td>
                                            <a class="btn btn-primary" href="#"> <i class="fa-solid fa-pen"></i> </a>
                                            <a class="btn btn-danger" href="#"> <i class="fa-solid fa-trash"></i> </a>
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
</div>
@endsection
