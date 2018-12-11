<?php

use Illuminate\Database\Seeder;


class ConnectionsSeeder extends Seeder
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
                    'user_id'=>'1',
                    'friend_id'=>'1',
                ],
            ]
        );
    }
}
