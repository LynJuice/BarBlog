<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class comment extends Seeder
{
    public function run()
    {
        // seed comment table
        DB::table('comment')->insert([
            'comment' => 'This is a comment',
            'blog_id' => 1,
            'user_id' => 1,
        ]);
    }
}
