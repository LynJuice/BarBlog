<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class blog extends Seeder
{
    public function run()
    {
        // seed blog table
        DB::table('blog')->insert([
            'title' => 'This is a blog title',
            'description' => 'This is a blog description',
            'catagory_id' => 1,
            'user_id' => 1,
        ]);
    }
}
