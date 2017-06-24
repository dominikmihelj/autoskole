<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Instructor;
use App\School;
use App\Rating;

class InstructorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('store');
    }

    public function index(School $school, Instructor $instructor)
    {
        return view('instructor', compact('instructor'));
    }

    public function show(School $school)
    {
        return view('create', compact('school'));
    }

    public function create(Request $request, School $school)
    {
        Instructor::create([
            'school_id' => $school->id,
            'name' => $request['name'],
            'telephone' => $request['telephone'],
            'car' => $request['car'],
            'categories' => $request['categories']
        ]);
        return redirect('/schools/'.$school->id);
    }

    public function store(School $school, Instructor $instructor)
    {
    	$instructor->addRating(request('body'), request('score'));
        return back();
    }
}
