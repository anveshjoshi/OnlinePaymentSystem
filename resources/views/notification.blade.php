@extends('layouts.individualuser-app')

 @section('content')
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-md-6">
                 <div class="card">
                     <div class="card-header">{{ __('Notification') }}</div>

                     <div class="card-body">
                         <form method="POST" action=" {{ route('notification') }}">
                             @csrf
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
