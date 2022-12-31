<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        Type::create([ // 1
            'name' => 'full-time'
        ]);
        Type::create([ // 2
            'name' => 'part-time'
        ]);
        Type::create([ // 3
            'name' => 'magang'
        ]);
        Type::create([ // 4
            'name' => 'freelance'
        ]);
    }
}