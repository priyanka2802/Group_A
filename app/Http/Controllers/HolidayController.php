<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HolidayController extends Controller
{
  public function display()
{
      $holiday = DB::select("
          SELECT * FROM holidays ORDER BY date
      ");
      // dd($holiday);
        return view('holidaylist', compact('holiday'));

}
}
