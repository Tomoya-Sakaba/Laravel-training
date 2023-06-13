<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
			'body' => '本文です'
		]);
		DB::table('posts')->insert([
			'title' => 'sample2',
			'body' => '練習です'
		]);
		DB::table('posts')->insert([
			'title' => 'sample3',
			'body' => '追加課題です'
		]);
    }
}
