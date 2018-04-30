<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\OnDuty;
use Illuminate\Support\Facades\DB;
use Mail;

class OnDutyController extends Controller
{
    public function store() {

        if (request()->hasFile('pdf_file')) {
        $na=request()->file('pdf_file')->getClientOriginalName();
    $image =request()->file('pdf_file');
    $pdf_file = time().$na;
    $image->move('../public/images/', $pdf_file);
    }


    	$user_details = User::getUserDetails(auth()->id());

        $emp_type = $user_details->emp_type;
    	
        $data = array('name'=>$user_details->name,'id'=>$user_details->emp_id,'Leave_info'=>request()->input('Leave info'),'start_date'=>request()->input('start_date'),'end_date'=>request()->input('end_date'),'contact'=>request()->input('contact'),'conference'=>request()->input('conference'),'Recommending'=>request()->input('recommending'),'Approving'=>request()->input('approving'), 'pdf_file'=>request()->file('pdf_file'));
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

                    OnDuty::insertIntoOnDuty($user_details, request()->all());

                    $admin_mail = DB::select("
                    SELECT name, email FROM users WHERE emp_type = 'Admin'
                ");
                //dd(request()->input('pdf_file'));
                    Mail::send(['text'=>'mail/ondutyMail'],$data,function($message) use ($admin_mail)
<<<<<<< HEAD
                {
                        $file = request()->input('pdf_file');
                        $pdf_file = "images/".$file;
                        $message->to($admin_mail[0]->email,$admin_mail[0]->name)->subject('Leave Submitted');
                        $message->from('leavemanageriiti@gmail.com','Leave Manager');
                        $message->attach(url($file));
                });
=======
                    {
                            $file = request()->input('pdf_file');
                            $pdf_file = "Images/".$file;
                            $message->to($admin_mail[0]->email,$admin_mail[0]->name)->subject('Leave Submitted');
                            $message->from('leavemanageriiti@gmail.com','Leave Manager');
                            //$message->attach(asset($pdf_file));
                    });
>>>>>>> debda931b7dbdf1d4396f4742a5d0b5d15c3e8da
                    // dd($recommend_details);

                    Mail::send(['text'=>'mail/ondutyMail'],$data,function($message) use ($recommend_details)
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
                OnDuty::insertIntoOnDuty($user_details, request()->all());

                 $admin_mail = DB::select("
                    SELECT name, email FROM users WHERE emp_type = 'Admin'
                ");
                 // dd($admin_mail);
            // dd($user_mail[0]->name);

            //mail.
                Mail::send(['text'=>'mail/ondutyMail'],$data,function($message) use ($admin_mail)
                {
                        $message->to($admin_mail[0]->email,$admin_mail[0]->name)->subject('Leave Recommended');
                        $message->from('leavemanageriiti@gmail.com','Leave Manager');
                });

                Mail::send(['text'=>'mail/ondutyMail'],$data,function($message) use ($approve_details)
                {
                        $message->to($approve_details[0]->email,$approve_details[0]->name)->subject('Leave Recommended');
                        $message->from('leavemanageriiti@gmail.com','Leave Manager');
                });

                return redirect()->route('homeRecommend');
            }
        }

    public function show() {
    	return view('/applicant/odform');
    }
}
