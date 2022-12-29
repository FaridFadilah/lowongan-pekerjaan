<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        Company::create([
            'kota_id' => 1,
            'name' => 'GITI.id',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure voluptas nesciunt itaque sapiente nihil! Natus facilis eius quasi explicabo suscipit doloremque nihil consectetur ipsam accusamus alias dolor ea, nostrum consequuntur!',
            'size_karyawan' => 40
        ]);
    }
}