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
        Kota::create([
            'name' => 'Bandung'
        ]);
        Kota::create([
            'name' => 'medan'
        ]);
        Kota::create([
            'name' => 'surabaya'
        ]);
        Kota::create([
            'name' => 'jepara'
        ]);
        Kota::create([
            'name' => 'bekasi'
        ]);
    }
}