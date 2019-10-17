<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KYC extends Model
{
    protected $table = 'kyc';

    protected $fillable = [
        'father_name', 'mother_name', 'grandfather_name', 'spouse_name', 'district', 'vdc', 'ward', 'dob', 'gender', 'occupation', 'identity_type', 'identity_number', 'issued_form', 'issued_date', 'front', 'back', 'pp_photo', 'individual_users_id',
    ];
}
