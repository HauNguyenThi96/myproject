<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addess';
 	protected $primaryKey = " id";
 	
    public function region(){
    	return $this->belongTo('App\Region','region_id','id');
    }

}
