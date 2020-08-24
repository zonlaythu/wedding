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
      public function packages($value='')
    {
        return $this->belongsToMany('App\Package','service_package')
                ->withTimestamps();
    }
    
}

