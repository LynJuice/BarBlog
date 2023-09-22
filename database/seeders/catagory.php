<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class catagory extends Seeder
{
    public function run()
    {
        // seed catagory table
        DB::table('catagory')->insert([
            'catagory' => 'This is a catagory',
        ]);
    }
}
