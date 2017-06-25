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

    public function schools()
    {
    	return $this->belongsTo('School', 'school_id');
    }

    public function addRating($request)
    {
         $exists = \DB::table('ratings')->where('user_id',  \Auth::user()->id)->where('rateable_id', $this->id)->where('rateable_type', get_class($this))->first();
        
        if($exists){
            return \Redirect::back()->withErrors(['Već ste ostavili recenziju za ovog instruktora.']);
        }

    	Rating::create([
            'user_id' => \Auth::user()->id,
            'rateable_id' => $this->id,
            'rateable_type' => get_class($this),
            'body' => $request['body'],
            'score' => $request['score']
        ]);
    }
}
