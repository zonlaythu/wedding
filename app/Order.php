<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
   protected $fillable = [
        'voucherno','orderdate','status','note','total','user_id','package_id',
    ];
}
