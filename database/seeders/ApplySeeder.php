<?php

namespace Database\Seeders;

use App\Models\Apply;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApplySeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        Apply::create([ // 1
            'user_id' => 6,
            'cv_id' => 2,
            'loker_id' => 1,
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor porro maiores optio ullam, fuga, eaque reprehenderit error voluptatibus temporibus impedit excepturi minus, dolores totam atque ad magnam id repellat architecto.',
        ]);
        Apply::create([ // 2
            'user_id' => 6,
            'cv_id' => 2,
            'loker_id' => 2,
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor porro maiores optio ullam, fuga, eaque reprehenderit error voluptatibus temporibus impedit excepturi minus, dolores totam atque ad magnam id repellat architecto.',
        ]);
    }
}