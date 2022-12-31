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
        Loker::create([ // 1
            'kota_id' => 4,
            'company_id' => 2,
            'category_id' => 1,
            'type_id' => 2,
            'name' => 'Junior Programmer PHP',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, aperiam.',
            'sallary' => 3000000,
            'kuota' => 5,
            'min_pengalaman' => 'kurang dari 1 tahun'           
        ]);
        Loker::create([ // 2
            'kota_id' => 4,
            'company_id' => 2,
            'category_id' => 1,
            'type_id' => 1,
            'name' => 'Junior Programmer JS',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, aperiam.',
            'sallary' => 4000000,
            'kuota' => 6,
            'min_pengalaman' => 'kurang dari 1 tahun'           
        ]);
        Loker::create([ // 3
            'kota_id' => 2,
            'company_id' => 1,
            'category_id' => 1,
            'type_id' => 4,
            'name' => 'Senior Programmer PHP',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, aperiam.',
            'sallary' => 4500000,
            'kuota' => 4,
            'min_pengalaman' => 'lebih dari 1 tahun'           
        ]);
        Loker::create([ // 4
            'kota_id' => 2,
            'company_id' => 2,
            'category_id' => 1,
            'type_id' => 2,
            'name' => 'Senior Programmer PHP',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, aperiam.',
            'sallary' => 4500000,
            'kuota' => 4,
            'min_pengalaman' => 'lebih dari 1 tahun'           
        ]);
        Loker::create([ // 5
            'kota_id' => 1,
            'company_id' => 5,
            'category_id' => 1,
            'type_id' => 4,
            'name' => 'Senior Programmer PHP',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, aperiam.',
            'sallary' => 4500000,
            'kuota' => 4,
            'min_pengalaman' => 'lebih dari 1 tahun'           
        ]);
        Loker::create([ // 6
            'kota_id' => 1,
            'company_id' => 3,
            'category_id' => 7,
            'type_id' => 1,
            'name' => 'junior chef',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, aperiam.',
            'sallary' => 2000000,
            'kuota' => 8,
            'min_pengalaman' => 'kurang dari 1 tahun'           
        ]);
        Loker::create([ // 7
            'kota_id' => 1,
            'company_id' => 3,
            'category_id' => 7,
            'type_id' => 1,
            'name' => 'senior chef',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, aperiam.',
            'sallary' => 5000000,
            'kuota' => 8,
            'min_pengalaman' => 'lebih dari 1 tahun'           
        ]);
        Loker::create([ // 8
            'kota_id' => 1,
            'company_id' => 4,
            'category_id' => 5,
            'type_id' => 1,
            'name' => 'Senior Human Resource Development',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, aperiam.',
            'sallary' => 2000000,
            'kuota' => 8,
            'min_pengalaman' => 'lebih dari 1 tahun'           
        ]);
        Loker::create([ // 9
            'kota_id' => 2,
            'company_id' => 2,
            'category_id' => 1,
            'type_id' => 4,
            'name' => 'Senior Programmer PHP',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, aperiam.',
            'sallary' => 4500000,
            'kuota' => 4,
            'min_pengalaman' => 'lebih dari 1 tahun'           
        ]);
        Loker::create([ // 10
            'kota_id' => 1,
            'company_id' => 2,
            'category_id' => 6,
            'type_id' => 3,
            'name' => 'associate product manager',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, aperiam.',
            'sallary' => 4000000,
            'kuota' => 4,
            'min_pengalaman' => 'lebih dari 1 tahun'           
        ]);
        Loker::create([ // 11
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