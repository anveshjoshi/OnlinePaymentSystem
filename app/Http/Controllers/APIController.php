<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
    public function index(Request $request){
        ?>

        <form id="bankPay" action="http://techpay.technorio.com.np/sandbox/public/api/v1/nPay/initiate" method="post">
            <input type="hidden" name="merchantServiceCode" value="TOBPS">
            <input type="hidden" name="merchantServiceApiKey" value="TOBPS">
            <input type="hidden" name="payerName" value="<?php  echo $request->input('payer_name') ?>">
            <input type="hidden" name="payerEmail" value="<?php echo $request->input('payer_email') ?>">
            <input type="hidden" name="payerContact" value="<?php echo $request->input('payer_phone') ?>">
            <input type="hidden" name="orderID" value="<?php echo $request->input('order_id')?>">
            <input type="hidden" name="paymentDescription" value="<?php echo $request->input('payment_detail') ?>">
            <input type="hidden" name="paymentAmount" value="<?php echo  $request->input('due_amount') ?>">
            <input type="hidden" name="paymentGatewayCode" value="<?php echo $request->input('bank_code') ?>">
            <input type="hidden" name="paymentGateway" value="nPay">
        </form>
        <script type="text/javascript">
            document.getElementById('bankPay').submit(); // SUBMIT FORM
        </script>
        <?php
    }

}
