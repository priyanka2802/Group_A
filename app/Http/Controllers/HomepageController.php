<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Casualleave;
use App\User;
use Illuminate\Support\Facades\DB;

class HomepageController extends Controller
{
    //to show the admin homepage.
    public function showadmin() {
    	return view('admin.admin');
    }

    //to show the user homepage.
    public function showuser() {
        $user_details = DB::select("
            SELECT * FROM users WHERE id=?
        ", array(auth()->id()));
        $user_details = $user_details[0];
        // dd($user_details);
        return view('applicant.user', compact('user_details'));
    }

    //to show the recommending authority homepage.
    public function showrecommend() {
    	$user_details = DB::select("
			SELECT * FROM casualleaves JOIN users ON casualleaves.emp_id = users.emp_id
    	");
        // dd($user_details);
    	return view('recommending.recommend', compact('user_details'));
    }

    //to show the approving authority homepage.
    public function showapproval() {
    	$user_details = DB::select("
            SELECT * FROM casualleaves JOIN users ON casualleaves.emp_id = users.emp_id
        ");
        // dd($user_details);
        return view('approving.approving', compact('user_details'));
    }
}