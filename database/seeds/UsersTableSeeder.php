<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
                'role_id'=>1,
        		'name'=>'tuhin',
        		'username'=>'tuhin',
        		'email'=>'tuhinsshadow@gmail.com',
        		'password'=>bcrypt('ash1201033m'),
        		'remember_token'=>str_random(10),
                'active'=>1,
        	]);
    }
}
