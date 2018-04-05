<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\CasualLeave;

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

        $user_details = User::getUserDetails(auth()->id());
        // dd($user_details);
        $emp_type = $user_details->emp_type;


        //call trigger to update cl.
        CasualLeave::updatecltrigger();

        if($emp_type == "general")
    	   return redirect()->route('homeGeneral');
        else if($emp_type == 'admin')
            return redirect()->route('homeAdmin');
        else if($emp_type == 'recommending')
            return redirect()->route('homeRecommend');
        else
            return redirect()->route('homeApproval');
    }

    //to logout

    public function destroy() {
    	auth()->logout();
    	return redirect('/login');
    }
}
