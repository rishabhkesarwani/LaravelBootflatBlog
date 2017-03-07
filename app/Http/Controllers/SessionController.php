<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{

	public function __construct()
	{
		$this->middleware('guest', ['except' => 'destory']);
	}

    public function create()
    {
    	return view('sessions.create');
    }

    public function store()
    {
    	$this->validate(request(), [
    		'email' => 'required|email',
    		'password' => 'required'
    	]);
    	
    	if(! auth()->attempt(request(['email', 'password']))) {
    		return back()->withErrors([
                'message' => 'Please check your credentials and try again.'
            ]);
    	}

    	return redirect()->home();
    }

    public function destory()
    {
    	auth()->logout();

    	return redirect()->home();
    }

}