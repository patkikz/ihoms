<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\PostCreated;

class Post extends Model
{
    protected $table = 'posts';

    public $primaryKey = 'id';

    public $timestamps = true;

    public function user(){
        return $this->belongsTo(User::class);
    }



}
