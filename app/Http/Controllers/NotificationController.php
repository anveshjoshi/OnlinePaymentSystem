<?php

namespace App\Http\Controllers;

use App\Invoice;
use App\Mail\notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{

    function send()
    {

        $field = Invoice::where('sender', Auth::guard('individual_user')->user()->phone)->first()->get();

        Mail::to ('arbin@gmail.com')->send(new notification ($field));

        return view('dynamic_email_template', compact('field'));
    }

}
