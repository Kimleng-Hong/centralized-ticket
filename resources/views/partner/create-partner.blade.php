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
                    <h4 class="m-0">Partner Bussiness Information</h4>
                </div>
                <div class="body">
                    <div class="row">
                        <form method="POST" action="{{ url('store-partner/'.$user->id)}}">
                        @csrf
                        
                        <div class="mb-2">
                            <label for="company_name" class="col-form-label text-md-end">{{ __('Name') }}</label>
                            <div class="col-md-12">
                                <input id="company_name" type="text" class="form form-control @error('company_name') is-invalid @enderror" name="company_name" value="{{ old('company_name') }}" autocomplete="company_name" required placeholder="Input the company name">
                                    @error('company_name')
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
                                <select class="form form-control" id="company_industry" name="company_industry">
                                    @foreach ($industry as $industry)
                                        <option value='{{ $industry->name }}'> {{ $industry->name }} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="company_location" class="col-form-label text-md-end">{{ __('Location') }}</label>
                                <select class="form form-control" id="company_location" name="company_location">
                                    @foreach ($location as $location)
                                        <option value='{{ $location->name }}'> {{ $location->name }} </option>
                                    @endforeach
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
                        <div class="mb-2">
                            <label for="company_website" class="col-form-label text-md-end">{{ __('Website') }}</label>
                            <div class="col-md-12">
                                <input id="company_website" type="text" class="form form-control @error('company_website') is-invalid @enderror" name="company_website" value="{{ old('company_website') }}" autocomplete="company_website" placeholder="Input the company website">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-4">
                                <label for="company_facebook" class="col-form-label text-md-end">{{ __('Facebook') }}</label>
                                <input id="company_facebook" type="text" class="form form-control @error('company_facebook') is-invalid @enderror" name="company_facebook" value="{{ old('company_facebook') }}" autocomplete="company_facebook">
                            </div>
                            <div class="col-md-4">
                                <label for="company_instagram" class="col-form-label text-md-end">{{ __('Instagram') }}</label>
                                <input id="company_instagram" type="text" class="form form-control @error('company_instagram') is-invalid @enderror" name="company_instagram" value="{{ old('company_instagram') }}" autocomplete="company_instagram">
                            </div>
                            <div class="col-md-4">
                                <label for="company_linkedin" class="col-form-label text-md-end">{{ __('Linkedin') }}</label>
                                <input id="company_linkedin" type="text" class="form form-control @error('company_linkedin') is-invalid @enderror" name="company_linkedin" value="{{ old('company_linkedin') }}" autocomplete="company_linkedin">
                            </div>
                        </div>

                        <div class="row mt-4 mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="w-100 btn btn-primary">
                                    {{ __('Request Approval') }}
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
