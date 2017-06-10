<?php

use Illuminate\Database\Seeder;
use  Illuminate\Support\Facades\DB as DB;

class ScriptunitedMetroskinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert new data to groups
        DB::Table('groups')->insert([
            'group_title' => 'SuperDev',
        ]);

        DB::Table('groups')->insert([
            'group_title' => 'SuperAdmin',
        ]);

        DB::Table('groups')->insert([
            'group_title' => 'Administrator',
        ]);

        DB::Table('groups')->insert([
            'group_title' => 'User',
        ]);


        // insert admin user
        DB::Table('users')->insert([
        	'name' => 'demo',
        	'email' => 'demo@demo.com',
        	'password' => bcrypt('demo'),

    	]);
        



    }
}
