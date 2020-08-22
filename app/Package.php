<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
     protected $fillable = [
        'name','photo','status','category_id','service_id',
    ];

    public function categories($value='')
    {
    	return $this->hasMany('App\Category');
    	
    }
    public function services($value='')
    {
    	return $this->hasMany('App\Service');
    	
    }
}
