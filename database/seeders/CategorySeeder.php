<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Technology',
            'slug' => 'technology',
        ]);
        Category::create([
            'name' => 'Medicine',
            'slug' => 'medicine',
        ]);
        Category::create([
            'name' => 'Artificial Intelligence',
            'slug' => 'ai',
        ]);
    }
}
