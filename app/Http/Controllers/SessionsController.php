<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SessionsController extends Controller
{
    // for login, creating a session
    public function create() {
    	return view('login');
    }

    // for login, logging in the user
    public function store() {
    	//form validation
    	$this->validate(request(), [
    		'email' => 'required',
    		'password' => 'required'
    	]);

    	if(!auth()->attempt(request(['email', 'password'])))
    		return back()->withErrors([
    			'message' => 'Invalid Credentials!'
    		]);
    	return redirect()->home();
    }

    //to logout

    public function destroy() {
    	auth()->logout();
    	return redirect('/login');
    }
}
