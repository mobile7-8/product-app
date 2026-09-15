<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Product 1',
            'price' => 10.99,
            'qty' => 100,
            'discount' => 0,
            'des' => 'Description for Product 1',
        ]);

        Product::create([
            'name' => 'Product 2',
            'price' => 19.99,
            'qty' => 50,
            'discount' => 5,
            'des' => 'Description for Product 2',
        ]);

        Product::create([
            'name' => 'Product 3',
            'price' => 5.99,
            'qty' => 200,
            'discount' => 0,
            'des' => 'Description for Product 3',
        ]);

        Product::create([
            'name' => 'Product 4',
            'price' => 15.99,
            'qty' => 75,
            'discount' => 2,
            'des' => 'Description for Product 4',
        ]);

        Product::create([
            'name' => 'Product 5',
            'price' => 8.99,
            'qty' => 150,
            'discount' => 0,
            'des' => 'Description for Product 5',
        ]);
    }
}
