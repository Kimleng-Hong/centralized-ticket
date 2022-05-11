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
                    <h4 class="m-0">Edit Industry</h4>
                    <a class="btn btn-danger" href="{{ url('index-master') }}"> Back </a>
                </div>
                <div class="body">
                    <div class="row">
                        <form action="{{ url('update-industry/'.$industry->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="row mb-3">
                            <label for="industry_name" class="col-md-4 col-form-label text-md-end">{{ __('Industry Name') }}</label>

                            <div class="col-md-6">
                                <input id="industry_name" type="text" value="{{ $industry->name }}" class="form form-control @error('industry_name') is-invalid @enderror" name="industry_name" value="{{ old('industry_name') }}" autocomplete="industry_name" required placeholder="Input your new industry">

                                @error('industry_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0 col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-success">
                                {{ __('Confirm') }}
                            </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
