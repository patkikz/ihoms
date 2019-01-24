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

    public function familyMembers()
    {
        return $this->hasMany(FamilyMember::class);
    }
}
