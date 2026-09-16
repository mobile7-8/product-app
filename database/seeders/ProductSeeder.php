<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
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
        Product::create([
            'name' => 'Product 6',
            'price' => 12.99,
            'qty' => 80,
            'discount' => 3,
            'des' => 'Description for Product 6',
        ]);
        Product::create([
            'name' => 'Product 7',
            'price' => 9.99,
            'qty' => 120,
            'discount' => 0,
            'des' => 'Description for Product 7',
        ]);
        Product::create([
            'name' => 'Product 8',
            'price' => 14.99,
            'qty' => 60,
            'discount' => 1,
            'des' => 'Description for Product 8',
        ]);
        Product::create([
            'name' => 'Product 9',
            'price' => 7.99,
            'qty' => 90,
            'discount' => 0,
            'des' => 'Description for Product 9',
        ]);
        Product::create([
            'name' => 'Product 10',
            'price' => 11.99,
            'qty' => 110,
            'discount' => 2,
            'des' => 'Description for Product 10',
        ]);

Product::create([
    'name' => 'Product 31',
    'price' => 12.50,
    'qty' => 60,
    'discount' => 5,
    'des' => 'Description for Product 31',
]);

Product::create([
    'name' => 'Product 32',
    'price' => 15.99,
    'qty' => 85,
    'discount' => 10,
    'des' => 'Description for Product 32',
]);

Product::create([
    'name' => 'Product 33',
    'price' => 6.75,
    'qty' => 120,
    'discount' => 0,
    'des' => 'Description for Product 33',
]);

Product::create([
    'name' => 'Product 34',
    'price' => 19.99,
    'qty' => 50,
    'discount' => 15,
    'des' => 'Description for Product 34',
]);

Product::create([
    'name' => 'Product 35',
    'price' => 9.49,
    'qty' => 95,
    'discount' => 5,
    'des' => 'Description for Product 35',
]);

Product::create([
    'name' => 'Product 36',
    'price' => 24.99,
    'qty' => 40,
    'discount' => 20,
    'des' => 'Description for Product 36',
]);

Product::create([
    'name' => 'Product 37',
    'price' => 11.25,
    'qty' => 70,
    'discount' => 0,
    'des' => 'Description for Product 37',
]);

Product::create([
    'name' => 'Product 38',
    'price' => 17.50,
    'qty' => 65,
    'discount' => 10,
    'des' => 'Description for Product 38',
]);

Product::create([
    'name' => 'Product 39',
    'price' => 5.99,
    'qty' => 110,
    'discount' => 0,
    'des' => 'Description for Product 39',
]);

Product::create([
    'name' => 'Product 40',
    'price' => 29.99,
    'qty' => 35,
    'discount' => 25,
    'des' => 'Description for Product 40',
]);
    }
}
