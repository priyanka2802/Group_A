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
			SELECT * FROM casualleaves JOIN users ON casualleaves.emp_id = users.emp_id AND casualleaves.status = 'Recommended' order by start_date desc
    	");
        $user_details = $user_details[0]; // dd($user_details);
    	return view('approving.leavependingapproval', compact('user_details'));
    }

    //to show approved leaves.
    public function showapprovedleaves() {
    	$user_details = DB::select("
			SELECT * FROM casualleaves JOIN users ON casualleaves.emp_id = users.emp_id AND casualleaves.status = 'Approved' order by start_date desc
    	");
        // dd($user_details);
        $user_details = $user_details[0]; 
    	return view('approving.leaveapproved', compact('user_details'));
    }

    //to show rejected leaves.
    public function showrejectedleaves() {
    	$user_details = DB::select("
			SELECT * FROM casualleaves JOIN users ON casualleaves.emp_id = users.emp_id AND casualleaves.status = 'Rejected' order by start_date desc
    	");
        // dd($user_details);
        $user_details = $user_details[0]; 
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
			SELECT * FROM casualleaves JOIN users ON casualleaves.emp_id = users.emp_id WHERE casualleaves.ID = ?
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

        $admin_mail = DB::select("
            SELECT name, email FROM users WHERE emp_type = 'Admin'
        ");

        //mail.
        $data = array('name'=>$user_mail[0]->name,'id'=>$user_mail[0]->emp_id,'purpose'=>$user_mail[0]->purpose,'date'=>$user_mail[0]->start_date,'days'=>$user_mail[0]->no_of_days,'contact'=>$user_mail[0]->contact_no, 'Recommending'=>$user_mail[0]->recommending,'Approving'=>$user_mail[0]->approving);

        Mail::send(['text'=>'mail/mailapproved'],$data,function($message) use ($user_mail)
        {
                $message->to($user_mail[0]->email,$user_mail[0]->name)->subject('Leave Approved');
                $message->from('leavemanageriiti@gmail.com','Leave Manager');
        });

        Mail::send(['text'=>'mail/mailapproved'],$data,function($message) use ($admin_mail)
        {
                $message->to($admin_mail[0]->email,$admin_mail[0]->name)->subject('Leave Approved');
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
			SELECT * FROM casualleaves JOIN users ON casualleaves.emp_id = users.emp_id WHERE casualleaves.ID = ?
        ", array($id));
        // dd($user_mail[0]->name);

        //mail.

        $admin_mail = DB::select("
            SELECT name, email FROM users WHERE emp_type = 'Admin'
        ");
        $data = array('name'=>$user_mail[0]->name,'id'=>$user_mail[0]->emp_id,'purpose'=>$user_mail[0]->purpose,'date'=>$user_mail[0]->start_date,'days'=>$user_mail[0]->no_of_days,'contact'=>$user_mail[0]->contact_no, 'Recommending'=>$user_mail[0]->recommending,'Approving'=>$user_mail[0]->approving);

        Mail::send(['text'=>'mail/mailrejected'],$data,function($message) use ($user_mail)
        {
                $message->to($user_mail[0]->email,$user_mail[0]->name)->subject('Leave Rejected!');
                $message->from('leavemanageriiti@gmail.com','Leave Manager');
        });

        Mail::send(['text'=>'mail/mailrejected'],$data,function($message) use ($admin_mail)
        {
                $message->to($admin_mail[0]->email,$admin_mail[0]->name)->subject('Leave Rejected');
                $message->from('leavemanageriiti@gmail.com','Leave Manager');
        });

         return $this->showleavedetails($id);
    }
}
