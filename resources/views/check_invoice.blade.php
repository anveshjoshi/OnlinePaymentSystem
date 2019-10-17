@extends('layouts.payment-app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Check invoice') }}</div>

                    <div class="card-body">
                        <form method="GET" action="{{ route('check_invoice') }}">

                            <div class="form-group row">
                                <label for="order_id" class="col-md-4 col-form-label text-md-right">{{ __('Order ID') }}</label>

                                <div class="col-md-6">
                                    <input id="order_id" type="number" class="form-control @error('order_id') is-invalid @enderror" name="order_id" required autocomplete="order_id" autofocus>

                                    @error('order_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tin" class="col-md-4 col-form-label text-md-right">{{ __('TIN Number') }}</label>

                                <div class="col-md-6">
                                    <input id="tin" type="number" class="form-control @error('tin') is-invalid @enderror" name="tin" required autocomplete="tin">

                                    @error('tin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Check') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection