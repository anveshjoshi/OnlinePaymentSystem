@extends('layouts.payment-app')

@section('content')
    <div class="container" style="padding-top: 200px">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">{{ __('Payment Status') }}</div>

                    <div class="card-body">
                        @if($status_code==="111")
                            <h4 align="center">Payment Successful!</h4>
                            <hr>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    {{ __('Transaction ID') }}
                                </div>

                                <div class="col-md-6">
                                    {{ $transaction_id }}
                                </div>
                            </div>
                        @else
                            <h4>Payment Failed!</h4>
                        @endif

                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection

