<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('work_experiences')->insert([
            [
                'title' => 'Fullstack Developer',
                'location' => 'Indonesia Stock Exchange',
                'join_date' => '2024-02-28',
                'end_date' => '1900-01-01',
                'descriptions' => 'Test User',
            ],
            [
                'title' => 'Frontend Developer',
                'location' => 'PT Mandala Multifinance Tbk',
                'join_date' => '2022-09-01',
                'end_date' => '2023-12-31',
                'descriptions' => '<li>Develop application Manifest (Mandala Intelligence Finance System) for Business Intelligence Department</li><li>Integrating the application with OTP email.</li><li>Creating design user interface use Tailwind CSS.</li><li>Developing a download feature processed asynchronously.</li><li>Implementing PDF file generation using the MPDF library.</li><li>Implementing Echarts.</li>js to create dashboard page menu.</li><li>Creating a feature for generating Excel files using the PHPSpreadsheet library.</li><li>Implementing the DataTable.</li>js and Tabulator.</li>js library used for displaying data.</li><li>Create routing application use CodeIgniter Framewok<li>Doing daily stand-up / daily scrum meeting every day to provide task progress updates.</li><li>Comply a sprint review to cross-check and test tasks that are ready for testing, review the work results, and update if there are any obstacles to meet the sprint goals.</li><li>Attend and contibute in sprint retrospective every month to evaluate the work done, identify what went well, gather input on what needs improvement for the next sprint, and determine actions to achieve the target.</li>',            
            ],            
            [
                'title' => 'PHP Developer',
                'location' => 'PT Radian Solusi Integral',
                'join_date' => '2020-06-01',
                'end_date' => '2022-08-31',
                'descriptions' => '<li>Develop application E-IPO (Electronics Initial Public Offering)</li><li>Using Laradock (Laravel Docker) for development environtment to integrate containers used.</li><li>Utilizing Yii2 as the application development framework.</li><li>Analyzing and performing database migration for PostgreSQL based on user requirements.</li><li>Implementing MongoDB for non-transactional databases such as queue monitoring, user activity logs, etc.</li><li>Implementing the fullcalendar.</li>js library for monitoring the schedule of a company preparing for an Initial Public Offering (IPO) on the Indonesia Stock Exchange (IDX).</li><li>Creating an email subscription feature, which is used to enable and disable notifications sent to email via SMTP.</li><li>Creating a WhatsApp widget used as a call center when users have questions.</li><li>Integrating the application with SFTP to enable file transfers between applications using a public IP address.</li>',
            ],
            [
                'title' => 'IT Staff Programmer',
                'location' => 'PT Jeevesindo Gemilang',
                'join_date' => '2019-08-01',
                'end_date' => '2020-04-30',
                'descriptions' => '<li>Creating an integrated Point of Sales (POS) application with a thermal printer for generating customer invoices.</li><li>Creating a Jeeves Marketing application used as a promotional medium during events and as a tool for selling discount vouchers.</li><li>Creating a Human Resource Information System (HRIS) application divided into two platform types: Mobile Apps with a Progressive Web Apps (PWA) concept for all employee and a Web-based application used by the HR departments administrative team.</li><li>Troubleshooting network connectivity issues when they occur.</li><li>Analyzing user requirements data and implementing it into a database, integrating it into the application.</li><li>Creating design user interface applications based on business processes and data flows that prioritize the user experience to make it easy for users to use.</li><li>Creating a production monitoring application used to track the processes of items undergoing laundry, dry cleaning, special treatments, etc.</li>',
            ],
        ]);
    }
}
