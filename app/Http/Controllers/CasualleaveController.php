<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Casualleave;
use Illuminate\Support\Facades\DB;
use Mail;
use DateTime;

class CasualleaveController extends Controller
{
	//to store every casual leave in the table.

    public function store() {


    	$user_details = User::getUserDetails(auth()->id());

        $all_leave_details = DB::select("
            SELECT * FROM casualleaves WHERE emp_id = ? ORDER BY end_date DESC
        ", array($user_details->emp_id));
        

        $date1 = new DateTime(request()->all()['start_date']);
        $date2 = new DateTime($all_leave_details[0]->end_date);
        
        if($date1 <= $date2)
        {
            return back()->withErrors([
                'message' => 'You already have a part of duration of a previous leave active after the above mentioned start date. Please specify a start date so it doesn\'t overlap with a previous leave!'
            ]);
        }

        $num_days = request()->all()['num_days'];

        $clbalance = DB::select("
            SELECT clbalance FROM leavebalances WHERE emp_id = ?
        ", array($user_details->emp_id));

        $clbalance = $clbalance[0]->clbalance;

        if($num_days>5 && $clbalance-$num_days >= 0)
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


        $emp_type = $user_details->emp_type;
    	
        $data = array('name'=>$user_details->name,'id'=>$user_details->emp_id,'purpose'=>request()->input('purpose'),'date'=>request()->input('start_date'),'days'=>request()->input('num_days'),'contact'=>request()->input('contact'),'Recommending'=>request()->input('recommending'),'Approving'=>request()->input('approving'));
        $mailId1 =request()->input('recommending'); 
        $mailId2 =request()->input('approving');

            $recommend_details = DB::select("
                SELECT * FROM users WHERE email = ?
            ", array($mailId1));

            $approve_details = DB::select("
                SELECT * FROM users WHERE email = ?
            ", array($mailId2));



            if($recommend_details == NULL){
                return back()->withErrors([
                    'message' => 'Please check Recommending Authority Email Id'
                    ]);            
            }

            else if($approve_details == NULL){
                return back()->withErrors([
                    'message' => 'Please check Approving Authority Email Id'
                    ]); 
            }

            else if($emp_type == 'general')
            {

                if($recommend_details[0]->emp_type != 'recommending'){
                    return back()->withErrors([
                        'message' => 'Please check Recommending Authority Email Id'
                        ]); 

                }

                else if($approve_details[0]->emp_type != 'approval'){
                    return back()->withErrors([
                        'message' => 'Please check Approving Authority Email Id'
                        ]);

                }

                else{

                    Casualleave::insertIntoCasualleaves($user_details, request()->all());

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
            }
            else
            {
                if($recommend_details[0]->emp_type != 'approval' OR $approve_details[0]->emp_type != 'approval' OR $mailId1 != $mailId2){
                    return back()->withErrors([
                        'message' => 'Please check Recommending and Approving Authority Email Ids'
                        ]); 

                }
                Casualleave::insertIntoCasualleaves($user_details, request()->all());

                 $admin_mail = DB::select("
                    SELECT name, email FROM users WHERE emp_type = 'Admin'
                ");
                 // dd($admin_mail);
            // dd($user_mail[0]->name);

            //mail.
                Mail::send(['text'=>'mail/mailrecommended'],$data,function($message) use ($admin_mail)
            {
                    $message->to($admin_mail[0]->email,$admin_mail[0]->name)->subject('Leave Recommended');
                    $message->from('leavemanageriiti@gmail.com','Leave Manager');
            });

            Mail::send(['text'=>'mail/mailrecommended'],$data,function($message) use ($approve_details)
            {
                    $message->to($approve_details[0]->email,$approve_details[0]->name)->subject('Leave Recommended');
                    $message->from('leavemanageriiti@gmail.com','Leave Manager');
            });

                return redirect()->route('homeRecommend');
            }
        }

    public function show() {
    	return view('/applicant/clform');
    }
	
	 public function showlist(){
        return view('/applicant/listofleaves');
    }
}
