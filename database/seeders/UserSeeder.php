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
            'email' => 'hrd@got.com',
            'password' => 'hrd12345',
            'no_telp' => '081234567812',
            'pendidikan_terakhir' => 'Sarjana',
            'gender' => 'Laki-laki',
            'tanggal_lahir' => now()
        ]);
        User::create([
            'role_id' => 1,
            'name' => 'jobseek',
            'email' => 'jobseek@xample.com',
            'password' => 'jobseek12345',
            'no_telp' => '081234567812',
            'pendidikan_terakhir' => 'Sarjana',
            'gender' => 'Laki-laki',
            'tanggal_lahir' => now()
        ]);
    }
}