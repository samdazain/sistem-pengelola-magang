<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dokumen', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Relasi ke tabel 'users'
            $table->string('surat_keterangan_kampus'); // File surat keterangan kampus
            $table->string('ktm'); // File KTM (Kartu Tanda Mahasiswa)
            $table->string('ktp'); // File KTP (Kartu Tanda Penduduk)
            $table->string('cv'); // File CV (Curriculum Vitae)
            $table->string('foto_setengah_badan'); // File foto setengah badan
            $table->string('foto_full_body'); // File foto full body

            $table->timestamps();
            $table->foreign('user_id')->references('id')->on(table: 'users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumen');
    }
};
