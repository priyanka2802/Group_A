<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Casualleave;
use App\User;
use Illuminate\Support\Facades\DB;
// use App\Events\updateSalary;
use Event;

class HomepageController extends Controller
{
    //to show the admin homepage.


    //to show the user homepage.
    public function showuser() {
        $user_details = DB::select("
            SELECT * FROM users WHERE id=?
        ", array(auth()->id()));
        $user_details = $user_details[0];
        // dd($user_details);
        return view('applicant.user', compact('user_details'));
    }
    public function showall()
    {
        $details = DB::select("
            SELECT * FROM users");
        return view('search',compact('details'));
    }


    //to show the recommending authority homepage.
    public function showrecommend() {
    	$user_details = DB::select("
			SELECT * FROM casualleaves JOIN users ON casualleaves.emp_id = users.emp_id order by start_date desc
    	");
        // dd($user_details);
    	return view('recommending.recommend', compact('user_details'));
    }

    //to show the approving authority homepage.
    public function showapproval() {
    	$user_details = DB::select("
            SELECT * FROM casualleaves JOIN users ON casualleaves.emp_id = users.emp_id order by start_date desc
        ");
        // dd($user_details);
        return view('approving.approving', compact('user_details'));
    }


    public function showuserdetails($id) {
        $user_details = DB::select("
            SELECT * FROM users WHERE emp_id=?
        ", array($id));
        $user_details = $user_details[0];
       // dd ($user_details);
        return view('admin.applicantedit', compact('user_details'));
    }

    public function user_profile() {
        $user_details = DB::select("
            SELECT * FROM users WHERE id=?
        ", array(auth()->id()));
        $user_details = $user_details[0];
        // dd($user_details);
         return view('approving.approvingupdate', compact('user_details'));
    }


     public function showuserdetails1() {
        $user_details = DB::select("
            SELECT * FROM users WHERE id=?
        ", array(auth()->id()));
        $user_details = $user_details[0];
       // dd ($user_details);
        return view('applicant.useredit', compact('user_details'));
    }

    public function show_leaves_history() {
        $emp_id = DB::select("
            SELECT emp_id FROM users WHERE id = ?
        ", array(auth()->id()));

        $user_details = DB::select("
            SELECT * FROM casualleaves JOIN users ON casualleaves.emp_id = users.emp_id WHERE users.emp_id=?
        order by casualleaves.start_date desc", array($emp_id[0]->emp_id));
        // dd($user_details);

        return view('applicant.leave_history', compact('user_details'));


    }

    public function show_leaves_history_approving() {
        $emp_id = DB::select("
            SELECT emp_id FROM users WHERE id = ?
        ", array(auth()->id()));

        $user_details = DB::select("
            SELECT * FROM casualleaves JOIN users ON casualleaves.emp_id = users.emp_id WHERE users.emp_id=?
        order by casualleaves.start_date desc", array($emp_id[0]->emp_id));
        // dd($user_details);

        return view('approving.leave_history_approving', compact('user_details'));


    }
}
