@extends('layouts.individualuser-app')

 @section('content')
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-md-8">
                 <div class="card">
                     <div class="card-header">{{ __('Notification') }}</div>

                     <div class="card-body">
                         <form method="POST" action=" {{ route('notification') }}">
                             @csrf
                             <div class="form-group row">
                                 <label for="reminder"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Set Reminder') }}</label>

                                 <div class="col-md-6">
                                     <input id="reminder" type="date"
                                            class="reminder-control @error('reminder') is-invalid @enderror"
                                            name="reminder" required autocomplete="reminder" autofocus>

                                     @error('payer_phone')
                                     <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     @enderror
                                 </div>
                             </div>
                             <button class="btn btn-primary">
                                 <a href="{{ url('notification')}} " style="text-decoration: none; color: #fff;">{{ __('Send Mail') }}</a>
                             </button>
                         </form>

                     </div>
                 </div>
             </div>
         </div>

     </div>
 @endsection
