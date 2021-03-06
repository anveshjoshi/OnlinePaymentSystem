@extends('layouts.individualuser-app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('New Invoice') }}</div>
                    <div class="card-body">
                        <form method="POST" action=" {{ route('individual_user.invoice_form') }}">
                            @csrf

                            <div class="form-group row">

                                <div class="col-md-6">
                                    <input id="sender" type="text"
                                           class="form-control @error('sender') is-invalid @enderror"
                                           name="sender" value="{{ Auth::guard('individual_user')->user()->phone }}" required autocomplete="sender" autofocus readonly hidden>

                                    @error('sender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-md-6">
                                    <input id="sender_name" type="text"
                                           class="form-control @error('sender_name') is-invalid @enderror"
                                           name="sender_name" value="{{ Auth::guard('individual_user')->user()->name }}" required autocomplete="sender_name" autofocus readonly hidden>

                                    @error('sender_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

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

                            <h1>Transaction Information</h1>
                            <div class="form-group row">
                                <label for="payment_detail"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Payment Detail') }}</label>

                                <div class="col-md-6">
                                    <input id="payment_detail" type="text"
                                           class="form-control @error('payment_detail') is-invalid @enderror"
                                           name="payment_detail" required autocomplete="payment_detail" autofocus>

                                    @error('payment_detail')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="due_amount"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Due Amount') }}</label>

                                <div class="col-md-6">
                                    <input id="due_amount" type="number"
                                           class="form-control @error('due_amount') is-invalid @enderror"
                                           name="due_amount" required autocomplete="due_amount" autofocus>

                                    @error('due_amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="specified_merchant"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Specify Merchant') }}</label>

                                <div class="col-md-6">
                                    <input type="checkbox" id="specified_merchant" name="specified_merchant[]" value="E-Bank">E-Bank
                                    <input type="checkbox" id="specified_merchant" name="specified_merchant[]" value="M-Bank">M-Bank

                                    @error('specified_merchant')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="due_date"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Due Date') }}</label>

                                <div class="col-md-6">
                                    <input id="due_date" type="date"
                                           class="form-control @error('due_date') is-invalid @enderror" name="due_date"
                                           required autocomplete="due_date" autofocus>

                                    @error('due_date')
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
        </div>
    </div>
@endsection
