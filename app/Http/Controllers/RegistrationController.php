<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Recommend;
use Illuminate\Support\Facades\DB;

class RegistrationController extends Controller
{
    // create a new user

    public function create() {
    	return view('register');
    }
    

    // store the information of the user
    public function store(Request $request) {
    	//form validation.
    	$this->validate(request(), [
    		'emp_id' => 'required',
    		'email' => 'required|email',
    		'password' => 'required|min:6|confirmed',
    		'aadhaar' => 'required|min:12|max:12',
    		'name' => 'required',
    		'sex' => 'required',
    		'dob'	=> 'required',
    		'emp_type' => 'required',
    		'address' => 'required',
    		'religion' => 'required',
    		'caste' => 'required',
    		'contact' => 'required',
    		'pnt_no' => 'required',
    		'pan_no' => 'required',
    		'salutation' => 'required',
    		'category' => 'required',
    		'discipline' => 'required',
    		'salary' => 'required',
    		'appointed_on_quota' => 'required',
    		'achievements' => 'required',
    		'hometown' => 'required',
    		'marital_status' => 'required',
    		'children' => 'required',
    		'cl_balance' => 'required',
    		'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    		'physically_disabled' => 'required'
    	]);
        if ($request->hasFile('photo')) {
    $image = $request->file('photo');
    $name = time().'.'.$image->getClientOriginalExtension();
    $destinationPath = public_path('/public/images/');
    $image->move('../public/images/', $name);
    

    

    	//FOR AUTHENTICATION PURPOSE.
    	User::insert_into_user(request()->all(),$name);

        Recommend::insertintorecommend(request()->all());
  //  return back()->with('success','Image Upload successfully');

    	return redirect()->route('homeAdmin');
    
    } 
}
}
