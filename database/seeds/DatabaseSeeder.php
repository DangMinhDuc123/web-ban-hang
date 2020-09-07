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
       \DB::table('admins')->insert([
       	'name' => 'MinhDuc',
       	'email' => 'admin@gmail.com',
       	'password' => bcrypt('admin@123')
       ]);
    }
}
