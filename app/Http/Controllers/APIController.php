<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
    public function getBanks(){
        $banks = json_decode(file_get_contents('https://techpay.technorio.com.np/sandbox/public/api/v1/nPay/get-bank-list?serviceCode=TOBPS&serviceApiKey=TOBPS'));
        dd($banks);
    }
}
