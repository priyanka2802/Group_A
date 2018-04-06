<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('emp_id')->unique();
            $table->string('name');
            $table->string('emp_type');
            $table->string('email')->unique();
            $table->string('password');
            $table->date('dob');
            $table->date('joined_date')->default(NULL);
            $table->enum('sex', array('M','F'));
            $table->string('address');
            $table->string('religion');
            $table->string('caste');
            $table->bigInteger('contact');
            $table->string('salutation');
            $table->string('category');
            $table->enum('physically_disabled', array('Y', 'N'));
            $table->bigInteger('pnt_no');
            $table->string('appointed_on_quota');
            $table->string('discipline');
            $table->string('achievements');
            $table->string('hometown');
            $table->string('pan_no');
            $table->bigInteger('aadhaar');
            $table->integer('salary');
            $table->string('marital_status');
            $table->integer('children');
            $table->integer('cl_balance');
            //$table->integer('ocl_balance');
            $table->string('photo');
            $table->string('achievement_pic');
            $table->string('caste_pic');
            $table->string('aadhaar_pic');
            $table->string('pan_pic');
            $table->string('disability_pic');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
