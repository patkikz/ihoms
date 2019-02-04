<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArrearTransaction extends Model
{
    protected $table = 'arrear_transactions';

    protected $fillable = [
        'month', 'amountToPay', 'actualAmountPaid', 'tenant_id', 'arrear_payment_id'
    ];

    public function tenants()
    {
        return $this->belongsTo(Tenant::class, 'tenant_id');
    }

    public function arrearPayments()
    {
        return $this->belongsTo(ArrearPayment::class, 'arrear_payment_id');
    }
}
