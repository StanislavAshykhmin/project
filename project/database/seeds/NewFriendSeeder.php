<?php

use Illuminate\Database\Seeder;
use App\Friend;

class NewFriendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Friend::create([
            'name'=>"Kolya",
            'last_name'=>'Test',
        ]);
    }
}
