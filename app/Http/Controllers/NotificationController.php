<?php

namespace App\Http\Controllers;

use App\Mail\notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{

    function send(Request $request)
    {

        
        $data = array(
            'payer_name' => $request -> payer_name ,
            'payer_email' => $request -> payer_email,
        );


        Mail::to ('arbin@gmail.com')->send(new notification ($data));

        return redirect('/individual_user/home');
    }

}
