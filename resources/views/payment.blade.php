@extends('layouts.payment-app')

@section('content')

<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-12">
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


                </div>
            </div>
        </div>

    </div>
    <div class="row justify-content-md-start">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Please fill this form to proceed to payment') }}</div>
                <div class="card-body">
                    <form method="POST" action="">
                        @csrf

                        <h1>Payer Information</h1>
                        <div class="form-group row">
                            <label for="payer_name"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}</label>

                            <div class="col-md-6">
                                <input id="payer_name" type="text"
                                       class="form-control @error('payer_name') is-invalid @enderror"
                                       name="payer_name" required autocomplete="payer_name" autofocus>

                                @error('payer_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="payer_email"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="payer_email" type="text"
                                       class="form-control @error('payer_email') is-invalid @enderror"
                                       name="payer_email" required autocomplete="payer_email" autofocus>

                                @error('payer_email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="payer_phone"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="payer_phone" type="text"
                                       class="form-control @error('payer_phone') is-invalid @enderror"
                                       name="payer_phone" required autocomplete="payer_phone" autofocus>

                                @error('payer_phone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="payer_phone"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Order ID') }}</label>

                            <div class="col-md-6">
                                <input id="sender" type="text"
                                       class="form-control @error('sender') is-invalid @enderror"
                                       name="sender" value="{{ $row->order_id }}" required autocomplete="sender" autofocus readonly>

                                @error('sender')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="payer_phone"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Payment Detail') }}</label>

                            <div class="col-md-6">
                                <input id="sender" type="text"
                                       class="form-control @error('sender') is-invalid @enderror"
                                       name="sender" value="{{ $row->payment_detail }}" required autocomplete="sender" autofocus readonly>

                                @error('sender')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="payer_phone"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Payment Amount') }}</label>

                            <div class="col-md-6">
                                <input id="sender" type="text"
                                       class="form-control @error('sender') is-invalid @enderror"
                                       name="sender" value="{{ $row->due_amount }}" required autocomplete="sender" autofocus readonly>

                                @error('sender')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="payer_phone"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Bank Code') }}</label>

                            <div class="col-md-6">
                                <input id="sender" type="text"
                                       class="form-control @error('sender') is-invalid @enderror"
                                       name="sender" value="{{ $row->order_id }}" required autocomplete="sender" autofocus readonly>

                                @error('sender')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="selected_merchant"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Bank Code') }}</label>

                            <div class="col-md-6">
                                <input id="bank_code" type="text"
                                       class="form-control @error('selected_merchant') is-invalid @enderror"
                                       name="selected_merchant" required autofocus>

                                @error('selected_merchant')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <h1>Merchant Information</h1>
                        <div class="form-group row">
                            <label for="selected_merchant"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Selected Merchant') }}</label>

                            <div class="col-md-6">
                                <input id="selected_merchant" type="text"
                                       class="form-control @error('selected_merchant') is-invalid @enderror"
                                       name="selected_merchant" required autofocus>

                                @error('selected_merchant')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="merchant_id"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Payer Merchant ID') }}</label>

                            <div class="col-md-6">
                                <input id="merchant_id" type="text"
                                       class="form-control @error('merchant_id') is-invalid @enderror"
                                       name="merchant_id" required autocomplete="merchant_id" autofocus>

                                @error('merchant_id')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Select bank') }}</div>
                <div class="card-body">
                    <h5>
                    E-banks
                    </h5>
                    <hr>
                        <img src="http://gateway.sandbox.npay.com.np/Images/testbank_logo.png" alt="e-test_bank" id="e-test_bank" onclick="getEbank()">


                    <h5>
                        Mobile banks
                    </h5>
                    <hr>
                        <img src="http://gateway.sandbox.npay.com.np/Images/testbank_logo.png" alt="m-test_bank" id="m-test_bank" onclick="getMbank()">

                </div>
            </div>
        </div>

        @foreach ($list_banks['EBank'] as $bank)

        <script type="text/javascript">
            function getEbank()
            {
                document.getElementById("selected_merchant").value = "{{ $bank['Bank_Name'] }}";
                document.getElementById("bank_code").value = "{{ $bank['Bank_Code'] }}"
            }
            @endforeach

            @foreach ($list_banks['MBank'] as $bank)
            function getMbank()
            {
                document.getElementById("selected_merchant").value = "{{ $bank['Bank_Name'] }}";
                document.getElementById("bank_code").value = "{{ $bank['Bank_Code'] }}"
            }
            @endforeach
        </script>

        @endforeach
    </div>
</div>

@endsection