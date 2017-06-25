<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;


class ContactController extends Controller
{
    public function index()
    {
    	return view('contact');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
    		'email'=> 'required',    		
    		'name'=> 'required',
    		'subject' => 'required',
    		'comment' => 'required'
    	]);

    	$data = [
    		'address' => $request['email'],
        	'name' => $request['name'],
        	'subject' => $request['subject'],
        	'comment' => $request['comment']
    	];

    	\Mail::to('dodo.unit@gmail.com')->send(new ContactMail($data));

    	return redirect('/');
    }
}
