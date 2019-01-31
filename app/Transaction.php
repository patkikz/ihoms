<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'cashier', 'amount' , 'tenant_id' , 'amount' , 'transactionFor'
    ];
    public function tenants()
    {
        return $this->belongsTo(Tenant::class, 'tenant_id');
    }

    public function users(){
        return $this->belongsTo(User::class, 'cashier');
    }
}
