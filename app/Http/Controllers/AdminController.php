<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\users;
use Mail;

class AdminController extends Controller
{
    //To delete user
    public function delete_user() {
    	
        $data = request()->input('emp_id');

        $user = DB::select("
                DELETE FROM users WHERE emp_id = ?
            ", array($data));

        
        return view('/admin/admin');
    
        
    }

}
