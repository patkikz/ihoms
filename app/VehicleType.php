<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleType extends Model
{
    public function stickerTransactions()
    {
      return $this->hasMany(StickerTransaction::class);   
    }
}
