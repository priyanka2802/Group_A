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
        return view('holidaylist1', compact('holiday'));

}

}
