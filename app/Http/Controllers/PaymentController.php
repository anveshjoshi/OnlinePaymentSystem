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

        $list_banks = $this->listOfBanks();

        return view('payment', compact(['data','list_banks']))
            ->with('i', (request()->input('page', 1)-1)*5);
    }

    private function listOfBanks(){
        $list_banks =  json_decode(file_get_contents('https://techpay.technorio.com.np/sandbox/public/api/v1/nPay/get-bank-list?serviceCode=TOBPS&serviceApiKey=TOBPS' ), true);
       return $list_banks;
    }
}
