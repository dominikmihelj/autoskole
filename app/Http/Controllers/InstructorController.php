<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Insstructor;
use App\School;
use App\Rating;

class InstructorController extends Controller
{
    public function index()
    {

    }

    public function create()
    {

    }

    public function store(Instructor $instructor)
    {
    	$instructor->addRating(request('body'), request('score'));
        return back();
    }
}
