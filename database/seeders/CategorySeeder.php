<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        DB::table('blog_categories')->insert([
//                'name' => 'categories',
//                'slug' => 'categories',
//                'description' => 'description description description',
//                'is_visible' => true,
//            ]
//        );
        DB::table('categories')->insert([
                'title' => 'categories',
                'slug' => 'categories',
//                'description' => 'description description description',
//                'is_visible' => true,
            ]
        );
    }
}
