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

    public function addRating($request)
    {
        $exists = \DB::table('ratings')->where('user_id',  \Auth::user()->id)->where('rateable_id', $this->id)->where('rateable_type', get_class($this))->first();
        
        if($exists){
            return \Redirect::back()->withErrors(['Već ste ostavili recenziju za ovu autoškolu.']);
        }

            Rating::create([
                'user_id' => \Auth::user()->id,
                'rateable_id' => $this->id,
                'rateable_type' => get_class($this),
                'body' => $request['body'],
                'score' => $request['score']
            ]);
        //}
    }
    
}
