<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Traits\Rateable;

class Instructor extends Model
{
    use Rateable;
    
    protected $table='instructors';
    //repalce with fillable
    protected $guarded = [];

    public function ratings()
    {
    	return $this->morphMany('Rating', 'rateable');
    }

    public function schools()
    {
    	return $this->belongsTo('School', 'school_id');
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
