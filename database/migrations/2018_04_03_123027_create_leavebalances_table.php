<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeavebalancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE TABLE leavebalances (
                ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
                emp_id varchar(20) UNIQUE,
                clbalance int,
                specialcl int,
                onduty int,
                hpl int,
                el int,
                vacation int,
                eol int,
                maternity int,
                paternity int,
                study int,
                td TIMESTAMP DEFAULT CURRENT_TIMESTAMP
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
        Schema::dropIfExists('leavebalances');
    }
}
