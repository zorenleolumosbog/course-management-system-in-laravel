<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UserSeeder::class);

        DB::table('users')->insert([

        	'name' => "admin",
        	'email' => "admin@gmail.com",
        	'password'=> bcrypt('admin123'),
        	 'remember_token' => '1',

        ]);

        
            
    }
}
