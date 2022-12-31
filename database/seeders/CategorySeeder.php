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
        Category::create([ // 1
            'name' => 'software-engineer'
        ]);
        Category::create([ // 2
            'name' => 'marketing'
        ]);
        Category::create([ // 3
            'name' => 'content-creator'
        ]);
        Category::create([ // 4
            'name' => 'desain'
        ]);
        Category::create([ // 5
            'name' => 'human-resources-development'
        ]);
        Category::create([ // 6
            'name' => 'product-manager'
        ]);
        Category::create([ // 7
            'name' => 'production'
        ]);
    }
}