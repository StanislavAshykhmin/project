<?php

use Illuminate\Database\Seeder;
use App\User;

class CreateUser2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>"Taras",
            'email'=>'test12@gmail.com',
            'last_name'=>'Test',
            'address'=>'Stanykovicha str, 115',
            'photo' => 'uploads/2.jpeg',
            'birthday'=>'1996-05-23',
            'sex'=>'male',
            'phone'=>'0507894561',
            'death'=>'2200-05-23',

        ]);
    }
}
