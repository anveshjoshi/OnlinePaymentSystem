<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoice;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function checkInvoice(Request $request)
    {
        $order_id = $request->input('order_id');
        $tin = $request->input('tin');

        $data = Invoice::where('order_id', $order_id)->where('tin', $tin)->get();
        return view('payment', compact('data'))
            ->with('i', (request()->input('page', 1)-1)*5);
    }
}
