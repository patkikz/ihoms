<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservationTransaction extends Model
{
    protected $fillable = [
        'tenant_id', 'reservation_type', 'amount', 'reservation_id'
    ];
    public function reservationType()
    {
        return $this->belongsTo(ReservationType::class, 'reservation_id');
    }

    public function tenants()
    {
        return $this->belongsTo(Tenant::class, 'tenant_id');
    }
}
