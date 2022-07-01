@extends('main.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="welcome card row justify-content-center align-items-center text-center">
            
            @if(session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif

            <div class="d-flex justify-content-center align-items-center">
                <div class="col-md-6 text-md-center">
                    <img src="\images\bg.svg" width="65%" alt="">
                </div>
            <div class="col-md-6  text-md-start">
                <h1 class="hello">Hello, Welcome to</h1>
                <a href="/home" class="tinh_sroul btn btn-success fw-bold fs-5">Tinh Sroul <i class="fa-solid fa-angle-right text-white ps-2"></i></a>
            </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
