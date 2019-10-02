<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $table = 'invoice';

    protected $fillable = [
        'payer_name', 'payer_email', 'payer_phone', 'payment_detail', 'due_amount', 'order_id', 'tin', 'specified_merchant', 'due_date', 'reminder_type', 'reminder_date',
    ];
}
