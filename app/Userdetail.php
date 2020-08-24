<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userdetail extends Model
{
     protected $fillable = [
        'photo', 'phone', 'address','user_id',
    ];

}
