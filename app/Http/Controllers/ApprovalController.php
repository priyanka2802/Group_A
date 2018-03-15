<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Casualleave;
use Mail;

class ApprovalController extends Controller
{
    //to show pending leaves for approval.
    public function showpendingapproval() {
    	$user_details = DB::select("
			SELECT * FROM casualleaves JOIN users ON casualleaves.emp_id = users.emp_id AND casualleaves.status = 'Recommended'
    	");
        // dd($user_details);
    	return view('approving.leavependingapproval', compact('user_details'));
    }

    //to show approved leaves.
    public function showapprovedleaves() {
    	$user_details = DB::select("
			SELECT * FROM casualleaves JOIN users ON casualleaves.emp_id = users.emp_id AND casualleaves.status = 'Approved'
    	");
        // dd($user_details);
    	return view('approving.leaveapproved', compact('user_details'));
    }

    //to show rejected leaves.
    public function showrejectedleaves() {
    	$user_details = DB::select("
			SELECT * FROM casualleaves JOIN users ON casualleaves.emp_id = users.emp_id AND casualleaves.status = 'Rejected'
    	");
        // dd($user_details);
    	return view('approving.leaverejected', compact('user_details'));
    }

    //to show leave details.
    public function showleavedetails($id) {
    	$user_details = DB::select("
			SELECT * FROM casualleaves JOIN users ON casualleaves.emp_id = users.emp_id WHERE casualleaves.ID=?
    	", array($id));
        // dd($id);
    	$user_details = $user_details[0];
    	return view('approving.leavedetails', compact('user_details'));
    }

    //to update status of leave after approval
    public function updatestatus1($id) {
        DB::update("
            UPDATE casualleaves SET status = 'Approved' WHERE ID=?
        ", array($id));

        $user_mail = DB::select("
			SELECT users.name, users.email FROM casualleaves JOIN users ON casualleaves.emp_id = users.emp_id WHERE casualleaves.ID = ?
        ", array($id));
        // dd($user_mail[0]->name);

        //mail.
        Mail::send(['text'=>'mail/mailapproved'],['name','LeaveManagement'],function($message) use ($user_mail)
        {
                $message->to($user_mail[0]->email,$user_mail[0]->name)->subject('Leave Approved');
                $message->from('leavemanageriiti@gmail.com','Leave Manager');
        });

        return $this->showleavedetails($id);
        // dd($id);
    }

    //to update status of leave after revert
    public function updatestatus2($id) {
        DB::update("
            UPDATE casualleaves SET status = 'Rejected' WHERE ID=?
        ", array($id));
       
        // dd($id);

        $user_mail = DB::select("
			SELECT users.name, users.email FROM casualleaves JOIN users ON casualleaves.emp_id = users.emp_id WHERE casualleaves.ID = ?
        ", array($id));
        // dd($user_mail[0]->name);

        //mail.
        Mail::send(['text'=>'mail/mailrejected'],['name','LeaveManagement'],function($message) use ($user_mail)
        {
                $message->to($user_mail[0]->email,$user_mail[0]->name)->subject('Leave Rejected!');
                $message->from('leavemanageriiti@gmail.com','Leave Manager');
        });

         return $this->showleavedetails($id);
    }
}
