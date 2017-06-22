<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $table = 'ratings';
    //repalce with fillable
    protected $guarded = [];

    public function rateable()
    {
    	return $this->morphTo();
    }

    public function author()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }
}
