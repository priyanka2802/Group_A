<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'emp_id', 'emp_type', 'sex', 'address', 'religion', 'caste', 'contact', 'salutation', 'category', 'physically_disabled', 'pnt_no', 'appointed_on_quota', 'discipline', 'achievements', 'hometown', 'pan_no', 'aadhaar', 'salary', 'marital_status', 'children', 'cl_balance', 'photo', 'dob','caste_pic','achievement_pic','aadhaar_pic','pan_pic','disability_pic', 'joined_date',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //to get details of the authorised user.
    public static function getUserDetails($id) {
        $details = DB::select("
            SELECT * FROM users WHERE id = ?
        ", array($id));
        // dd($details);
        $details = $details[0];
        return $details;
    }



    public static function updateUsers($user,$pan_pic,$aadhaar_pic,$achievement_pic,$caste_pic,$disability_pic) {
        DB::update("
            UPDATE users SET
            emp_type      = ?,
            email         = ?,
            dob           = ?,
            sex        = ? ,
            address       = ?,
            religion      = ? ,
            caste        = ?,
            contact    = ? ,
            category      = ? ,
            physically_disabled = ?,
            pnt_no        = ? ,
            appointed_on_quota = ?,
            discipline   = ? ,
            achievements  = ? ,
            hometown      = ? ,
            pan_no        = ?,
            aadhaar     = ?,
            salary        = ?,
            marital_status= ? ,
            children      = ?
            where emp_id = ?


        ", array($user['emp_type'], $user['email'],  $user['dob'], $user['sex'], $user['address'], $user['religion'], $user['caste'], $user['contact'], $user['category'], $user['physically_disabled'], $user['pnt_no'], $user['appointed_on_quota'], $user['discipline'], $user['achievements'], $user['hometown'], $user['pan_no'], $user['aadhaar'], $user['salary'], $user['marital_status'], $user['children'], $user['emp_id']));

if($pan_pic!="NULL")
        {
          DB::update("
              UPDATE users SET
              pan_pic = ?
              where emp_id=? ",array($pan_pic,$user['emp_id']));

        }
        if($achievement_pic!="NULL")
        {
          DB::update("
              UPDATE users SET
              achievement_pic = ?
              where emp_id=? ",array($achievement_pic,$user['emp_id']));

        }
        if($caste_pic!="NULL")
        {
          DB::update("
              UPDATE users SET
              caste_pic = ?
              where emp_id=? ",array($caste_pic,$user['emp_id']));
        }
        if($disability_pic!="NULL")
        {
          DB::update("
              UPDATE users SET
              disability_pic = ?
              where emp_id=? ",array($disability_pic,$user['emp_id']));

        }
        if($aadhaar_pic!="NULL")
        {
          DB::update("
              UPDATE users SET
              aadhaar_pic = ?
              where emp_id=? ",array($aadhaar_pic,$user['emp_id']));
      }


    }


    public static function updateUser($user,$pan_pic,$aadhaar_pic,$achievement_pic,$caste_pic,$disability_pic) {
// dd(auth()->id());
        DB::update("
            UPDATE users SET
            name = ?,
            email         = ?,
            dob           = ?,
            sex        = ? ,
            address       = ?,
            religion      = ? ,
            caste        = ?,
            contact    = ? ,
            category      = ? ,
            physically_disabled = ?,
            pnt_no        = ? ,
            appointed_on_quota = ?,
            discipline   = ? ,
            achievements  = ? ,
            hometown      = ? ,
            pan_no        = ?,
            aadhaar     = ?,
            marital_status= ? ,
            children      = ?
            where id = ?

        ", array($user['name'], $user['email'],  $user['dob'], $user['sex'], $user['address'], $user['religion'], $user['caste'], $user['contact'], $user['category'], $user['physically_disabled'], $user['pnt_no'], $user['appointed_on_quota'], $user['discipline'], $user['achievements'], $user['hometown'], $user['pan_no'], $user['aadhaar'], $user['marital_status'], $user['children'], auth()->id()));


        if($pan_pic!="NULL")
        {
          DB::update("
              UPDATE users SET
              pan_pic = ?
              where id=? ",array($pan_pic,auth()->id()));

        }
        if($achievement_pic!="NULL")
        {
          DB::update("
              UPDATE users SET
              achievement_pic = ?
              where id=? ",array($achievement_pic,auth()->id()));

        }
        if($caste_pic!="NULL")
        {
          DB::update("
              UPDATE users SET
              caste_pic = ?
              where id=? ",array($caste_pic,auth()->id()));
        }
        if($disability_pic!="NULL")
        {
          DB::update("
              UPDATE users SET
              disability_pic = ?
              where id=? ",array($disability_pic,auth()->id()));

        }
        if($aadhaar_pic!="NULL")
        {
          DB::update("
              UPDATE users SET
              aadhaar_pic = ?
              where id=? ",array($aadhaar_pic,auth()->id()));
}


    }


    //to insert info into users table.

    public static function insert_into_user($user,$p,$disability_pic,$achievement_pic,$pan_pic,  $aadhaar_pic,$caste_pic) {
        $now = DB::raw('NOW()');
        $user = User::create([
            'emp_id'        => $user['emp_id'],
            'name'          => $user['name'],
            'emp_type'      => $user['emp_type'],
            'email'         => $user['email'],
            'password'      => bcrypt($user['password']),
            'dob'           => $user['dob'],
            'joined_date'   => $now,
            'sex'        => $user['sex'],
            'address'       => $user['address'],
            'religion'      => $user['religion'],
            'caste'         => $user['caste'],
            'contact'    => $user['contact'],
            'salutation'    => $user['salutation'],
            'category'      => $user['category'],
            'physically_disabled' => $user['physically_disabled'],
            'pnt_no'        => $user['pnt_no'],
            'appointed_on_quota' => $user['appointed_on_quota'],
            'discipline'    => $user['discipline'],
            'achievements'  => $user['achievements'],
            'hometown'      => $user['hometown'],
            'pan_no'        => $user['pan_no'],
            'aadhaar'     => $user['aadhaar'],
            'salary'        => $user['salary'],
            'marital_status'=> $user['marital_status'],
            'children'      => $user['children'],
            'cl_balance'    => $user['cl_balance'],
            'photo'         => $p,
            'disability_pic' => $disability_pic,
            'pan_pic' => $pan_pic,
            'aadhaar_pic' => $aadhaar_pic,
            'achievement_pic' => $achievement_pic,
            'caste_pic' => $caste_pic
        ]);


        auth()->login($user);
}
}
