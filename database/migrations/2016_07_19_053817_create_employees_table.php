<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
           $table->increments('id');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('title_name');
            $table->string('position_name');
            $table->string('mobile_num');
            $table->string('email_add')->unique();
            $table->string('password');
            $table->string('status')->default('INACTIVE');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employees');
    }
}
