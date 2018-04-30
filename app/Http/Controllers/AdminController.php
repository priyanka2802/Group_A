<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\users;
use App\Holiday;
use Mail;

class AdminController extends Controller
{
    //To delete user
    public function delete_user() {
    	
        $data = request()->input('emp_id');

        $user = DB::select("
                DELETE FROM users WHERE emp_id = ?
            ", array($data));

        
        return back();
    
        
    }

    public function showadmin() {
    	$user_details = DB::select("
			SELECT * FROM casualleaves JOIN users ON casualleaves.emp_id = users.emp_id order by start_date desc
    	");
        //dd($user_details);
    	return view('admin.admin', compact('user_details'));
    }

    public function showleavedetails($id) {
    	$user_details = DB::select("
			SELECT * FROM casualleaves JOIN users ON casualleaves.emp_id = users.emp_id WHERE casualleaves.ID=?
    	", array($id));
        // dd($id);
    	$user_details = $user_details[0];
    	return view('admin.details', compact('user_details'));
    }

    public function Addholidays() {


    	
                    Holiday::insertIntoHolidays(request()->all());

            
            
                return redirect()->route('homeAdmin');
        
    }

    public function displayHolidays() {
            
                return view('/Addholidays');
        
    }


}
