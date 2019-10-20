<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoice;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{

    public function index()
    {
        return view('individual_invoice_form');
    }

    public function storeInvoice()
    {
        $invoice = new Invoice();

        $invoice->sender = request('sender');
        $invoice->sender_name = request('sender_name');
        $invoice->payer_name = request('payer_name');
        $invoice->payer_email = request('payer_email');
        $invoice->payer_phone = request('payer_phone');
        $invoice->payment_detail = request('payment_detail');
        $invoice->due_amount = request('due_amount');
        $invoice->order_id = $this->getOrderId();
        $invoice->tin = $this->getTin();
        $invoice->specified_merchant = request('specified_merchant');
        $invoice->due_date = request('due_date');
        $invoice->reminder_type = request('reminder_type');
        $invoice->reminder_date = request('reminder_date');
        $invoice->status = "unpaid";

        $invoice->save();

        return redirect('/individual_user/notification');
    }

    private function getOrderId(){

        do{
            $order_id = $this->generateUniqueCode();
            $checkExsitingOrderId = Invoice::where('order_id', $order_id)->get()->first();
        }while($checkExsitingOrderId);

       return $order_id;
    }

    private function getTin(){

        do{
            $tin = $this->generateUniqueCode();
            $checkExsitingTin = Invoice::where('tin', $tin)->get()->first();
        }while($checkExsitingTin);

        return $tin;
    }

    private function generateUniqueCode(){
        return rand(0000, 9999);
    }


    public function viewTransactionHistory()
    {
        $invoice = Invoice::where('sender', Auth::guard('individual_user')->user()->phone)->latest()->paginate(5);
        return view('transaction_history', compact('invoice'))
                        ->with('i', (request()->input('page', 1)-1)*5);
    }

    public function showAllTransactions()
    {
        $invoice = Invoice::latest()->paginate(5);
        return view('all_transactions', compact('invoice'))
            ->with('i', (request()->input('page', 1)-1)*5);
    }

    public function updatePaymentStatus(Request $request)
    {
        $status_code = $request->input('STATUS_CODE');
        $transaction_id = $request->input('TRANSACTIONID');
        $order_id = $request->input('ORDERID');


        if($status_code==="111")
        {
            $invoice = Invoice::where('order_id', $order_id)->update(['status' => "paid"])->update(['transaction_id' => $transaction_id]);
        }

        return view('success')->with('status_code', $status_code)->with('transaction_id', $transaction_id);
    }
}
