<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>"Stanislav",
            'email'=>'ashykhminstanislav@gmail.com',
            'password'=> bcrypt('admin'),
            'last_name'=>'Ashykhmin',
            'address'=>'Stanykovicha str, 115',
            'photo' => 'uploads/1.jpeg',
            'birthday'=>'1995-05-22',
            'sex'=>'male',
            'phone'=>'0951072052',
            'death'=>'2200-05-22',

        ]);
    }
}
