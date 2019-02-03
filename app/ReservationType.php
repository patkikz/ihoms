<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservationType extends Model
{
    public function reservationTransactions(Type $var = null)
    {
        return $this->hasMany(ReservationTransaction::class);
    }
    
}
