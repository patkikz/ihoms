<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purpose extends Model
{
    protected $guarded = [];

    public function expense()
    {
        return $this->hasMany(Expense::class);
    }
}
