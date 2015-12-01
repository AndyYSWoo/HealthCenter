<?php

use Illuminate\Database\Seeder;

class PlayerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('player')->insert([
            'name'      => 'andy',
            'type'      => 0,
            'true_name' => 'Yongshang Wu',
            'email'     => 'andyyswoo@gmail.com',
            'password'  => bcrypt('123456'),
        ]);
    }
}
