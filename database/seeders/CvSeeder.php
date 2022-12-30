<?php

namespace Database\Seeders;

use App\Models\Cv;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CvSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        Cv::create([
            'user_id' => 3,
            'name' => 'cv admin',
            'name_file' => 'cv-ku2.pdf',
        ]);
        Cv::create([
            'user_id' => 3,
            'name' => 'cv programmer',
            'name_file' => 'cv-ku1.pdf',
        ]);
    }
}
