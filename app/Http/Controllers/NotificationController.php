<?php

namespace App\Http\Controllers;

use App\Mail\notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NotificationController extends Controller
{
    //
    function index()
    {
        return view('individual_invoice_form');
    }

    function send(Request $request)
    {


        $data = array(
            'payer_name' => $request -> payer_name ,
        );


        Mail::to ('arbin@gmail.com')->send(new notification ($data));

        return redirect('/individual_user/home');
    }

}
