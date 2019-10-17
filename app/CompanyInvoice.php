<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyInvoice extends Model
{
    protected $table = 'company_invoices';

    protected $fillable = [
        'sender', 'payer_name', 'payer_email', 'payer_phone', 'payment_detail', 'due_amount', 'order_id', 'tin', 'specified_merchant', 'due_date', 'reminder_type', 'reminder_date',
    ];

    protected $casts = [
        'specified_merchant' => 'array',
    ];
}
