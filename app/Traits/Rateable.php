<?php 

namespace App\Traits;

trait Rateable
{
    public function ratings()
    {
        return $this->morphMany('App\Rating', 'rateable');
    }

    public function averageRating()
    {
        return $this->ratings()->avg('score');
    }

    public function countRating()
    {
        return $this->ratings()->count('score');
    }

    public function userAverageRating()
    {
        return $this->ratings()->where('user_id', \Auth::id())->avg('rating');
    }

}