<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\School;
use App\Rating;

class SchoolController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only('store');
    }

    public function index(Request $request)
    {
    	$city = $request->cities;
    	$schools = School::where('city', $city)->get();
    	
    	return view('schools', compact('schools'));
    }

    public function show(School $school)
    {
    	return view('school', compact('school'));
    }

    public function store(School $school)
    {
        $school->addRating(request('body'), request('score'));
        return back();
    }
}
