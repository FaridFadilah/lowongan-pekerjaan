<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        User::create([ // 1
            'role_id' => 2,
            'kota_id' => 1,
            'name' => 'hrd Goto',
            'foto' => 'profile.png',
            'spesialis' => 'Human Resource Development',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil fuga tempora vel obcaecati id totam nesciunt accusamus, aperiam, soluta dolorem placeat aliquam laudantium eveniet sapiente autem beatae voluptatum natus doloremque.',
            'email' => 'hrd@goto.com',
            'password' => 'hrd12345',
            'no_telp' => '081234567812',
            'pendidikan_terakhir' => 'Sarjana',
            'gender' => 'perempuan',
            'tanggal_lahir' => now()
        ]);
        User::create([ // 2
            'role_id' => 2,
            'kota_id' => 2,
            'name' => 'hrd bukalapak',
            'foto' => 'profile.png',
            'spesialis' => 'Human Resource Development',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil fuga tempora vel obcaecati id totam nesciunt accusamus, aperiam, soluta dolorem placeat aliquam laudantium eveniet sapiente autem beatae voluptatum natus doloremque.',
            'email' => 'hrd@buka.com',
            'password' => 'hrd12345',
            'no_telp' => '08848596562',
            'pendidikan_terakhir' => 'Sarjana',
            'gender' => 'perempuan',
            'tanggal_lahir' => now()
        ]);
        User::create([ // 3
            'role_id' => 2,
            'kota_id' => 3,
            'name' => 'hrd cerestar',
            'foto' => 'profile.png',
            'spesialis' => 'Human Resource Development',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil fuga tempora vel obcaecati id totam nesciunt accusamus, aperiam, soluta dolorem placeat aliquam laudantium eveniet sapiente autem beatae voluptatum natus doloremque.',
            'email' => 'hrd@cerestar.com',
            'password' => 'hrd12345',
            'no_telp' => '08154223615',
            'pendidikan_terakhir' => 'Sarjana',
            'gender' => 'laki laki',
            'tanggal_lahir' => now()
        ]);
        User::create([ // 4
            'role_id' => 2,
            'kota_id' => 1,
            'name' => 'hrd rsislam',
            'foto' => 'profile.png',
            'spesialis' => 'Human Resource Development',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil fuga tempora vel obcaecati id totam nesciunt accusamus, aperiam, soluta dolorem placeat aliquam laudantium eveniet sapiente autem beatae voluptatum natus doloremque.',
            'email' => 'hrd@rsislam.com',
            'password' => 'hrd12345',
            'no_telp' => '0853631554823',
            'pendidikan_terakhir' => 'Sarjana',
            'gender' => 'laki laki',
            'tanggal_lahir' => now()
        ]);
        User::create([ // 6
            'role_id' => 1,
            'kota_id' => 4,
            'name' => 'jobseek',
            'foto' => 'profile.png',
            'email' => 'jobseek@xample.com',
            'spesialis' => 'Web Development',
            'password' => 'jobseek12345',
            'no_telp' => '085266931545',
            'pendidikan_terakhir' => 'Sarjana',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil fuga tempora vel obcaecati id totam nesciunt accusamus, aperiam, soluta dolorem placeat aliquam laudantium eveniet sapiente autem beatae voluptatum natus doloremque.',
            'gender' => 'laki laki',
            'tanggal_lahir' => now()
        ]);
        User::create([ // 6
            'role_id' => 1,
            'kota_id' => 4,
            'name' => 'jobseek2',
            'foto' => 'profile.png',
            'email' => 'jobseek2@xample.com',
            'spesialis' => 'Devops',
            'password' => 'jobseek12345',
            'no_telp' => '085266931545',
            'pendidikan_terakhir' => 'Sarjana',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil fuga tempora vel obcaecati id totam nesciunt accusamus, aperiam, soluta dolorem placeat aliquam laudantium eveniet sapiente autem beatae voluptatum natus doloremque.',
            'gender' => 'laki laki',
            'tanggal_lahir' => now()
        ]);
    }
}