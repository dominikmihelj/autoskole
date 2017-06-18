<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $table='instructors';
    //repalce with fillable
    protected $guarded = [];

    public function ratings() {
    	return $this->morphMany('Rating', 'rateable');
    }
    public function schools(){
    	return $this->belongsTo('School', 'school_id');
    }
}
