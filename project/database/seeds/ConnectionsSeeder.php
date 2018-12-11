<?php

use Illuminate\Database\Seeder;
use App\Connection;

class ConnectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Connection::create([
            'connect_user_id'=>'2',
            'connect_user_p_id'=>'1',
        ]);
    }
}
