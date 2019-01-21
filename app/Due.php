<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Due extends Model
{
    protected $fillable = [
        'tenant_id' , 'last_name' ,'first_name', 'middle_name', 'transaction_date', 'amount', 'tender', 'change'
    ];

    protected $dates = [
        'transaction_date'
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class, 'tenant_id');
    }

}

