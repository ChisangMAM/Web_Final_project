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
        // $this->call(UsersTableSeeder::class);
        DB::table('customers')-> insert ([
        	'id' => '',
        	'name' => 'chi',
        	'email' => 'chisangmorm@gmail.com',
        	'phonenumber' => '089631347',

        ]);
    }
}
