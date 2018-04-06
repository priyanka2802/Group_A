<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class scl extends Model
{
    //to insert into casualleaves table.

    public static function insertIntoscl($user_details, $leave_details) {
    	$emp_id = $user_details->emp_id;
        $emp_type = $user_details->emp_type;
        if($emp_type == 'general')
        {
            DB::insert("
                INSERT INTO scl (emp_id, no_of_days, start_date, purpose, contact_no, status) VALUES (?, ?, ?, ? , ?, 'Application submitted')
            ", array($emp_id, $leave_details['num_days'], $leave_details['start_date'], $leave_details['purpose'], $leave_details['contact']));
        }
        else
        {
            DB::insert("
                INSERT INTO scl (emp_id, no_of_days, start_date, purpose, contact_no, status) VALUES (?, ?, ?, ? , ?, 'Recommended')
            ", array($emp_id, $leave_details['num_days'], $leave_details['start_date'], $leave_details['purpose'], $leave_details['contact']));
        }
    }
/*
    public static function getcldetails() {
    	$cl_details = DB::select("
			SELECT * FROM casualleaves
    	");
    	return $cl_details;
    }*/

    //create update clbalance trigger
 /*   public static function createupdatecltrigger() {
        DB::unprepared("
            DROP TRIGGER IF EXISTS updatecl;
        ");
        DB::unprepared("
            CREATE TRIGGER updatecl
            
        ");
    }*/
}
