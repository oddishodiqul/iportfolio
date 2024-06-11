<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            [
                'title' => 'Web Development',
                'icon' => 'globe',
                'descriptions' => 'Membuat website dengan tampilan modern dan mobile responsive yang dapat menyesuaikan dengan kebutuhan',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Mobile Apps',
                'icon' => 'phone',
                'descriptions' => 'Meyediakan jasa pembuatan aplikasi mobile yang dapat digunakan platform Android maupun IOS (cross-platform)',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Digital Marketing',
                'icon' => 'shop-window',
                'descriptions' => 'Optimasi SEO (Search Engine Optimization) produk dan analisa advertising dengan instagram ads, google ads,dsb',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Design Graphic',
                'icon' => 'palette',
                'descriptions' => 'Desain grafis meliputi desain pamflet, banner, souvenir hingga UI/UX',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'IT Consulting',
                'icon' => 'people-fill',
                'descriptions' => 'Konsultasi tentang pengembangan aplikasi, digitalisasi hingga proyeksi bisnis digital',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Maintenance',
                'icon' => 'gear',
                'descriptions' => 'Pemeliharaan aplikasi atau website yang sudah ada untuk dilakukan optimasi atau di upgrade versi serta fitur',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
