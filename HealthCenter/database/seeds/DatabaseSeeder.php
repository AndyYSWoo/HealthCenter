<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        DB::table('users')->insert([
            'name'      => 'andy',
            'type'      => 0,
            'true_name' => 'Yongshang Wu',
            'email'     => 'andyyswoo@gmail.com',
            'password'  => bcrypt('123456'),
            'created_at'=> time(),
            'updated_at'=> time(),
        ]);
        DB::table('player')->insert([
            'id'      => 1,
            'birthday'      => '1995-5-28',
        ]);
        Model::reguard();
    }
}
