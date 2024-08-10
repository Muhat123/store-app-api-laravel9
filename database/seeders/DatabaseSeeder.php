<?php

namespace Database\Seeders;


use Database\Seeders\UserSeeder as SeedersUserSeeder;
use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            SeedersUserSeeder::class,
            CategoryProductSeeder::class,
            ProductSeeder::class,
        ]);
    }
}

