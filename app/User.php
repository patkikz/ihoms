<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array 
     */ 
    protected $fillable = [
        'name', 'email', 'password', 'tenant_id'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = ['email_verified_at'];
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function transactions(){
        return $this->hasMany(Transaction::class);
    }
}
