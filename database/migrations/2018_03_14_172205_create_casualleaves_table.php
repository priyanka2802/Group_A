<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasualLeavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
                CREATE TABLE casualleaves (
                    ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
                    emp_id varchar(20),
                    no_of_days int,
                    start_date date,
                    purpose text,
                    contact_no bigint,
                    status text,
                    approving varchar(30),
                    recommending varchar(30)
                );
            ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('casualleaves');
    }
}
