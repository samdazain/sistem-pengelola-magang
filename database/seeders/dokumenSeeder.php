<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class dokumenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dokumen')->insert([
            'user_id' => 1,
            'surat_keterangan_kampus' => 'surat_keterangan_kampus.pdf',
            'ktm' => 'ktm.pdf',
            'ktp' => 'ktp.pdf',
            'cv' => 'cv.pdf',
            'foto_setengah_badan' => 'foto_setengah_badan.jpg',
            'foto_full_body' => 'foto_full_body.jpg'
        ]);
    }
}
