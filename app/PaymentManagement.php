<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentManagement extends Model
{
    protected $table = 'payment_managements';
    protected $fillable = [
        'payment_for' , 'amount'
    ];
}
