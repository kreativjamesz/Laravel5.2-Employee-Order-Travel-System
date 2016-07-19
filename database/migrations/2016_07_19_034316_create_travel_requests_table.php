<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTravelRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('travel_purpose');
            $table->dateTime('travel_date_time');
            $table->string('travel_destination');
            $table->string('travel_airline_carrier');
            $table->string('travel_no');
            $table->string('travel_remarks');
            $table->string('travel_status');
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
        Schema::drop('travel_requests');
    }
}
