<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\scl;
use Illuminate\Support\Facades\DB;
use Mail;

class sclController extends Controller
{
	//to store every casual leave in the table.

    public function store() {

        // update balance trigger
      //  CasualLeave::createupdatecltrigger();

        $user_details = User::getUserDetails(auth()->id());
        $num_days = request()->all()['num_days'];

        $specialcl = DB::select("
            SELECT specialcl FROM leavebalances WHERE emp_id = ?
        ", array($user_details->emp_id));

        $specialcl = $specialcl[0]->specialcl;

        if($specialcl-$num_days >= 0 && $num_days<=15)
        {
            DB::statement("
                UPDATE leavebalances SET specialcl = ? WHERE emp_id = ?  
            ", array($specialcl-$num_days, $user_details->emp_id));
        }
        else if($num_days>15 && $specialcl-$num_days >= 0)
        {
            return back()->withErrors([
                'message' => 'You cannot take more than 15 day leave at a time!'
            ]);
        }
        else if($specialcl-$num_days < 0)
        {
            return back()->withErrors([
                'message' => 'You have exceeded the limit!'
            ]);
        }

        $emp_type = $user_details->emp_type;
    	
    	scl::insertIntoscl($user_details, request()->all());

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
    	return view('/applicant/sclform');
    }

    public function showlist(){
        return view('/applicant/listofleaves');
    }
}
