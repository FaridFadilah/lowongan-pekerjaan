<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
        $this->call([
            RoleSeeder::class,
            CategorySeeder::class,
            KotaSeeder::class,
            RoleSeeder::class,
            TypeSeeder::class,
            CompanySeeder::class,
            UserSeeder::class,
            CvSeeder::class,
            LokerSeeder::class,
            ApplySeeder::class,
        ]);
    }
}
