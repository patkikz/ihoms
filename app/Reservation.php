<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'tenant_id', 'start_time', 'end_time', 'reserved_date', 'total_amount', 'tender', 'change'
    ];

    protected $dates = [
        'reserved_date',
    ];

    public function reservationTransactions()
    {
        return $this->hasMany(ReservationTransaction::class);
    }
    
    public function tenants()
    {
        return $this->belongsTo(Tenant::class, 'tenant_id');
    }
}
