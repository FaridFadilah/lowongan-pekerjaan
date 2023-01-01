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
        Cv::create([ // 1
            'user_id' => 6,
            'name_file' => 'cv-ku2.pdf',
        ]);
        Cv::create([ // 2
            'user_id' => 7,
            'name_file' => 'cv-ku1.pdf',
        ]);
    }
}
