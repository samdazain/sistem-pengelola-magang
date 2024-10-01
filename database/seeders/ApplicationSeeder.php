<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('application')->insert([
            [
                'job_position_id' => 1,
                'user_id' => 1,
                'status' => 'pending',
                'portfolio_link' => 'http://example.com/portfolio1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'job_position_id' => 2,
                'user_id' => 2,
                'status' => 'accepted',
                'portfolio_link' => 'http://example.com/portfolio2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'job_position_id' => 3,
                'user_id' => 3,
                'status' => 'rejected',
                'portfolio_link' => 'http://example.com/portfolio3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'job_position_id' => 1,
                'user_id' => 4,
                'status' => 'completed',
                'portfolio_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
