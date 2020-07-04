<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class CategoryTableSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        \DB::table('categories')->truncate();

        \DB::table('categories')->insert([
            'id' => 1,
            'name' => 'Blog',
            'slug' => 'blog',
            'type' => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        \DB::table('categories')->insert([
            'id' => 2,
            'name' => 'Bài viết',
            'slug' => 'bai-viet',
            'type' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        \DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
