<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EvaluationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('evaluation')->insert([
            [
                'user_id' => 1,
                'discipline' => 85,
                'cooperation' => 90,
                'responsibility' => 88,
                'initiative' => 92,
                'communication' => 86,
                'duration_period' => '3 months',
                'certificate' => 'Certificate of Excellence',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'discipline' => 78,
                'cooperation' => 80,
                'responsibility' => 75,
                'initiative' => 88,
                'communication' => 82,
                'duration_period' => '6 months',
                'certificate' => 'Certificate of Participation',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'discipline' => 90,
                'cooperation' => 95,
                'responsibility' => 92,
                'initiative' => 93,
                'communication' => 91,
                'duration_period' => '1 month',
                'certificate' => 'Certificate of Achievement',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
