<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Casualleave;
use App\Users;

use Mail;

class RecommendController extends Controller
{
    public function showleavedetails($id) {
    	$user_details = DB::select("
			SELECT * FROM casualleaves JOIN users ON casualleaves.emp_id = users.emp_id WHERE casualleaves.ID=?
    	", array($id));
        // dd($id);
    	$user_details = $user_details[0];
    	return view('recommending.leavedetails', compact('user_details'));
    }

    //to update status of leave after recommendation
    public function updatestatus1($id) {
        DB::update("
            UPDATE casualleaves SET status = 'Recommended' WHERE ID=?
        ", array($id));

        $approval = DB::select("
            SELECT * FROM casualleaves WHERE id = ? 
        ", array($id));

        $approval_mail = DB::select("
            SELECT * FROM users WHERE email = ? 
        ", array($approval[0]->approving));

        $admin_mail = DB::select("
            SELECT name, email FROM users WHERE emp_type = 'Admin'
        ");

        $user_mail = DB::select("
            SELECT * FROM casualleaves JOIN users ON casualleaves.emp_id = users.emp_id WHERE casualleaves.ID = ?
        ", array($id));

        $data = array('name'=>$user_mail[0]->name,'id'=>$user_mail[0]->emp_id,'purpose'=>$user_mail[0]->purpose,'date'=>$user_mail[0]->start_date,'days'=>$user_mail[0]->no_of_days,'contact'=>$user_mail[0]->contact_no,'Recommending'=>$user_mail[0]->recommending,'Approving'=>$user_mail[0]->approving);
        // dd($user_mail[0]->name);
        Mail::send(['text'=>'mail/mailrecommended'],$data,function($message) use ($admin_mail)
        {
                $message->to($admin_mail[0]->email,$admin_mail[0]->name)->subject('Leave Recommended');
                $message->from('leavemanageriiti@gmail.com','Leave Manager');
        });

        //mail.
        Mail::send(['text'=>'mail/mailrecommended'],$data,function($message) use ($approval_mail)
        {
                $message->to($approval_mail[0]->email,$approval_mail[0]->name)->subject('Leave Recommended');
                $message->from('leavemanageriiti@gmail.com','Leave Manager');
        });


        return $this->showleavedetails($id);
        // dd($id);
    }

    //to update status of leave after revert
    public function updatestatus2($id) {
        DB::update("
            UPDATE casualleaves SET status = 'Reverted Back' WHERE ID=?
        ", array($id));

        $user_mail = DB::select("
            SELECT * FROM casualleaves JOIN users ON casualleaves.emp_id = users.emp_id WHERE casualleaves.ID = ?
        ", array($id));

        $admin_mail = DB::select("
            SELECT name, email FROM users WHERE emp_type = 'Admin'
        ");

        $data = array('name'=>$user_mail[0]->name,'id'=>$user_mail[0]->emp_id,'purpose'=>$user_mail[0]->purpose,'date'=>$user_mail[0]->start_date,'days'=>$user_mail[0]->no_of_days,'contact'=>$user_mail[0]->contact_no,'Recommending'=>$user_mail[0]->recommending,'Approving'=>$user_mail[0]->approving);
        // dd($user_mail[0]->name);
        Mail::send(['text'=>'mail/mailreverted'],$data,function($message) use ($admin_mail)
        {
                $message->to($admin_mail[0]->email,$admin_mail[0]->name)->subject('Leave Reverted Back');
                $message->from('leavemanageriiti@gmail.com','Leave Manager');
        });
        // dd($user_mail[0]->name);

        //mail.
        Mail::send(['text'=>'mail/mailreverted'],$data,function($message) use ($user_mail)
        {
                $message->to($user_mail[0]->email,$user_mail[0]->name)->subject('Leave Reverted Back');
                $message->from('leavemanageriiti@gmail.com','Leave Manager');
        });

        return $this->showleavedetails($id);
        // dd($id);
    }

    //to show pending leaves for recommendation.
    public function showpendingrecommend() {
    	$user_details = DB::select("
			SELECT * FROM casualleaves JOIN users ON casualleaves.emp_id = users.emp_id AND casualleaves.status = 'Application submitted' order by start_date desc
    	");
        // dd($user_details);
    	return view('recommending.leavepending', compact('user_details'));
    }

    //to show recommended leaves.
    public function showrecommendedleaves() {
    	$user_details = DB::select("
			SELECT * FROM casualleaves JOIN users ON casualleaves.emp_id = users.emp_id AND casualleaves.status = 'Recommended' order by start_date desc
    	");
        // dd($user_details);
    	return view('recommending.leaverecommended', compact('user_details'));
    }

    //to show reverted leaves.
    public function showrevertedleaves() {
    	$user_details = DB::select("
			SELECT * FROM casualleaves JOIN users ON casualleaves.emp_id = users.emp_id AND casualleaves.status = 'Reverted Back' order by start_date desc
    	");
        // dd($user_details);
    	return view('recommending.leavereverted', compact('user_details'));
    }
}
