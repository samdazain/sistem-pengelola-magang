<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobPositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('job_position')->insert([
            [
                'title' => 'Software Developer',
                'location' => 'daring',
                'description' => 'Responsible for developing and maintaining software applications.',
                'closing_date' => Carbon::now()->addDays(30),
                'announcement_date' => Carbon::now(),
                'requirements' => 'Bachelor\'s degree in Computer Science or related field. Experience in PHP, JavaScript, and Laravel.',
                'status' => 'open',
                'quota' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'UI/UX Designer',
                'location' => 'onsite',
                'description' => 'Design user-friendly interfaces and experiences for web and mobile applications.',
                'closing_date' => Carbon::now()->addDays(15),
                'announcement_date' => Carbon::now(),
                'requirements' => 'Experience with design tools such as Figma or Adobe XD. Strong portfolio required.',
                'status' => 'open',
                'quota' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Project Manager',
                'location' => 'onsite',
                'description' => 'Oversee project development from initiation to closure. Ensure project deliverables are met on time.',
                'closing_date' => Carbon::now()->addDays(45),
                'announcement_date' => Carbon::now(),
                'requirements' => 'Proven experience in project management. Excellent communication and leadership skills.',
                'status' => 'open',
                'quota' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
