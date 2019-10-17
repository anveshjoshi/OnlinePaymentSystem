<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $table = 'invoice';

    protected $fillable = [
        'sender', 'sender_name', 'payer_name', 'payer_email', 'payer_phone', 'payment_detail', 'due_amount', 'order_id', 'tin', 'specified_merchant', 'due_date', 'reminder_type', 'reminder_date',
    ];

    protected $casts = [
        'specified_merchant' => 'array',
    ];
}
