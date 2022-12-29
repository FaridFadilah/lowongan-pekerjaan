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
            'kota_id' => 4,
            'company_id' => 2,
            'category_id' => 3,
            'type_id' => 2,
            'name' => 'Junior Programmer PHP',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, aperiam.',
            'sallary' => 3000000,
            'kuota' => 5,
            'min_pengalaman' => 'kurang dari 1 tahun'           
        ]);
        Loker::create([
            'kota_id' => 2,
            'company_id' => 1,
            'category_id' => 3,
            'type_id' => 5,
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
            'type_id' => 3,
            'name' => 'associate product manager',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, aperiam.',
            'sallary' => 4000000,
            'kuota' => 4,
            'min_pengalaman' => 'lebih dari 1 tahun'           
        ]);
        Loker::create([
            'kota_id' => 2,
            'company_id' => 1,
            'category_id' => 3,
            'type_id' => 4,
            'name' => 'content creator',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, aperiam.',
            'sallary' => 4000000,
            'kuota' => 4,
            'min_pengalaman' => 'lebih dari 1 tahun'           
        ]);
    }
}