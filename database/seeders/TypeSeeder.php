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
        Type::create([
            'name' => 'full time'
        ]);
        Type::create([
            'name' => 'part time'
        ]);
        Type::create([
            'name' => 'magang'
        ]);
        Type::create([
            'name' => 'freelance'
        ]);
    }
}