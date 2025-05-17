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
                    'name' => 'Fruit',
                    'description' => 'This is fruit'
                ],
                [
                    'name' => 'Laptop',
                    'description' => 'This is laptop'
                ]
            ];

        foreach ($categories as $category) {
            Category::create($category);
        }

        
    }
}
