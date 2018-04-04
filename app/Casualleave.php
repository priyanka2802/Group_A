<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CasualLeave extends Model
{
    //to insert into casualleaves table.

    public static function insertIntoCasualleaves($user_details, $leave_details) {
    	$emp_id = $user_details->emp_id;
        $emp_type = $user_details->emp_type;

        //calculate end_date.
        $end_date = DB::select("
            SELECT ADDDATE(?, INTERVAL ? DAY) AS enddate;
        ", array($leave_details['start_date'], $leave_details['num_days']-1));
        $end_date = $end_date[0]->enddate;

        if($emp_type == 'general')
        {
            DB::insert("
                INSERT INTO casualleaves (emp_id, no_of_days, start_date, end_date, purpose, contact_no, status) VALUES (?, ?, ?, ?, ? , ?, 'Application submitted')
            ", array($emp_id, $leave_details['num_days'], $leave_details['start_date'], $end_date, $leave_details['purpose'], $leave_details['contact']));
        }
        else
        {
            DB::insert("
                INSERT INTO casualleaves (emp_id, no_of_days, start_date, end_date, purpose, contact_no, status) VALUES (?, ?, ?, ?, ? , ?, 'Recommended')
            ", array($emp_id, $leave_details['num_days'], $leave_details['start_date'], $end_date, $leave_details['purpose'], $leave_details['contact']));
        }
    }
/*
    public static function getcldetails() {
    	$cl_details = DB::select("
			SELECT * FROM casualleaves
    	");
    	return $cl_details;
    }*/


    //to update cl balance
    public static function updatecltrigger() {
        DB::unprepared("
            DROP EVENT IF EXISTS updatecltrigger;
        ");

        DB::unprepared("
            CREATE EVENT updatecltrigger
            ON SCHEDULE EVERY 1 DAY
            DO 
            BEGIN 
                IF MONTH(CURDATE()) = 1 AND DAY(CURDATE) = 1 THEN
                    UPDATE leavebalances SET clbalance = clbalance + 8;
                END IF;
            END
        ");
    }
}
