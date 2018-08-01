<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        User::create([
        	'name' => 'Penda Faye',
        	'email' => 'mpendafaye@gmail.com',
        	'password' => bcrypt('admin'),
        	]);
    }
}
