<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CompanyInvoice;
use Illuminate\Support\Facades\Auth;

class CompanyInvoiceController extends Controller
{
    public function index()
    {
        return view('company_invoice_form');
    }

    public function storeInvoice(Request $request)
    {
        $invoice = new CompanyInvoice();

        $invoice->sender = request('sender');
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

//        $request->validate([
//            'sender' => 'required|max:10',
//            'payer_name' => 'required|max:255',
//            'payer_email' => 'required|max:150',
//            'payer_phone' => 'required|max:10',
//            'payment_detail' => 'required|max:255',
//            'due_amount' => 'required|max:7',
//            'order_id' => 'required|max:4|unique:invoice',
//            'tin' => 'required|max:4',
//            'specified_merchant' => 'required|max:255',
//            'due_date' => 'required|max:255',
//            'reminder_type' => 'max:255',
//            'reminder_date' => 'max:255',
//        ]);
//
//        $invoice = new Invoice([
//            'sender' => $request->get('sender'),
//            'payer_name' => $request->get('payer_name'),
//            'payer_email' => $request->get('payer_email'),
//            'payer_phone' => $request->get('payer_phone'),
//            'payment_detail' => $request->get('payment_detail'),
//            'due_amount' => $request->get('due_amount'),
//            'order_id' => $order_id,
//            'tin' => $request->get('tin'),
//            'specified_merchant' => $request->get('specified_merchant'),
//            'due_date' => $request->get('due_date'),
//            'reminder_type' => $request->get('reminder_type'),
//            'reminder_date' => $request->get('reminder_date'),
//        ]);
        $invoice->save();

        return redirect('/notification');
    }

    private function getOrderId(){

        do{
            $order_id = $this->generateUniqueCode();
            $checkExsitingOrderId = CompanyInvoice::where('order_id', $order_id)->get()->first();
        }while($checkExsitingOrderId);

        return $order_id;
    }

    private function getTin(){

        do{
            $tin = $this->generateUniqueCode();
            $checkExsitingTin = CompanyInvoice::where('tin', $tin)->get()->first();
        }while($checkExsitingTin);

        return $tin;
    }

    private function generateUniqueCode(){
        return rand(000000, 999999);
    }


    public function viewTransactionHistory()
    {
        $invoice = CompanyInvoice::where('sender', Auth::user()->phone)->latest()->paginate(5);
        return view('transaction_history', compact('invoice'))
            ->with('i', (request()->input('page', 1)-1)*5);
    }

    public function showAllTransactions()
    {
        $invoice = CompanyInvoice::latest()->paginate(5);
        return view('all_transactions', compact('invoice'))
            ->with('i', (request()->input('page', 1)-1)*5);
    }
}
