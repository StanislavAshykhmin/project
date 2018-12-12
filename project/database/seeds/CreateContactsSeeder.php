<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            [
            'name'=>"Kolya",
            'email'=>'test@gmail.com',
            'last_name'=>'Test',
            'address'=>'Stanykovicha str, 115',
            'photo' => 'uploads/2.jpeg',
            'birthday'=>'1996-05-23',
            'sex'=>'male',
            'phone'=>'0507894561',
            'death'=>'2200-05-23',
                'parent_id'=>'0'

        ],
            [
                'name'=>"Anton",
                'email'=>'test1@gmail.com',
                'last_name'=>'Test',
                'address'=>'Stanykovicha str, 115',
                'photo' => 'uploads/2.jpeg',
                'birthday'=>'1996-05-23',
                'sex'=>'female',
                'phone'=>'0507894561',
                'death'=>'2200-05-23',
                'parent_id'=>'1',

            ],
            [
                'name'=>"Stas",
                'email'=>'test2@gmail.com',
                'last_name'=>'Test',
                'address'=>'Stanykovicha str, 115',
                'photo' => 'uploads/2.jpeg',
                'birthday'=>'1996-05-23',
                'sex'=>'male',
                'phone'=>'0507894561',
                'death'=>'2200-05-23',
                'parent_id'=>'1',
            ],
            [
                'name'=>"Taras",
                'email'=>'test3@gmail.com',
                'last_name'=>'Test',
                'address'=>'Stanykovicha str, 115',
                'photo' => 'uploads/2.jpeg',
                'birthday'=>'1996-05-23',
                'sex'=>'male',
                'phone'=>'0507894561',
                'death'=>'2200-05-23',
                'parent_id'=>'3',
            ]

        ]);
    }
}
