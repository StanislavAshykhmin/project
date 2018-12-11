<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateFriendUser2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('friend_user')->insert(
            [

                [
                    'user_id'=>'2',
                    'friend_id'=>'3',
                ],
            ]
        );
    }
}
