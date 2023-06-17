<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
			'title' => 'sample1',
			'body' => '本文です',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime(),
		]);
		DB::table('posts')->insert([
			'title' => 'sample2',
			'body' => '練習です',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime(),
		]);
		DB::table('posts')->insert([
			'title' => 'sample3',
			'body' => '追加課題です',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime(),
		]);
    }
}
