<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name','type','photo','price','category_id',
    ];

     public function category($value='')
    {
    	return $this->belongsTo('App\Category');
    	
    }
     public function package($value='')
    {
    	return $this->belongsTo('App\Package');
    	
    }
}
