<?php

use Illuminate\Database\Seeder;
use App\TravelRequest;

class TravelRequestTableSeeder extends Seeder
{
    public function run()
    {
        App\TravelRequest::truncate();
	    factory(App\TravelRequest::class, 20)->create();
    }
}
