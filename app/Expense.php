<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    
    protected $guarded = [

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function purposes()
    {
        return $this->belongsTo(Purpose::class, 'purpose');
    }

}
