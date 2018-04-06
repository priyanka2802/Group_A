<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class OnDuty extends Model
{
    public static function insertIntoOnDuty($user_details, $leave_details) {
    	$emp_id = $user_details->emp_id;
        $emp_type = $user_details->emp_type;

        if($emp_type == 'general')
        {
            DB::insert("
                INSERT INTO onduties (emp_id, start_date, end_date, Leave_info, conference, status, pdf_file, recommending, approving, contact) VALUES (?, ?, ?, ? , ?, 'Application submitted',?,?,?,?)
            ", array($emp_id, $leave_details['start_date'], $leave_details['end_date'], $leave_details['Leave_info'], $leave_details['conference'], $leave_details['pdf_file'],$leave_details['recommending'], $leave_details['approving'], $leave_details['contact']));
        }
        else
        {
          
            DB::insert("
                INSERT INTO onduties (emp_id, start_date, end_date, Leave_info, conference, status, pdf_file, recommending, approving, contact) VALUES (?, ?, ?, ?, ?, 'Recommended',?,?,?,?)
            ", array($emp_id, $leave_details['start_date'], $leave_details['end_date'], $leave_details['Leave_info'], $leave_details['conference'], $leave_details['pdf_file'],$leave_details['recommending'], $leave_details['approving'], $leave_details['contact']));
        }
    }
/*
    public static function getcldetails() {
    	$cl_details = DB::select("
			SELECT * FROM casualleaves
    	");
    	return $cl_details;
    }*/


    
}
