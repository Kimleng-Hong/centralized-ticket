@extends('main.app')

@section('content')
<div class="customer-information container col-11">

    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <div class="row py-3">
        @include('extra.side-navbar')
        <div class="col-md-9 col-12 my-3">
            <div class="content mb-5">
                <div class="head d-flex justify-content-between align-items-center mb-5">
                    <h4 class="m-0">Employee List</h4>
                </div>
                <div class="body">
                    <div class="row">
                        <div class="box table-container mb-4">
                            <div class="title d-flex justify-content-between align-items-center py-2">    
                                <h4 class="fw-bold m-0">Official Employee List</h4>
                                <a class="fw-bold btn btn-success" href="{{ url('/create-user') }}"> Register Employee </a>
                            </div>
                            <div class="card table-responsive mb-3">
                                <table class="table table-striped m-0">
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                        @if($user->user_role == 'employee')
                                            @if($user->created_by == Auth::user()->id)
                                                <tr class="text-center">
                                                    <td>{{ $user->employee->id }}</td>
                                                    <td>{{ $user->employee->first_name }} {{ $user->employee->last_name }}</td>
                                                    <td>{{ $user->phone }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>
                                                        <a class="fw-bold text-dark pe-2 border-end border-dark" href="{{ url('edit-employee/'.$user->id) }}"> Edit <i class="fa-solid fa-pen-to-square text-primary fs-5"></i> </a>
                                                        <a class="fw-bold text-dark ps-2" href="#"> Remove <i class="fa-solid fa-trash-can text-danger fs-5"></i> </a>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endif
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                            
                        <div class="box table-container mb-4">
                            <div class="title d-flex justify-content-between align-items-center py-2">    
                                <h4 class="fw-bold m-0">Request Employee List</h4>
                            </div>
                            <div class="card table-responsive mb-3">
                                <table class="table table-striped m-0">
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col">#</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            @if($user->user_role == 'user')
                                                @if($user->created_by == Auth::user()->id)
                                                    <tr class="text-center">
                                                        <td>{{ $user->id }}</td>
                                                        <td>{{ $user->phone }}</td>
                                                        <td>{{ $user->email }}</td>
                                                        <td>
                                                            <a class="fw-bold text-primary" href="{{ url('create-employee/'.$user->id) }}"> Register</a>
                                                        </td>
                                                    </tr>
                                                @endif
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
