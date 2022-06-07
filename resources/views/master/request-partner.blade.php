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
                    <h4 class="m-0">Partner Confirmation</h4>
                </div>
                <div class="body">
                    <div class="box table-container mb-4">
                        <div class="title d-flex justify-content-between align-items-center">    
                            <h4 class="py-3">Partner Registration</h4>
                        </div>
                        <div class="table-responsive mb-3">
                            <table class="table table-dark table-striped">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">ID</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Register Partner</th>
                                    </tr>
                                </thead>
                                <tbody>    
                                    @foreach ($users as $user)
                                        @if(($user->partner_requesting == 'Requesting')) 
                                            <tr class="text-center">
                                            <td> {{ $user->id }}</td>
                                            <td> {{ $user->phone }} </td>
                                            <td> {{ $user->email }} </td>
                                            <td>
                                                <a href="{{ url('create-partner/'.$user->id) }}"> Register </a>
                                            </td>
                                            </tr>
                                        @endif                                          
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="box table-container mb-4">
                        <div class="title d-flex justify-content-between align-items-center">    
                            <h4 class="py-3">Partner Approval</h4>
                        </div>
                        <div class="table-responsive mb-3">
                            <table class="table table-dark table-striped">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>    
                                    @foreach ($users as $user)
                                        @if(($user->partner_requesting == 'Checking')) 
                                            <tr class="text-center">
                                            <td> {{ $user->id }}</td>
                                            <td> {{ $user->partner->name }}</td>
                                            <td> {{ $user->partner->description }}</td>
                                            <td> {{ $user->phone }} </td>
                                            <td> {{ $user->email }} </td>
                                            <td>
                                                <form method="POST" action="{{ url('approve-partner/'.$user->id)}}">
                                                    @csrf
                                                    @method('PUT')

                                                    <button name='partner_requesting' class="btn btn-success" type="submit" value='Approved'>Approve</button>
                                                </form>
                                                <form method="POST" action="{{ url('deny-partner/'.$user->id)}}">
                                                    @csrf
                                                    @method('PUT')

                                                    <button name='partner_requesting' class="btn btn-danger" type="submit" value='Denied'>Deny</button>
                                                </form>
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
@endsection