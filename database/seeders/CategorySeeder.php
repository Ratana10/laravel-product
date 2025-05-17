<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $categories = [
            [
                'name' => 'Electronics',
                'description' => 'Electronic devices and gadgets'
            ],
            [
                'name' => 'Clothing',
                'description' => 'Shirts, pants, and other wearable items'
            ],
            [
                'name' => 'Books',
                'description' => 'Physical and digital books'
            ],
            [
                'name' => 'Home & Kitchen',
                'description' => 'Items for home and kitchen use'
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
