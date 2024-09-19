<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LamaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('lamaran')->insert([
            'job_position_id' => 1,
            'user_id' => 1,
            'status' => 'diproses',
            'link_portofolio' => 'https://portfolio.example.com/adi'
        ]);
    }
}
