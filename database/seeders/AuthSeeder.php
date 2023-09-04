<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        DB::table('blog_authors')->insert([
//            'name' => 'admin',
//            'email' => 'admin@admin.com',
//        ]);
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin2@admin.com',
            'password' => bcrypt('123456789'),
        ]);
    }
}
