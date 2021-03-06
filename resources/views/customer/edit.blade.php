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
                    <h4 class="m-0">Edit Account</h4>
                    <a class="btn btn-danger" href="{{ url()->previous() }}"> Back <i class="fa-solid fa-pen ps-2"></i> </a>
                </div>
                <div class="body">
                    <div class="row">
                        <div class="left col-md-6 col-6 me-5">
                            <form action="{{ url('update-user/'.Auth::id()) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <th>Phone Number:</th>
                                            <td><input type="text" name="phone" value="{{ $user->phone }}" class="form form-control"></td>
                                        </tr>
                                        <tr>
                                            <th>Email Address:</th>
                                            <td><input type="text" name="email" value="{{ $user->email }}" class="form form-control"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><button type="submit" class="btn btn-primary w-100"> Confirm </button></td>                                        
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                        <div class="right col-md-3 col-sm-4 "> 

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection
