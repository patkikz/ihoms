<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    protected $guarded = [
    ];


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
}
