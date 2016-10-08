<?php

use Illuminate\Database\Seeder;

class AddUserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'e.nakoneschniy@gmail.com',
            'password' => bcrypt('qwerty'),
            'remember_token' => str_random(10),
        ]);
    }
}
