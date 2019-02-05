<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Arrear extends Model
{
    
    protected $table = 'arrears';

    protected $fillable = [
        'tenant_id', 'due_transaction_id', 'arrear'
    ];

    public function tenants(){
        return $this->belongsTo(Tenant::class, 'tenant_id');
    }

    public function dueTransaction(){
        return $this->belongsTo(DueTransaction::class, 'due_transaction_id');
    }
}
