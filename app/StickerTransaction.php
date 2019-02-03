<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StickerTransaction extends Model
{
    protected $table = 'sticker_transactions';

    protected $fillable = [
        'vehicle_type', 'plate_no', 'amount', 'tenant_id', 'sticker_id'
    ];

    public function tenants()
    {
        return $this->belongsTo(Tenant::class, 'tenant_id');
    }

    public function carStickers()
    {
        return $this->belongsTo(CarSticker::class, 'sticker_id');
    }
}
