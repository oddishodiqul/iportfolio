<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('certificates')->insert([
            [
                'title' => 'Belajar Dasar AI',
                'place' => 'Dicoding Indonesia',
                'period' => 'Maret 2024 ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Memulai Pemrograman Phyton',
                'place' => 'Dicoding Indonesia',
                'period' => 'Maret 2024',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Aplikasi Web dengan React',
                'place' => 'Dicoding Indonesia',
                'period' => 'Juni 2023',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Front End Web Developer',
                'place' => 'Dicoding Indonesia',
                'period' => 'Mei 2023',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Pemrograman Javascript',
                'place' => 'Dicoding Indonesia',
                'period' => 'Mei 2023',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Fundamental of Flutter',
                'place' => 'Dicoding Indonesia',
                'period' => 'Maret 2023',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Dasar Manajemen Proyek',
                'place' => 'Dicoding Indonesia',
                'period' => 'Februari 2023',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Training Scrum Lengkap dari Dasar hingga Mahir',
                'place' => 'Udemy Course',
                'period' => 'Juni 2022',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'PHP Fundamentals',
                'place' => 'Sololearn',
                'period' => 'Mei 2022',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Mini Bootcamp: Product Management',
                'place' => 'Habiskerja.com',
                'period' => 'Maret 2022',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'SEO 101: Cara membuat website eksis di halaman Google',
                'place' => 'Skill Academy by Ruangguru',
                'period' => 'Desember 2021',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Sertifikasi Kompetensi Junior Web Programmer',
                'place' => 'Badan Nasional Sertifikasi Profesi',
                'period' => 'November 2020',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);

    }
}
