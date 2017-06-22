<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\School;

class HomeController extends Controller
{
    public function index()
    {
        $cities = \DB::table('schools')->distinct()->select('city')->get();
        return view('home', compact('cities'));
    }
}
