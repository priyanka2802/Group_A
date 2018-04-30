<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HolidayController extends Controller
{
  public function display()
{
      $holiday = DB::select("
          SELECT * FROM holidays ORDER BY date DESC
      ");
        return view('holidaylist', compact('holiday'));

}

public function display1()
{
      $holiday = DB::select("
          SELECT * FROM holidays ORDER BY date DESC
      ");
      $user_details = DB::select("
            SELECT * FROM users WHERE id=?
        ", array(auth()->id()));
        $user_details = $user_details[0];
        return view('holidaylist1', compact('holiday','user_details'));

}

public function display2()
{
      $holiday = DB::select("
          SELECT * FROM holidays ORDER BY date DESC
      ");
      $user_details = DB::select("
            SELECT * FROM users WHERE id=?
        ", array(auth()->id()));
        $user_details = $user_details[0];
        return view('holidaylist2', compact('holiday','user_details'));

}

public function display3()
{
      $holiday = DB::select("
          SELECT * FROM holidays ORDER BY date DESC
      ");
      $user_details = DB::select("
            SELECT * FROM users WHERE id=?
        ", array(auth()->id()));
        $user_details = $user_details[0];
        return view('holidaylist3', compact('holiday','user_details'));

}

}
