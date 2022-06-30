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
                <div class="head d-flex justify-content-between align-items-center mb-3">
                    <h4 class="m-0">Ticket List</h4>
                    @if(Auth::user()->user_role == "employee")
                        <a class="btn btn-primary" href="{{ url('create-ticket') }}"> Add Ticket </a>
                    @endif
                </div>
                <div class="body">
                    <div class="box py-1 px-4 mb-4">
                        @foreach ($tickets as $ticket)
                            @if (Auth::user()->user_role == "employee")
                                @if($ticket->partner_id == Auth::user()->employee->partner_id)
                                    @if(($ticket->partner_approval == 'approved')) 
                                        <div class="row ticket-item p-0 my-3">
                                            <div class="col-md-12 col-6 d-flex justiy-content-between">
                                                <div class="ticket-photo col-md-2 d-flex py-3 m-0">
                                                    <figure class="image m-0 d-flex align-self-center">
                                                        <img src="https://luxurytravelvietnam.com/blog/wp-content/uploads/2020/02/Phnom-Phenh-Royal-Palace-history.jpg" alt="Royal Palace Picture">
                                                    </figure>
                                                </div>
                                                <div class="info d-flex justify-content-between col-md-10 p-2 ms-3 ">
                                                    <div class="main col-md-10 border-end border-dark pe-3">
                                                        <div class="name d-flex">
                                                            <a class="fw-bold text-dark" href="#"> {{ $ticket->name }} </a>
                                                            <p class="rounded-3 btn-success text-white px-1 mx-3"><i class="fa-solid fa-dollar-sign"></i> {{ $ticket->price }}</p>
                                                        </div>
                                                        <p class="description">{{ $ticket->partner->description }}</p>
                                                        <p class="text-dark"><i class="fas fa-location-arrow text-success"></i> {{ $ticket->partner->location->name }} </p>
                                                        <div class="create_information d-flex">
                                                            <p class="">Create on: </p>
                                                            <p class="ms-1">{{ isset($ticket->created_at) ? $ticket->created_at->format('m / d / Y') : $ticket->partner->user->email }}</p>
                                                            <p class="ms-1"> (By: {{ $ticket->employee->first_name }} {{ $ticket->employee->last_name }})</p>
                                                        </div>
                                                    </div>
                                                    <div class="sub col-md-2 d-flex flex-column justify-content-evenly">
                                                        <div class="text-center">
                                                            <a class="fw-bold text-dark" href="#"> Info <i class="fa-solid fa-file text-warning fs-5"></i> </a>
                                                        </div>
                                                        @if(!($ticket->partner_approval == 'approved')) 
                                                            <div class=" text-center">
                                                                <a class="fw-bold text-dark" href="#"> Edit <i class="fa-solid fa-pen-to-square text-primary fs-5"></i> </a>
                                                            </div>
                                                            <div class=" text-center">
                                                                <a class="fw-bold text-dark" href="#"> Remove <i class="fa-solid fa-trash-can text-danger fs-5"></i> </a>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endif
                            @elseif ((Auth::user()->user_role == "partner"))
                                @if($ticket->partner_id == Auth::user()->partner->id)
                                    @if(($ticket->partner_approval == 'approved')) 
                                        <div class="row ticket-item p-0 my-3">
                                            <div class="col-md-12 col-6 d-flex justiy-content-between">
                                                <div class="ticket-photo col-md-2 d-flex py-3 m-0">
                                                    <figure class="image m-0 d-flex align-self-center">
                                                        <img src="https://luxurytravelvietnam.com/blog/wp-content/uploads/2020/02/Phnom-Phenh-Royal-Palace-history.jpg" alt="Royal Palace Picture">
                                                    </figure>
                                                </div>
                                                <div class="info d-flex justify-content-between col-md-10 p-2 ms-3 ">
                                                    <div class="main col-md-10 border-end border-dark pe-3">
                                                        <div class="name d-flex">
                                                            <a class="fw-bold text-dark" href="#"> {{ $ticket->name }} </a>
                                                            <p class="rounded-3 btn-success text-white px-1 mx-3"><i class="fa-solid fa-dollar-sign"></i> {{ $ticket->price }}</p>
                                                        </div>
                                                        <p class="description">{{ $ticket->partner->description }}</p>
                                                        <p class="text-dark"><i class="fas fa-location-arrow text-success"></i> {{ $ticket->partner->location->name }} </p>
                                                        <div class="create_information d-flex">
                                                            <p class="">Create on: </p>
                                                            <p class="ms-1">{{ isset($ticket->created_at) ? $ticket->created_at->format('m / d / Y') : $ticket->partner->user->email }}</p>
                                                            <p class="ms-1"> (By: {{ $ticket->employee->first_name }} {{ $ticket->employee->last_name }})</p>
                                                        </div>
                                                    </div>
                                                    <div class="sub col-md-2 d-flex flex-column justify-content-evenly">
                                                        <div class="text-center">
                                                            <a class="fw-bold text-dark" href="#"> Info <i class="fa-solid fa-file text-warning fs-5"></i> </a>
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
                                @endif
                            @endif
                        @endforeach
                    </div>
                    @if(Auth::user()->user_role == "partner")
                        <div class="box table-container pb-1 mb-4">
                            <div class="title">    
                                <h4 class="fw-bold pt-3">Ticket Approval</h4>
                            </div>
                            <div class="card table-responsive mb-3">
                                <table class="table table-striped m-0">
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Registered By</th>
                                            <th scope="col">Detail</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>    
                                        @foreach ($tickets as $ticket)
                                            @if($ticket->partner_id == Auth::user()->partner->id)
                                                @if(($ticket->partner_approval == 'requesting')) 
                                                    <tr class="text-center">
                                                        <td> {{ $ticket->id }}</td>
                                                        <td> {{ $ticket->name }}</td>
                                                        <td> {{ $ticket->price }}</td>
                                                        <td>  {{ $ticket->employee->first_name }} {{ $ticket->employee->last_name }} </td>
                                                        <td> <a class="fw-bold btn btn-primary" href="#"> Check </a> </td>
                                                        <td class="px-0">
                                                            <div class="d-flex justify-content-around">
                                                                <div>
                                                                    <form method="POST" action="{{ url('approve-ticket/'.$ticket->id)}}">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        
                                                                        <button name='partner_requesting' class="fw-bold btn btn-success px-1" type="submit" value='Approved'>Approve</button>
                                                                    </form>
                                                                </div>
                                                                <div>
                                                                    <form method="POST" action="{{ url('deny-ticket/'.$ticket->id)}}">
                                                                        @csrf
                                                                        @method('PUT')

                                                                        <button name='partner_requesting' class="fw-bold btn btn-danger" type="submit" value='Denied'>Deny</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endif  
                                            @endif                                        
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection
