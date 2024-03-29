<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    protected $guarded = [
    ];

    protected $dates = ['birth_date', 'created_at'];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function dues()
    {
        return $this->hasMany(Due::class);
    }

    public function dueTransactions(){
        return $this->hasMany(DueTransaction::class);
    }

    public function familyMembers()
    {
        return $this->hasMany(FamilyMember::class);
    }

    public function transactions(){
        return $this->hasMany(Transaction::class);
    }

    public function arrears(){
        return $this->hasMany(Arrear::class);
    }

    public function stickerTransactions(){
        return $this->hasMany(StickerTransaction::class);
    }
    
    public function carStickers(){
        return $this->hasMany(CarSticker::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function reservationTransactions()
    {
        return $this->hasMany(ReservationTransaction::class);
    }

    public function arrearPayments()
    {
        return $this->hasMany(ArrearPayment::class);
    }
    
    public function arrearTransactions()
    {
        return $this->hasMany(ArrearTransaction::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'birth_place');
    }

    public function provinces(){
        return $this->belongsTo(Province::class, 'province');
    }
}
