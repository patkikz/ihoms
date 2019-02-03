<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarSticker extends Model
{
    protected $fillable = [
        'tenant_id', 'date_from', 'date_to', 'total_amount', 'tender', 'change'
    ];


    public function tenants()
    {
        return $this->belongsTo(Tenant::class , 'tenant_id');   
    }

    public function stickerTransactions()
    {
        return $this->hasMany(StickerTransaction::class);
    }

    public function vehicleTypes()
    {
        return $this->belongsTo(VehicleType::class, 'vehicle_type');
    }
}
