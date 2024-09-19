<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenilaianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('penilaian')->insert([
            'user_id' => 1,
            'kedisiplinan' => 9,
            'kerjasama' => 8,
            'tanggung_jawab' => 10,
            'inisiatif' => 7,
            'komunikasi' => 8,
            'lama_periode' => '6 bulan',
            'sertifikat' => 'sertifikat.pdf'
        ]);
    }
}
