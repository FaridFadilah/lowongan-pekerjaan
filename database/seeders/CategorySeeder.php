<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        Category::create([
            'name' => 'software engineer'
        ]);
        Category::create([
            'name' => 'marketing'
        ]);
        Category::create([
            'name' => 'content creator'
        ]);
        Category::create([
            'name' => 'desain'
        ]);
        Category::create([
            'name' => 'marketing'
        ]);
    }
}