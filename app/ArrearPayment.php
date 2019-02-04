<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArrearPayment extends Model
{
    protected $table = 'arrear_payments';

    protected $fillable = [
        'tenant_id', 'total_amount', 'tender', 'change'
    ];

    public function tenants()
    {
        return $this->belongsTo(Tenant::class, 'tenant_id');
    }

    public function arrearTransactions()
    {
        return $this->hasMany(ArrearTransaction::class);
    }
}
