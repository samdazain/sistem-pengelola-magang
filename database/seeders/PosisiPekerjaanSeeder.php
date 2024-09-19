<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PosisiPekerjaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posisipekerjaan')->insert([
            'title' => 'UI/UX Designer',
            'location' => 'daring',
            'description' => 'Posisi sebagai desainer UI/UX untuk proyek startup.',
            'closing_date' => '2024-10-01',
            'announcement_date' => '2024-10-15',
            'requirements' => 'Pengalaman minimal 1 tahun, portofolio yang kuat, menguasai Figma dan Adobe XD.'
        ]);
    }
}
