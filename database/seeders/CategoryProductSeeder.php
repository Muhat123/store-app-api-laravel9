<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CategoryProduct;

class CategoryProductSeeder extends Seeder
{
    public function run()
    {
        CategoryProduct::create(['name' => 'Electronics']);
        CategoryProduct::create(['name' => 'Furniture']);
    }
}

