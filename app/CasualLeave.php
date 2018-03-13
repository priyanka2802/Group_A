<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CasualLeave extends Model
{
    //to insert into casualleaves table.

    public static function insertIntoCasualleaves($user_details, $leave_details) {
    	$emp_id = $user_details->emp_id;
    	DB::insert("
			INSERT INTO casualleaves (emp_id, no_of_days, start_date, purpose, contact_no, status) VALUES (?, ?, ?, ? , ?, 'Application submitted')
    	", array($emp_id, $leave_details['num_days'], $leave_details['start_date'], $leave_details['purpose'], $leave_details['contact']));
    }
}
