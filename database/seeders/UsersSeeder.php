<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'role_id' => 0,
            'username' => 'muhammad_adi',
            'name' => 'Muhammad Adi Septian',
            'npm' => '123456789',
            'alamat' => 'Jl. Mawar No. 5',
            'domisili' => 'Surabaya',
            'fakultas' => 'Teknologi Informasi',
            'jurusan' => 'Informatika',
            'univ' => 'Universitas Pembangunan Nasional Veteran Jawa Timur',
            'tanggal_lahir' => '2000-08-12',
            'no_telp' => '08123456789',
            'email' => 'adi@example.com',
            'jenjang' => 'S1',
            'tahun_masuk' => 2018,
            'soft_skill' => 'Kreatif, Berpikir Kritis',
            'hard_skill' => 'UI/UX, Coding, Desain Grafis',
            'kontak_darurat' => '08123456788 (Ayah)',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'role_id' => 1,
            'username' => 'admin',
            'name' => 'Muhammad Adi Septian',
            'npm' => '123456789',
            'alamat' => 'Jl. Mawar No. 5',
            'domisili' => 'Surabaya',
            'fakultas' => 'Teknologi Informasi',
            'jurusan' => 'Informatika',
            'univ' => 'Universitas Pembangunan Nasional Veteran Jawa Timur',
            'tanggal_lahir' => '2000-08-12',
            'no_telp' => '08123456789',
            'email' => 'admin@example.com',
            'jenjang' => 'S1',
            'tahun_masuk' => 2018,
            'soft_skill' => 'Kreatif, Berpikir Kritis',
            'hard_skill' => 'UI/UX, Coding, Desain Grafis',
            'kontak_darurat' => '08123456788 (Ayah)',
            'password' => Hash::make('admin123'),
        ]);
    }
}
