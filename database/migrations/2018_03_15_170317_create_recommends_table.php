<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecommendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE TABLE recommends(
                ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
                emp_id varchar(20) UNIQUE,
                name varchar(30),
                email varchar(30) UNIQUE,
                discipline varchar(20)
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
        Schema::dropIfExists('recommends');
    }
}
