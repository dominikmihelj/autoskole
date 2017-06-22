<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Traits\Rateable;

class School extends Model
{
    use Rateable;

	protected $table = 'schools';
	//repalce with fillable
	protected $guarded = [];

     public function instructors()
     {
        return $this->hasMany('App\Instructor', 'school_id', 'id');
    }

    public function addRating($body, $score)
    {
    	Rating::create([
            'user_id' => \Auth::user()->id,
            'rateable_id' => $this->id,
            'rateable_type' => get_class($this),
            'body' => $body,
            'score' => $score
        ]);
    }
    
}
