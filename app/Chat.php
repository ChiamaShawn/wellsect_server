<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    //
    protected $casts = [
        'answers' => 'array'
    ];
}
