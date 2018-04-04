<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Casualleave;
use Illuminate\Support\Facades\DB;
use Mail;

class CasualleaveController extends Controller
{
	//to store every casual leave in the table.

    public function store() {
    	$user_details = User::getUserDetails(auth()->id());

        $emp_type = $user_details->emp_type;
    	
    	Casualleave::insertIntoCasualleaves($user_details, request()->all());

        $data = array('name'=>$user_details->name,'id'=>$user_details->emp_id,'purpose'=>request()->input('purpose'),'date'=>request()->input('start_date'),'days'=>request()->input('num_days'),'contact'=>request()->input('contact'),'Recommending'=>request()->input('recommending'),'Approving'=>request()->input('approving'));
        //mail

        if($emp_type == 'general')
        {
            $recommend_details = DB::select("
                SELECT * FROM recommends WHERE discipline = ?
            ", array($user_details->discipline));

            $admin_mail = DB::select("
            SELECT name, email FROM users WHERE emp_type = 'Admin'
        ");
        // dd($user_mail[0]->name);
            Mail::send(['text'=>'mail/mailleavesubmit'],$data,function($message) use ($admin_mail)
        {
                $message->to($admin_mail[0]->email,$admin_mail[0]->name)->subject('Leave Submitted');
                $message->from('leavemanageriiti@gmail.com','Leave Manager');
        });
            // dd($recommend_details);

            Mail::send(['text'=>'mail/mailleavesubmit'],$data,function($message) use ($recommend_details)
        {
                $message->to($recommend_details[0]->email,$recommend_details[0]->name)->subject('Leave Submitted');
                $message->from('leavemanageriiti@gmail.com','Leave Manager');
        });

    	   return redirect()->route('homeGeneral');
        }
        else
        {
            $approval_mail = DB::select("
            SELECT users.name, users.email FROM users WHERE emp_type = 'approval'
        ");
        // dd($user_mail[0]->name);

        //mail.
            Mail::send(['text'=>'mail/mailrecommended'],$data,function($message) use ($admin_mail)
        {
                $message->to($admin_mail[0]->email,$admin_mail[0]->name)->subject('Leave Submitted');
                $message->from('leavemanageriiti@gmail.com','Leave Manager');
        });

        Mail::send(['text'=>'mail/mailrecommended'],$data,function($message) use ($approval_mail)
        {
                $message->to($approval_mail[0]->email,$approval_mail[0]->name)->subject('Leave Recommended');
                $message->from('leavemanageriiti@gmail.com','Leave Manager');
        });

            return redirect()->route('homeRecommend');
        }
    }

    public function show() {
    	return view('/applicant/clform');
    }
}
