<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('portfolios')->insert([
            [
                'title' => 'E-IPO (Electronics Initial Public Offering)',
                'ownership' => 'Indonesia Stock Exchange',
                'categories' => 'Web Apps',
                'descriptions' => 'E-IPO (Electronic Indonesia Public Offering) adalah sistem elektronik berbasis web yang disediakan oleh Bursa Efek Indonesia (BEI) untuk memberikan informasi terkait Penawaran Umum Perdana Saham (IPO) serta untuk melakukan pemesanan saham IPO dari emiten yang sedang melaksanakan Penawaran Umum melalui sistem e-IPO.',
                'photos' => 'e-ipo.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Manifest (Mandala Intelligence Finance System)',
                'ownership' => 'PT Mandala Multifinance Tbk',
                'categories' => 'Web Apps',
                'descriptions' => 'Manifest adalah sebuah sistem yang digunakan oleh divisi Business Intelligence untuk menganalisa data berdasarkan hasil data report yang bersifat aktual.',
                'photos' => 'manifest.png',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Web Company Profile',
                'ownership' => 'KJBNET.id',
                'categories' => 'Web Company Profile',
                'descriptions' => 'KJBNET adalah sebuah IT Training Center yang bertujuan untuk menyelenggarakan online maupun offline intensive course yang bergerak di bidang Linux Administration, DevOps dan Web Development.',
                'photos' => 'kjbnet.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Point of Sales',
                'ownership' => 'My Cherree Laundry',
                'categories' => 'Web Apps',
                'descriptions' => 'Point of Sales (POS) Laundry adalah sebuah sistem yang digunakan sebagai media transaksi pembuatan invoice berdasarkan pada produk laundry.',
                'photos' => 'mycherree-pos.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Web Company Profile',
                'ownership' => 'My Cherree Laundry',
                'categories' => 'Web Company Profile',
                'descriptions' => 'Point of Sales (POS) Laundry adalah sebuah sistem yang digunakan sebagai media transaksi pembuatan invoice berdasarkan pada produk laundry yang terintegrasi dengan printer thermal.',
                'photos' => 'mycherree-compro.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Item Tracking / Production Monitoring',
                'ownership' => 'Jeeves Indonesia',
                'categories' => 'Web Apps',
                'descriptions' => 'Item Tracking / Production Monitoring adalah sebuah sistem yang digunakan untuk memantau proses laundry yang dilakukan oleh Jeeves Indonesia yang diidentifikasi menggunakan barcode untuk setiap itemnya.',
                'photos' => 'jeeves-item-tracking.jpeg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Point of Sales Laundry',
                'ownership' => 'Jeeves Indonesia',
                'categories' => 'Web Apps',
                'descriptions' => 'Point of Sales (POS) Laundry adalah sebuah sistem yang digunakan sebagai media transaksi pembuatan invoice berdasarkan pada produk laundry yang terintegrasi dengan printer thermal.',
                'photos' => 'jeeves-pos.jpeg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Aplikasi Antrian',
                'ownership' => 'Jeeves Indonesia',
                'categories' => 'Web Apps',
                'descriptions' => 'Aplikasi Antrian adalah sebuah sistem yang digunakan untuk ticketing tamu berdasarkan nomer antrian.',
                'photos' => 'jeeves-antrian.jpeg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Human Resource Information System (HRIS)',
                'ownership' => 'Jeeves Indonesia',
                'categories' => 'Web Apps',
                'descriptions' => 'Human Resourse Information System (HRIS) adalah sebuah sistem yang digunakan untuk absensi kehadiran, pengajuan cuti, payroll, data karyawan hingga rembruisement.',
                'photos' => 'jeeves-hris.jpeg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
