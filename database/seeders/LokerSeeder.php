<?php

namespace Database\Seeders;

use App\Models\Loker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LokerSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        Loker::create([
            'kota_id' => 1,
            'company_id' => 1,
            'category_id' => 1,
            'type_id' => 1,
            'name' => 'Junior Programmer PHP',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, aperiam.',
            'sallary' => 3000000,
            'kuota' => 5,
            'min_pengalaman' => 'kurang dari 1 tahun'           
        ]);
        Loker::create([
            'kota_id' => 1,
            'company_id' => 1,
            'category_id' => 1,
            'type_id' => 1,
            'name' => 'Senior Programmer PHP',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, aperiam.',
            'sallary' => 4500000,
            'kuota' => 4,
            'min_pengalaman' => 'lebih dari 1 tahun'           
        ]);
        Loker::create([
            'kota_id' => 1,
            'company_id' => 1,
            'category_id' => 2,
            'type_id' => 1,
            'name' => 'digital marketing executive',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, aperiam.',
            'sallary' => 4000000,
            'kuota' => 4,
            'min_pengalaman' => 'lebih dari 1 tahun'           
        ]);
    }
}