<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\CasualLeave;
use Illuminate\Support\Facades\DB;

class CasualLeaveController extends Controller
{
	//to store every casual leave in the table.

    public function store() {
    	$user_details = User::getUserDetails(auth()->id());
    	
    	CasualLeave::insertIntoCasualleaves($user_details, request()->all());

    	return redirect()->home();
    }

    public function show() {
    	return view('/applicant/clform');
    }
}
