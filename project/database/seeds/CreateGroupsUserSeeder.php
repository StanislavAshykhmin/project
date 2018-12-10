<?php

use Illuminate\Database\Seeder;
use App\Group;

class CreateGroupsUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::create([
            'user_id'=>'2',
            'group_name'=>'family',

        ]);
    }
}
