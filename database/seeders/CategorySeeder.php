<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $categories = ['Politik', 'Kesehatan', 'Teknologi', 'Hiburan', 'Olahraga'];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}
