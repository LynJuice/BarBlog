<?php

namespace Database\Seeders;

use Database\Factories\CatagoryFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatagorySeeder extends Seeder
{
    public function run()
    {
        CatagoryFactory::new()->count(10)->create();
    }
}
