<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    public function tenant()
    {
        return $this->hasMany(Tenant::class);
    }
}
