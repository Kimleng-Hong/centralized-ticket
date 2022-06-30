@extends('main.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            
            @if(session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif

            <div class="welcome">
                
            </div>
        </div>
    </div>
</div>
@endsection
