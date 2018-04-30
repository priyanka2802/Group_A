<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Recommend;
use Illuminate\Support\Facades\DB;

class RegistrationController extends Controller
{
    // create a new user
    public function updateUsers(Request $request){
      if ($request->hasFile('pan_pic'))
{
  $na=$request->file('pan_pic')->getClientOriginalName();
$image = $request->file('pan_pic');
$pan_pic = time().$na;
$image->move('../public/images/', $pan_pic);
}
else
{
  $pan_pic="NULL";
}
 if ($request->hasFile('aadhaar_pic'))
{
$na=$request->file('aadhaar_pic')->getClientOriginalName();
$image = $request->file('aadhaar_pic');
$aadhaar_pic = time().$na;
$image->move('../public/images/', $aadhaar_pic);
}
else {
  $aadhaar_pic="NULL";
}

if ($request->hasFile('caste_pic'))
{
  $na=$request->file('caste_pic')->getClientOriginalName();
$image = $request->file('caste_pic');
$caste_pic = time().$na;
$image->move('../public/images/', $caste_pic);
}
else {
  $caste_pic="NULL";
}

   if ($request->hasFile('disability_pic')) {
      $na=$request->file('disability_pic')->getClientOriginalName();
$image = $request->file('disability_pic');
$disability_pic = time().$na;
$image->move('../public/images/', $disability_pic);

}
else {
  $disability_pic="NULL";
}

 if ($request->hasFile('achievement_pic')) {
  $na=$request->file('achievement_pic')->getClientOriginalName();
$image = $request->file('achievement_pic');
$achievement_pic = time().$na;
$image->move('../public/images/', $achievement_pic);
}
else {
  $achievement_pic="NULL";
}


        User::updateUsers(request()->all(),$pan_pic,$aadhaar_pic,$achievement_pic,$caste_pic,$disability_pic);

        return redirect()->route('homeAdmin');

    }

    // update user
    public function updateUser(Request $request){

             if ($request->hasFile('pan_pic'))
{
  $na=$request->file('pan_pic')->getClientOriginalName();
$image = $request->file('pan_pic');
$pan_pic = time().$na;
$image->move('../public/images/', $pan_pic);
}
else
{
  $pan_pic="NULL";
}
 if ($request->hasFile('aadhaar_pic'))
{
$na=$request->file('aadhaar_pic')->getClientOriginalName();
$image = $request->file('aadhaar_pic');
$aadhaar_pic = time().$na;
$image->move('../public/images/', $aadhaar_pic);
}
else {
  $aadhaar_pic="NULL";
}

if ($request->hasFile('caste_pic'))
{
  $na=$request->file('caste_pic')->getClientOriginalName();
$image = $request->file('caste_pic');
$caste_pic = time().$na;
$image->move('../public/images/', $caste_pic);
}
else {
  $caste_pic="NULL";
}

   if ($request->hasFile('disability_pic')) {
      $na=$request->file('disability_pic')->getClientOriginalName();
$image = $request->file('disability_pic');
$disability_pic = time().$na;
$image->move('../public/images/', $disability_pic);

}
else {
  $disability_pic="NULL";
}

 if ($request->hasFile('achievement_pic')) {
  $na=$request->file('achievement_pic')->getClientOriginalName();
$image = $request->file('achievement_pic');
$achievement_pic = time().$na;
$image->move('../public/images/', $achievement_pic);
}
else {
  $achievement_pic="NULL";
}


        User::updateUser(request()->all(),$pan_pic,$aadhaar_pic,$achievement_pic,$caste_pic,$disability_pic);

        return back();

    }

    public function create() {
    	return view('register');
    }


    // store the information of the user
    public function store(Request $request) {
    	//form validation.
    	$this->validate(request(), [
    		'emp_id' => 'required',
    		'email' => 'required|email',
    		'password' => 'required|min:6|confirmed',
    		'aadhaar' => 'required|min:12|max:12',
    		'name' => 'required',
    		'sex' => 'required',
    		'dob'	=> 'required',
    		'emp_type' => 'required',
    		'address' => 'required',
    		'religion' => 'required',
    		'caste' => 'required',
    		'contact' => 'required',
    		'pnt_no' => 'required',
    		'pan_no' => 'required',
    		'salutation' => 'required',
    		'category' => 'required',
    		'discipline' => 'required',
    		'salary' => 'required',
    		'appointed_on_quota' => 'required',
    		'achievements' => 'required',
    		'hometown' => 'required',
    		'marital_status' => 'required',
    		'children' => 'required',
    		'cl_balance' => 'required',
    		'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    		'pan_pic' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    		'aadhaar_pic' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

    	]);
            if ($request->hasFile('pan_pic'))
     {
        $na=$request->file('pan_pic')->getClientOriginalName();
   $image = $request->file('pan_pic');
    $pan_pic = time().$na;
    $image->move('../public/images/', $pan_pic);
   }
   else {
     $pan_pic="NULL";
   }
       if ($request->hasFile('aadhaar_pic'))
    {
    $na=$request->file('aadhaar_pic')->getClientOriginalName();
    $image = $request->file('aadhaar_pic');
    $aadhaar_pic = time().$na;
    $image->move('../public/images/', $aadhaar_pic);

   }
   else {
     $aadhaar_pic="NULL";
   }


     if ($request->hasFile('caste_pic'))
    {
        $na=$request->file('caste_pic')->getClientOriginalName();
    $image = $request->file('caste_pic');
    $caste_pic = time().$na;
    $image->move('../public/images/', $caste_pic);
   }
   else {
     $caste_pic="NULL";
     # code...
   }

         if ($request->hasFile('disability_pic')) {
            $na=$request->file('disability_pic')->getClientOriginalName();
    $image = $request->file('disability_pic');
    $disability_pic = time().$na;
    $image->move('../public/images/', $disability_pic);

  }
  else {
    $disability_pic="NULL";
  }


       if ($request->hasFile('achievement_pic')) {
        $na=$request->file('achievement_pic')->getClientOriginalName();
    $image = $request->file('achievement_pic');
    $achievement_pic = time().$na;
    $image->move('../public/images/', $achievement_pic);

    }
    else {
      $achievement_pic="NULL";
    }

        if ($request->hasFile('photo')) {
    $image = $request->file('photo');
    $name = time().'.'.$image->getClientOriginalExtension();
    $image->move('../public/images/', $name);

   /* $disability_pic = 'NULL';
    $achievement_pic ='NULL';
    $pan ='NULL';
    $aadhaar_pic ='NULL';
*/
  }
  else {
    $name="NULL";
  }


    	//FOR AUTHENTICATION PURPOSE.
    	User::insert_into_user(request()->all(),$name,$disability_pic,$achievement_pic,$pan_pic,$aadhaar_pic,$caste_pic);
  //  return back()->with('success','Image Upload successfully');

        //insert into leavebalances table.
        $user = request()->all();
        DB::statement("
            INSERT INTO leavebalances (emp_id, clbalance) VALUES (?,?)
        ", array($user['emp_id'], $user['cl_balance']));



    	return redirect()->route('homeAdmin');

    }
}

