<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
     protected $fillable = [
        'name','photo','status',
    ];

     public function categories($value='')
    {
        return $this->hasMany('App\Category');
        
    }

     public function services($value='')
    {
      return $this->belongsToMany('App\Service','service_package')->withTimestamps();
    } 
}
