<?php

namespace Database\Seeders;

use App\Models\Kota;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KotaSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        Kota::create([ // 1
            'name' => 'Bandung'
        ]);
        Kota::create([ // 2
            'name' => 'medan'
        ]);
        Kota::create([ // 3
            'name' => 'surabaya'
        ]);
        Kota::create([ // 4
            'name' => 'jepara'
        ]);
        Kota::create([ // 5
            'name' => 'bekasi'
        ]);
    }
}