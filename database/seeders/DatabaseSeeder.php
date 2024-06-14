<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PersonalInfoSeeder::class,
            PortfolioSeeder::class,
            ServiceSeeder::class,
            SkillSeeder::class,
            SocialMediaSeeder::class,
            WorkExperienceSeeder::class,
            EducationSeeder::class,
            CertificateSeeder::class,
            PortfolioPhotosSeeder::class,
        ]);
    }
}
