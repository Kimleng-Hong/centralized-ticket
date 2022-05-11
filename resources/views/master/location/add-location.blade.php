@extends('main.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            @if(session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif

            <div class="content">
                <div class="head d-flex justify-content-between align-items-center mb-5">
                    <h4 class="m-0">Add New Location</h4>
                    <a class="btn btn-danger" href="{{ url('index-master') }}"> Back </a>
                </div>
                <div class="body">
                    <div class="row">
                        <form method="POST" action="{{ url('store-location')}}"  method="POST">
                        @csrf
                        
                        <div class="row mb-3">
                            <label for="location_name" class="col-md-4 col-form-label text-md-end">{{ __('Location Name') }}</label>

                            <div class="col-md-6">
                                <input id="location_name" type="text" class="form form-control @error('location_name') is-invalid @enderror" name="location_name" value="{{ old('location_name') }}" autocomplete="location_name" required placeholder="Input your new location">

                                @error('location_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Confirm') }}
                                </button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
