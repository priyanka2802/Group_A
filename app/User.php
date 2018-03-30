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
        'name', 'email', 'password', 'emp_id', 'emp_type', 'sex', 'address', 'religion', 'caste', 'contact', 'salutation', 'category', 'physically_disabled', 'pnt_no', 'appointed_on_quota', 'discipline', 'achievements', 'hometown', 'pan_no', 'aadhaar', 'salary', 'marital_status', 'children', 'cl_balance', 'photo', 'dob','caste_pic','achievement_pic','aadhaar_pic','pan_pic','disability_pic'
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
        $details = $details[0];
        return $details;
    }

    //to insert info into users table.

    public static function insert_into_user($user,$p,$disability_pic,$achievement_pic,$pan_pic,  $aadhaar_pic,$caste_pic) {
        $user = User::create([
            'emp_id'        => $user['emp_id'],
            'name'          => $user['name'],
            'emp_type'      => $user['emp_type'],
            'email'         => $user['email'],
            'password'      => bcrypt($user['password']),
            'dob'           => $user['dob'],
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
