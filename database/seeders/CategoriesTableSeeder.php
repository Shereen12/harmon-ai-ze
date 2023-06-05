<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'uuid' => Str::uuid(),
            'name' => 'Studying',
            'slug' => 'studying'
        ]);

        Category::create([
            'uuid' => Str::uuid(),
            'name' => 'Editing',
            'slug' => 'editing'
        ]);

        Category::create([
            'uuid' => Str::uuid(),
            'name' => 'Presentations',
            'slug' => 'presentations'
        ]);

        Category::create([
            'uuid' => Str::uuid(),
            'name' => 'Designs',
            'slug' => 'designs'
        ]);

        Category::create([
            'uuid' => Str::uuid(),
            'name' => 'Coding',
            'slug' => 'coding'
        ]);

        Category::create([
            'uuid' => Str::uuid(),
            'name' => 'Dubbing and Subtitles',
            'slug' => 'dubbing-and-subtitles'
        ]);

        Category::create([
            'uuid' => Str::uuid(),
            'name' => 'Business meetings',
            'slug' => 'business-meetings'
        ]);
    }
}
