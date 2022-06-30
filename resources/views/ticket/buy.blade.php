@extends('main.app')

@section('content')
<div class="customer-information container col-11">

    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <div class="row py-3">
        <div class="content col-md-7 col-12 my-3">
            <div class="head d-flex justify-content-between align-items-center">
                <h4 class="fw-bold m-0">Ticket Information</h4>
                <a class="btn btn-danger" href="{{ url()->previous() }}"> Back </a>
            </div>
            <div class="body col-md-12">
                <div class="ticket-information">
                    <h4 class="fw-bold m-0"> {{ $ticket->name }} </h4> 
                    <p class="fw-bold m-0">{{ $ticket->partner->industry->name }} - {{ $ticket->partner->location->name }}</p>
                    <p class="fw-bold m-0"> price: <i class="fa-solid fa-dollar-sign text-success"></i>{{ $ticket->price }}</p>
                    <p class="text-secondary m-0">Date Posted: {{ isset($ticket->created_at) ? $ticket->created_at->format('m / d / Y') : $ticket->name }} </p>
                </div>
                <div class="ticket-information">
                    <h5 class="fw-bold m-0"> Ticket Descritpion </h5>	
                    <p class="m-0"> {{ $ticket->description }} </p>
                </div>
                <div class="ticket-photo ticket-information">
                    <h5 class="fw-bold my-2"> Photos </h5>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                            <figure class="image">
                                <img src="https://luxurytravelvietnam.com/blog/wp-content/uploads/2020/02/Phnom-Phenh-Royal-Palace-history.jpg" alt="Royal Palace Picture">
                            </figure>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                            <figure class="image">
                                <img src="https://www.khmertimeskh.com/wp-content/uploads/2020/05/804.jpg" alt="Royal Palace Picture">
                            </figure>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                            <figure class="image">
                                <img src="https://www.khmertimeskh.com/wp-content/uploads/2017/07/9-bottom-pix.jpg" alt="Royal Palace Picture">
                            </figure>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                            <figure class="image">
                                <img src="https://media.istockphoto.com/photos/phnom-penh-cityscape-picture-id626461916?k=20&m=626461916&s=612x612&w=0&h=ZlJQvje4nd5U79kg7kvSew7a8W3Ck1RF2VUJAM42EhU=" alt="Royal Palace Picture">
                            </figure>
                        </div>
                    </div>
                </div>
                <form class="d-flex align-items-end" method="POST" action="">
                @csrf

                    <div class="col-md-4">
                        <label for="purchase_date" class="form-label">Please pick a date</label>
                        <div class="col-md-12">
                            <input id="purchase_date" type="date" class="form form-control @error('purchase_date') is-invalid @enderror" name="purchase_date" value="{{ old('purchase_date') }}" autocomplete="purchase_date" required>
                            @error('purchase_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center align-items-center">
                        <button type="submit" class="btn btn-success w-75 mx-2">
                            {{ __('Confirm') }}
                        </button>
                    </div>                    
                </form>
            </div>
        </div>
        <div class="col-md-5 my-3">
            <div class="content">
                <div class="company border-bottom mb-1">
                    <div class="logo">

                    </div>
                    <div class="name">
                        <h4> {{ $ticket->partner->name }} <i class="fas fa-check-circle text-success"></i> </h4>
                    </div>
                </div>
                <table class="table-borderless">
                    <tbody>
                        <tr>
                            <th class="col-md-6">Company Name:</th> <td></td>
                        </tr>
                        <tr class="align-baseline border-bottom">
                            <th>Company Desciption: </th> <td>{{ $ticket->partner->description }}</td>
                        </tr>
                        <tr>
                            <th>Phone: </th> <td> {{ $ticket->partner->user->phone }}</td>
                        </tr>
                        <tr class="border-bottom">
                            <th>Email: </th> <td> {{ $ticket->partner->user->email }}</td>
                        </tr>
                        <tr>
                            <th>Website: </th> 
                            <td>
                                @if($ticket->partner->website == null) 
                                    <p class="text-danger m-0">Owner Not Provided</p> 
                                @else
                                    <a href="{{ $ticket->partner->website }}">{{ $ticket->partner->website }}</a>
                                @endif     
                            </td>                     
                        </tr>
                        <tr class="border-bottom">
                            <th>Find Us: </th>
                            <td>
                                @if(($ticket->partner->facebook == null) && ($ticket->partner->instagram == null) && ($ticket->partner->linkedin == null))
                                    <p class="text-danger m-0">Owner Not Provide</p>
                                @else
                                    @if(!($ticket->partner->facebook == null)) 
                                        <a class="btn btn-primary" href="{{ $ticket->partner->facebook }}"><i class="fab fa-facebook-square text-white"></i></a>
                                        <a class="btn btn-danger" href="{{ $ticket->partner->instagram }}"><i class="fab fa-instagram text-white"></i></a>
                                        <a class="btn btn-primary" href="{{ $ticket->partner->linkedin }}"><i class="fab fa-linkedin-in text-white"></i></a>
                                    @elseif(!($ticket->partner->instagram == null))
                                        <a class="btn btn-danger" href="{{ $ticket->partner->instagram }}"><i class="fab fa-instagram text-white"></i></a>
                                    @elseif(!($ticket->partner->linkedin == null))
                                        <a class="btn btn-primary" href="{{ $ticket->partner->linkedin }}"><i class="fab fa-linkedin-in text-white"></i></a>
                                    @endif
                                @endif 
                            </td>
                        </tr>
                        <tr>
                            <th>Office Location:</th> <td>{{ $ticket->partner->location->name }}</td>
                        </tr>
                        <tr class="border-bottom">
                            <th class="align-baseline">Office Address:</th> <td>{{ $ticket->partner->address }}</td>
                        </tr>
                        <tr>
                            <th>Become a memeber since:</th> <td>{{ isset($ticket->partner->created_at) ? $ticket->partner->created_at->format('m / d / Y') : $ticket->partner->users->email }}</td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>  
</div>
@endsection
