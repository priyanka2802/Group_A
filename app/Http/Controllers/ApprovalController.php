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
			SELECT users.emp_id, users.name, users.email FROM casualleaves JOIN users ON casualleaves.emp_id = users.emp_id WHERE casualleaves.ID = ?
        ", array($id));
        // dd($user_mail[0]->name);

        $num_days = DB::select("
            SELECT no_of_days FROM casualleaves WHERE ID = ? 
        ", array($id));
        $num_days = $num_days[0]->no_of_days;

        $clbalance = DB::select("
            SELECT clbalance FROM leavebalances WHERE emp_id = ?
        ", array($user_mail[0]->emp_id));

        $clbalance = $clbalance[0]->clbalance;

        $start_date = DB::select("
            SELECT start_date FROM casualleaves WHERE ID=?
        ", array($id));
        $start_date = $start_date[0]->start_date;

        $end_date = DB::select("
            SELECT end_date FROM casualleaves WHERE ID=?
        ", array($id));
        $end_date = $end_date[0]->end_date;

        $counter=0;
        $row = DB::select("SELECT * FROM holidays;");
        // dd($row);

        foreach($row as $row)
        {
            $date_holiday = $row->Date;
            $a = DB::select("
                SELECT * FROM casualleaves WHERE ID=? AND ? BETWEEN ? AND ?
            ", array($id, $date_holiday, $start_date, $end_date));
            if($a!=NULL)
                $counter++;
        }

        
        DB::statement("
            UPDATE leavebalances SET clbalance = ? WHERE emp_id = ?  
        ", array($clbalance-$num_days+$counter, $user_mail[0]->emp_id));

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
