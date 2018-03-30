<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Recommend extends Model
{
    //to insert into recommends table.
    public static function insertintorecommend($recommend,$p,$disability_pic,$achievement_pic,$pan,$aadhaar_pic){
    	// dd($recommend);
    	if($recommend['emp_type'] == 'recommending')
    	{
    		DB::statement("
				INSERT INTO recommends (emp_id, name, email, discipline,photo,disability_pic,achievement_pic,pan,aadhaar_pic) VALUES (?,?,?,?,?,?,?,?,?)
    		", array($recommend['emp_id'], $recommend['name'], $recommend['email'], $recommend['discipline'],$p,$disability_pic,$achievement_pic,$pan,$aadhaar_pic ));
    	}
    }
}
