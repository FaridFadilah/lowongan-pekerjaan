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
        User::create([
            'role_id' => 2,
            'name' => 'hrd Bukalapak',
            'foto' => 'profile.png',
            'email' => 'hrd@buka.com',
            'password' => 'hrd12345',
            'no_telp' => '081234567812',
            'pendidikan_terakhir' => 'Sarjana',
            'gender' => 'Laki-laki',
            'tanggal_lahir' => now()
        ]);
        User::create([
            'role_id' => 2,
            'name' => 'hrd Goto',
            'foto' => 'profile.png',
            'email' => 'hrd@got.com',
            'password' => 'hrd12345',
            'no_telp' => '08848596562',
            'pendidikan_terakhir' => 'Sarjana',
            'gender' => 'Laki-laki',
            'tanggal_lahir' => now()
        ]);
        User::create([
            'role_id' => 2,
            'name' => 'hrd cerestar',
            'foto' => 'profile.png',
            'email' => 'hrd@cerestar.com',
            'password' => 'hrd12345',
            'no_telp' => '08154223615',
            'pendidikan_terakhir' => 'Sarjana',
            'gender' => 'Laki-laki',
            'tanggal_lahir' => now()
        ]);
        User::create([
            'role_id' => 2,
            'name' => 'hrd rsislam',
            'foto' => 'profile.png',
            'email' => 'hrd@rsislam.com',
            'password' => 'hrd12345',
            'no_telp' => '0853631554823',
            'pendidikan_terakhir' => 'Sarjana',
            'gender' => 'Laki-laki',
            'tanggal_lahir' => now()
        ]);
        User::create([
            'role_id' => 2,
            'name' => 'hrd alkademi',
            'foto' => 'profile.png',
            'email' => 'hrd@alkademi.com',
            'password' => 'hrd12345',
            'no_telp' => '081526333496',
            'pendidikan_terakhir' => 'Sarjana',
            'gender' => 'Laki-laki',
            'tanggal_lahir' => now()
        ]);
        User::create([
            'role_id' => 1,
            'name' => 'jobseek',
            'foto' => 'profile.png',
            'email' => 'jobseek@xample.com',
            'password' => 'jobseek12345',
            'no_telp' => '085266931545',
            'pendidikan_terakhir' => 'Sarjana',
            'gender' => 'Laki-laki',
            'tanggal_lahir' => now()
        ]);
    }
}