<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     protected $fillable = [
        'name','photo'
    ];

     public function services($value='')
    {
    	return $this->hasMany('App\Service');
    	
    }
    public function package($value='')
    {
    	return $this->belongsTo('App\Package');
    	
    }
}
