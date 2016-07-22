<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call('UsersTableSeeder');
        //$this->call('EmployeesTableSeeder');
        //$this->call('TravelRequestTableSeeder');
        //$this->call('JericAccountSeeder');
        $this->call('TitleTableSeeder');
    }
}
class TitleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        App\Title::truncate();
        factory(App\Title::class, 10)->create();
    }
}

// class JericAccountSeeder extends Seeder 
// {
//     public function run()
//     {
//         $jeric = new User();
//         $jeric->last_name = 'Del Rosario';
//         $jeric->first_name = 'Jeric';    
//         $jeric->title_name = 'Mr.';
//         $jeric->email = 'jeric@gmail.com';
//         $jeric->password = bcrypt('123123');
//         $jeric->pic = 'jeric.jpg';
//         $jeric->contact_num = '09301234567';
//         $jeric->status = 'ACTIVE';
//         $jeric->address = '5107 Fern Square Apt. 642 Breitenbergburgh, TX 12766';
//         $jeric->remember_token = 'Ghs2jtPx8iD6cauZCI6fGQnWWHlkIhIZWOI9N6exK5AW4tqTJ1SaN5MUiw6z';
//         $jeric->save();
//     }

// }
