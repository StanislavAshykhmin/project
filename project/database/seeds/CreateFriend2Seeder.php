<?php

use Illuminate\Database\Seeder;
use App\Friend;
class CreateFriend2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Friend::create([
            'name'=>"Taras",
            'last_name'=>'Test',
        ]);
    }
}
