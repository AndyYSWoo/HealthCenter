<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
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
        // user
        DB::table('users')->insert([
            'name'      => 'andy',
            'type'      => User::TYPE_PLAYER,
            'true_name' => 'Yongshang Wu',
            'email'     => 'andyyswoo@gmail.com',
            'password'  => bcrypt('123456'),
            'gender'    => 1,
            'birthday'  => strtotime('May 1 1995'),
            'created_at'=> time(),
            'updated_at'=> time(),
        ]);
        DB::table('users')->insert([
            'name'      => 'cindy',
            'type'      => User::TYPE_COACH,
            'true_name' => 'MaoPeng',
            'email'     => 'coach@gmail.com',
            'password'  => bcrypt('123456'),
            'gender'    => 1,
            'birthday'  => strtotime('May 1 1995'),
            'created_at'=> time(),
            'updated_at'=> time(),
        ]);
        DB::table('users')->insert([
            'name'      => 'sindy',
            'type'      => User::TYPE_DOCTOR,
            'true_name' => 'Doctor',
            'email'     => 'doctor@gmail.com',
            'password'  => bcrypt('123456'),
            'gender'    => 1,
            'birthday'  => strtotime('May 1 1995'),            
            'created_at'=> time(),
            'updated_at'=> time(),
        ]);
        DB::table('users')->insert([
            'name'      => 'admin',
            'type'      => User::TYPE_ADMIN,
            'true_name' => 'TrueAdmin',
            'email'     => 'admin@gmail.com',
            'password'  => bcrypt('123456'),
            'gender'    => 1,
            'birthday'  => strtotime('May 1 1995'),            
            'created_at'=> time(),
            'updated_at'=> time(),
        ]);
        DB::table('player')->insert([
            'id'      => 1,
            'birthday'      => '1995-5-28',
            'age'     => 20
        ]);
        DB::table('coach')->insert([
            'id'      => 2,
            'type'      => 1,
            'level'      => 1,
        ]);
        DB::table('doctor')->insert([
            'id'      => 3,
            'type'      => 1,
            'level'      => 1,
        ]);
        DB::table('admin')->insert([
            'id'      => 4,
            'privilege'      => 1,
        ]);//~
        // HealthData
        factory('App\healthentry',50)->create();
        // Sports
        factory('App\sportsentry',50)->create();
        // Activity
        factory('App\activity',50)->create();
        Model::reguard();
        // doctor
        DB::table('player_has_doctor')->insert([
            'player_id'      => 1,
            'doctor_id'      => 3,
            'status'         => 1,
            'message'        => '大夫您好！我是陈先生推荐来的！',
            'created_at'     => time(),
            'updated_at'     => time(),
        ]);
        DB::table('calendarevent')->insert([
            'client_id'      => 1,
            'doctor_id'      => 3,
            'title'          => '大夫一起吃个饭吧！',
            'type'           => 2,
            'status'         =>  1,
            'start_time'     => '2015-12-3T12:00:00',
            'end_time'       => '2015-12-3T14:00:00',
        ]);
        
    }
}
