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
                            <div class="title d-flex justify-content-between align-items-center pt-2">    
                                <h4 class="m-0">Official Employee List</h4>
                                <a class="btn btn-success" href="{{ url('/create-user') }}"> Register Employee </a>
                            </div>
                            <div class="table-responsive pt-3 mb-3">
                                <table class="table table-dark table-striped">
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
                                        @if($user->user_role == 'employee')
                                            @if($user->created_by == Auth::user()->id)
                                                <tr class="text-center">
                                                    <td>{{ $user->id }}</td>
                                                    <td>{{ $user->phone }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>
                                                        <a class="text-primary" href="{{ url('edit-employee/'.$user->id) }}"> Edit </a>
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
                            <div class="title d-flex justify-content-between align-items-center pt-2">    
                                <h4 class="m-0">Request Employee List</h4>
                            </div>
                            <div class="table-responsive pt-3 mb-3">
                                <table class="table table-dark table-striped">
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
                                                            <a class="text-primary" href="{{ url('create-employee/'.$user->id) }}"> Register </a>
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
