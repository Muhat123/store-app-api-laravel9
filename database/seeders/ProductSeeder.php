<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'product_category_id' => 1,
            'name' => 'Smartphone',
            'price' => 500.00,
            'image' => 'smartphone.jpg',
        ]);

        Product::create([
            'product_category_id' => 2,
            'name' => 'Sofa',
            'price' => 1500.00,
            'image' => 'sofa.jpg',
        ]);
    }
}
