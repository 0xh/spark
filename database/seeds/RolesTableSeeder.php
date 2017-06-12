<?php

use Illuminate\Database\Seeder;
use  Illuminate\Support\Facades\DB as DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::Table('roles')->insert([
        	'name' => 'Developer',
            'slug' => 'developer'

    	]);

        DB::Table('roles')->insert([
        	'name' => 'Owner',
            'slug' => 'owner'

    	]);

        DB::Table('roles')->insert([
        	'name' => 'Administrator',
            'slug' => 'admin'

    	]);

        DB::Table('roles')->insert([
        	'name' => 'Tenant',
            'slug' => 'tenant'

    	]);
        
        DB::Table('roles')->insert([
        	'name' => 'Manager',
            'slug' => 'manager'
    	]);

        DB::Table('roles')->insert([
        	'name' => 'Worker',
            'slug' => 'worker'

    	]);

        DB::Table('roles')->insert([
        	'name' => 'Client',
            'slug' => 'client'

    	]);
        



    }
}
