<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relationship extends Model
{
    protected $guarded = [];

    public function familyMember()
    {
        return $this->hasMany(FamilyMember::class);
    }
}
