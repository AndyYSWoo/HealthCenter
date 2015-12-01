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
            'created_at'=> time(),
            'updated_at'=> time(),
        ]);
        DB::table('users')->insert([
            'name'      => 'cindy',
            'type'      => User::TYPE_COACH,
            'true_name' => 'MaoPeng',
            'email'     => 'coach@gmail.com',
            'password'  => bcrypt('123456'),
            'created_at'=> time(),
            'updated_at'=> time(),
        ]);
        DB::table('users')->insert([
            'name'      => 'sindy',
            'type'      => User::TYPE_DOCTOR,
            'true_name' => 'Doctor',
            'email'     => 'doctor@gmail.com',
            'password'  => bcrypt('123456'),
            'created_at'=> time(),
            'updated_at'=> time(),
        ]);
        DB::table('users')->insert([
            'name'      => 'admin',
            'type'      => User::TYPE_ADMIN,
            'true_name' => 'TrueAdmin',
            'email'     => 'admin@gmail.com',
            'password'  => bcrypt('123456'),
            'created_at'=> time(),
            'updated_at'=> time(),
        ]);
        DB::table('player')->insert([
            'id'      => 1,
            'birthday'      => '1995-5-28',
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
        
        Model::reguard();
    }
}
