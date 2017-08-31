<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subproduct extends Model
{
        public function product(){

    	return $this->belongsTo('App\Product');
    }
    	   public function color(){

    	return $this->belongsTo('App\Color');
    }
    
}
