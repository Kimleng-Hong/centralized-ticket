@extends('main.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">

            @if(session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4 class="text-center"><i class="fas fa-shopping-bag pe-1"></i> Tinh Sruol</h4>
                </div>

                <div class="card-body">
                    <h6 class="text-uppercase fw-bold mb-4 text-center">
                        Contact Us
                    </h6>
                    <p class="text-center">
                        <i class="fas fa-home text-green me-3"></i> Phnom Penh, Cambodia
                    </p>
                    <p class="text-center">
                        <i class="fas fa-envelope text-green me-3"></i>
                        tinhsroul@test.com
                    </p>
                    <p class="text-center">
                        <i class="fas fa-phone text-green me-3"></i> +855 (11) 666-999 
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection