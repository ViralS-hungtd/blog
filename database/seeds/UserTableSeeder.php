<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        \DB::table('users')->truncate();

        \DB::table('users')->insert([
            'id' => 1,
            'email' => 'admin@gmail.com',
            'name' => 'admin',
            'password' => bcrypt('123456'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        \DB::table('roles')->truncate();

        \DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
