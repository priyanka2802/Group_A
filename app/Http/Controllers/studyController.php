<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\study;
use Illuminate\Support\Facades\DB;
use Mail;

class studyController extends Controller
{
	//to store every study leave in the table.

    public function store() {

        // update balance trigger
      //  CasualLeave::createupdatecltrigger();

        $user_details = User::getUserDetails(auth()->id());
        $num_months = request()->all()['num_months'];

        $studybalance = DB::select("
            SELECT study FROM leavebalances WHERE emp_id = ?
        ", array($user_details->emp_id));

        $studybalance = $studybalance[0]->study;

   /*     if($clbalance-$num_days >= 0 && $num_days<=5)
        {
            DB::statement("
                UPDATE leavebalances SET clbalance = ? WHERE emp_id = ?  
            ", array($clbalance-$num_days, $user_details->emp_id));
        }
        else if($num_days>5 && $clbalance-$num_days >= 0)
        {
            return back()->withErrors([
                'message' => 'You cannot take more than 5 day leave at a time!'
            ]);
        }
        else if($clbalance-$num_days < 0)
        {
            return back()->withErrors([
                'message' => 'You have exceeded the limit!'
            ]);
        }
*/ // need to edit this. Error should be mentioned if period of service is less than 5 years.









        $emp_type = $user_details->emp_type;
    	
        study::insertIntoStudyleaves($user_details, request()->all());

        //mail

        if($emp_type == 'general')
        {
            $recommend_details = DB::select("
                SELECT * FROM recommends WHERE discipline = ?
            ", array($user_details->discipline));
          //  dd($recommend_details);

            Mail::send(['text'=>'mail/mailleavesubmit'],['name','LeaveManagement'],function($message) use ($recommend_details)
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
        Mail::send(['text'=>'mail/mailrecommended'],['name','LeaveManagement'],function($message) use ($approval_mail)
        {
                $message->to($approval_mail[0]->email,$approval_mail[0]->name)->subject('Leave Recommended');
                $message->from('leavemanageriiti@gmail.com','Leave Manager');
        });

            return redirect()->route('homeRecommend');
        }
    }

    public function show() {
    	return view('/applicant/studyform');
    }

    public function showlist(){
        return view('/applicant/listofleaves');
    }
}
