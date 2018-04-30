<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Holiday extends Model
{
    public static function insertIntoHolidays($holiday) {

            DB::insert("
                INSERT INTO holidays (Date, Description) VALUES (?, ?)
            ", array($holiday['date'], $holiday['Description']));
     
    }

}
