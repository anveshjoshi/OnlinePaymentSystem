@extends('layouts.payment-app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Invoice details') }}</div>

                <div class="card-body">
                @foreach($data as $row)
                    <div class="form-group row">
                        <div class="col-md-6">
                            {{ __('Sender') }}
                        </div>

                        <div class="col-md-6">
                            {{$row->sender_name }}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">
                            {{ __('Order_ID') }}
                        </div>

                        <div class="col-md-6">
                            {{ $row->order_id }}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">
                            {{ __('TIN Number') }}
                        </div>

                        <div class="col-md-6">
                            {{ $row->tin }}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">
                            {{ __('Payment Detail') }}
                        </div>

                        <div class="col-md-6">
                            {{ $row->payment_detail }}
                        </div>
                    </div>

                    <div class="form-group row">
                            <div class="col-md-6">
                                {{ __('Due Amount') }}
                            </div>

                            <div class="col-md-6">
                                {{ $row->due_amount }}
                            </div>
                    </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                {{ __('Due Date') }}
                            </div>

                            <div class="col-md-6">
                                {{ $row->due_date }}
                            </div>
                        </div>

                        <div class="form-group row">
                        <div class="col-md-6">
                            {{ __('Specified Merchant') }}
                        </div>

                        <div class="col-md-6">
                            @foreach($row->specified_merchant as $merchant)
                                {{ $merchant }} |
                            @endforeach
                        </div>
                </div>

                @endforeach
                </div>
            </div>
        </div>

    </div>

    <div class>

    </div>
</div>

@endsection