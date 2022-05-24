@extends('main.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            @if(session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif

            <div class="content">
                <div class="head d-flex justify-content-between align-items-center mb-2">
                    <h4 class="m-0">Register New Partner</h4>
                    <a class="btn btn-danger" href="{{ url('index-master') }}"> Back </a>
                </div>
                <div class="body">
                    <div class="row">
                        <form method="POST" action="{{ url('store-company')}}"  method="POST">
                        @csrf
                        
                        <div class="mb-2">
                            <label for="company_name" class="col-form-label text-md-end">{{ __('Name') }}</label>
                            <div class="col-md-12">
                                <input id="company_name" type="text" class="form form-control @error('company_name') is-invalid @enderror" name="location_name" value="{{ old('location_name') }}" autocomplete="location_name" required placeholder="Input the company name">
                                    @error('location_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                        <div class="mb-2">
                            <label for="company_description" class="col-form-label text-md-end">{{ __('Description') }}</label>
                            <div class="col-md-12">
                                <textarea id="company_description" class="form form-control @error('company_description') is-invalid @enderror" rows="2" name="company_description" value="{{ old('company_description') }}" autocomplete="company_description" required placeholder="Describe the company"></textarea>
                                    @error('company_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <label for="company_industry" class="col-form-label text-md-end">{{ __('Industry') }}</label>
                                <select class="form form-control" id="company_industry">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="company_location" class="col-form-label text-md-end">{{ __('Location') }}</label>
                                <select class="form form-control" id="company_location">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label for="company_address" class="col-form-label text-md-end">{{ __('Address') }}</label>
                            <div class="col-md-12">
                                <textarea id="company_address" class="form form-control @error('company_address') is-invalid @enderror" rows="1" name="company_address" value="{{ old('company_address') }}" autocomplete="company_address" required placeholder="Input the company address"></textarea>
                                    @error('company_address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
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
