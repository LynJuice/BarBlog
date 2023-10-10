<?php

namespace Database\Seeders;

use Database\Factories\BlogFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    public function run()
    {
        BlogFactory::new()->count(10)->create();
    }
}
