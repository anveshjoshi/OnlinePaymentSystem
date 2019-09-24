@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Profile') }}</div>

                    <div class="card-body">

                            <div class="form-group row">
                                <div class="col-md-6">
                                    {{ __('Company Name') }}
                                </div>

                                <div class="col-md-6">
                                    {{ $user->company_name }}
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    {{ __('Full Name') }}
                                </div>

                                <div class="col-md-6">
                                    {{ $user->name }}
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    {{ __('E-Mail Address') }}
                                </div>

                                <div class="col-md-6">
                                    {{ $user->email }}
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    {{ __('Phone Number') }}
                                </div>

                                <div class="col-md-6">
                                    {{ $user->phone }}
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    {{ __('Business Nature') }}
                                </div>

                                <div class="col-md-6">
                                    {{ $user->business }}
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    {{ __('Address') }}
                                </div>

                                <div class="col-md-6">
                                    {{ $user->address }}
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    {{ __('Website') }}
                                </div>

                                <div class="col-md-6">
                                    {{ $user->website }}
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="button" class="btn btn-primary">
                                        {{ __('Update KYC') }}
                                    </button>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
