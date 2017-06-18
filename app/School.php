<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
	protected $table = 'schools';
	//repalce with fillable
	protected $guarded = [];

    public function ratings() {
    	return $this->morphMany('Rating', 'rateable');
    }
     public function instructors() {
        return $this->hasMany('Instructor', 'school_id', 'id');
    }
}
