<?php

use Illuminate\Database\Seeder;
use App\Employee;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
    	App\Employee::truncate();
	    factory(App\Employee::class, 50)->create();
    }
}
