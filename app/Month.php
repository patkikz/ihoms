<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Month extends Model
{
    protected $table = 'months';


    public function dueTransactions()
    {
        return $this->hasMany(DueTransaction::class);
    }
    
    public function arrearTransactions(){
        return $this->hasMany(ArrearTransaction::class);
    }
}
