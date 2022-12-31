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
            'user_id' => 1,
            'name' => 'goto',
            'url' => 'https://www.gotocompany.com/',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure voluptas nesciunt itaque sapiente nihil! Natus facilis eius quasi explicabo suscipit doloremque nihil consectetur ipsam accusamus alias dolor ea, nostrum consequuntur!',
            'logo' => 'goto.png',
            'size_karyawan' => 40,
            'jenis_usaha' => 'informasi teknologi dan services'
        ]);
        Company::create([
            'kota_id' => 2,
            'user_id' => 2,
            'name' => 'bukalapak',
            'url' => 'https://www.bukalapak.com/',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure voluptas nesciunt itaque sapiente nihil! Natus facilis eius quasi explicabo suscipit doloremque nihil consectetur ipsam accusamus alias dolor ea, nostrum consequuntur!',
            'logo' => 'bukalapak.png',
            'size_karyawan' => 40,
            'jenis_usaha' => 'informasi teknologi dan services'
        ]);
        Company::create([
            'kota_id' => 1,
            'user_id' => 3,
            'name' => 'Cerestar Indonesia',
            'url' => 'https://www.cerestargroup.co.id/',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure voluptas nesciunt itaque sapiente nihil! Natus facilis eius quasi explicabo suscipit doloremque nihil consectetur ipsam accusamus alias dolor ea, nostrum consequuntur!',
            'logo' => 'cerestar.jpeg',
            'size_karyawan' => 40,
            'jenis_usaha' => 'Produksi Makanan'
        ]);
        Company::create([
            'kota_id' => 5,
            'user_id' => 4,
            'name' => 'Rumah Sakit al islam bandung',
            'url' => 'https://www.rsalislam.com/',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure voluptas nesciunt itaque sapiente nihil! Natus facilis eius quasi explicabo suscipit doloremque nihil consectetur ipsam accusamus alias dolor ea, nostrum consequuntur!',
            'logo' => 'rsislam.png',
            'size_karyawan' => 40,
            'jenis_usaha' => 'Kesehatan '
        ]);
        Company::create([
            'kota_id' => 1,
            'user_id' => 5,
            'name' => 'Alkademi',
            'url' => 'https://alkademi.id/',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure voluptas nesciunt itaque sapiente nihil! Natus facilis eius quasi explicabo suscipit doloremque nihil consectetur ipsam accusamus alias dolor ea, nostrum consequuntur!',
            'logo' => 'alkademi.png',
            'size_karyawan' => 40,
            'jenis_usaha' => 'informasi teknologi dan pendidikan'
        ]);
    }
}