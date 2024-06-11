<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonalInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('personal_infos')->insert([
            'name' => 'Shodiqul Amien',
            'birth_date' => '1997-07-07',
            'contact' => '+62 857 4266 8757',
            'email' => 'oddishodiqul927@gmail.com',
            'city' => 'Jakarta, Indonesia',
            'degree' => 'Bachelor',
            'website' => 'https://shodiqul-amien.com',
            'motivation' => 'Be Simple and Be a Sample',
            'descriptions' => 'Create impact to bring better future',
            'job_title' => 'Web & Mobile Developer',
            'biography' => 'Saya lahir 07 Juli 1997 di Kota Pekalongan, Jawa Tengah',
            'happy_client' => 18,
            'project' => 35,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
