<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BoardResolution extends Model
{
    protected $fillable = [
        'title', 'description', 'uploader', 'file'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'uploader');
    }
}
