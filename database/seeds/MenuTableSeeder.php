<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            'title' => 'Posts',
            'url' => '/posts',
            'sort' => 0
        ]);
    }
}
