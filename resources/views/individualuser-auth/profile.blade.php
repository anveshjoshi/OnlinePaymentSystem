@extends('layouts.individualuser-app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Profile') }}</div>

                    <div class="card-body">

                            <div class="form-group row">
                                <div class="col-md-6">
                                    {{ __('Full Name') }}
                                </div>

                                <div class="col-md-6">
                                    {{ Auth::guard('individual_user')->user()->name }}
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    {{ __('E-Mail Address') }}
                                </div>

                                <div class="col-md-6">
                                    {{ Auth::guard('individual_user')->user()->email }}
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    {{ __('Phone Number') }}
                                </div>

                                <div class="col-md-6">
                                    {{ Auth::guard('individual_user')->user()->phone }}
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    {{ __('Business Nature') }}
                                </div>

                                <div class="col-md-6">
                                    {{ Auth::guard('individual_user')->user()->business }}
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    {{ __('Address') }}
                                </div>

                                <div class="col-md-6">
                                    {{ Auth::guard('individual_user')->user()->address }}
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="button" class="btn btn-primary">
                                        <a href="{{ route('individual_user.kyc')  }}" style="text-decoration: none; color: #fff;">{{ __('Update KYC') }}</a>
                                    </button>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
