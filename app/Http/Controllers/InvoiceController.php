<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoice;

class InvoiceController extends Controller
{

    public function index()
    {
        return view('individual_invoice_form');
    }

    public function storeInvoice(Request $request)
    {
        $invoice = new Invoice();

        $invoice->payer_name = request('payer_name');
        $invoice->payer_email = request('payer_email');
        $invoice->payer_phone = request('payer_phone');
        $invoice->payment_detail = request('payment_detail');
        $invoice->due_amount = request('due_amount');
        $invoice->order_id = request('order_id');
        $invoice->tin = request('tin');
        $invoice->specified_merchant = request('specified_merchant');
        $invoice->due_date = request('due_date');
        $invoice->reminder_type = request('reminder_type');
        $invoice->reminder_date = request('reminder_date');

//        $request->validate([
//            'payer_name' => 'required|max:255',
//            'payer_email' => 'required|max:150',
//            'payer_phone' => 'required|max:10',
//            'payment_detail' => 'required|max:255',
//            'due_amount' => 'required|max:7',
//            'order_id' => 'required|max:4',
//            'tin' => 'required|max:4',
//            'specified_merchant' => 'required|max:255',
//            'due_date' => 'required|max:255',
//            'reminder_type' => 'required|max:255',
//            'reminder_date' => 'required|max:255',
//        ]);
//
//        $invoice = new Invoice([
//            'payer_name' => $request->get('payer_name'),
//            'payer_email' => $request->get('payer_email'),
//            'payer_phone' => $request->get('payer_phone'),
//            'payment_detail' => $request->get('payment_detail'),
//            'due_amount' => $request->get('due_amount'),
//            'order_id' => $request->get('order_id'),
//            'tin' => $request->get('tin'),
//            'specified_merchant' => $request->get('specified_merchant'),
//            'due_date' => $request->get('due_date'),
//            'reminder_type' => $request->get('reminder_type'),
//            'reminder_date' => $request->get('reminder_date'),
//        ]);
        $invoice->save();

        return redirect('/individual_user/home');
    }
}
