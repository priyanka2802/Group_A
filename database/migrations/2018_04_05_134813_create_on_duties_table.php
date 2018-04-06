<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOnDutiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
                CREATE TABLE onduties (
                    ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
                    emp_id varchar(20),
                    start_date date,
                    end_date date,
                    Leave_info text,
                    conference text,
                    contact bigint,
                    status text,
                    pdf_file text,
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
        Schema::dropIfExists('on_duties');
    }
}
