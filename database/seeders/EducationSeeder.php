<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('education')->insert([
            [
                'title' => 'Bachelor of Computer Science',
                'place' => 'Jenderal Soedirman University',
                'period' => '2015 - 2019',
                'descriptions' => 'Thesis: Decision Support System Amount of Item Production with Fuzzy Inference System Tsukamoto (Studi Case: PT John Toys Indonesia)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Undergraduate (Science)',
                'place' => 'SMA Negeri 2 Pekalongan',
                'period' => '2012 - 2015',
                'descriptions' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
