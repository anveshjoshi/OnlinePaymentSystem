@extends('layouts.individualuser-app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <button class="btn btn-primary">Transaction History</button>
                    <button class="btn btn-primary">
                        <a href="{{ route('individual_user.invoice_form')  }}" style="text-decoration: none; color: #fff;">{{ __('New Transaction') }}</a>
                    </button>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
