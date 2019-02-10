<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DueTransaction extends Model
{
    protected $fillable = [
        'tenant_id' , 'due_id' ,'month', 'amount'
    ];

    public function dues(){
        return $this->belongsTo(Due::class, 'due_id');
    }

    public function tenants(){
        return $this->belongsTo(Tenant::class, 'tenant_id');
    }

    public function arrear(){
        return $this->hasOne(Arrear::class);
    }

    public function months(){
        return $this->belongsTo(Month::class, 'month');
    }
}
