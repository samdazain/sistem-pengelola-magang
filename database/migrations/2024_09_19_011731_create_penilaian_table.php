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
        Schema::create('penilaian', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Relasi ke tabel 'users'
    
    // Contoh kriteria penilaian
            $table->integer('kedisiplinan'); // Penilaian kedisiplinan (skala 1-10)
            $table->integer('kerjasama'); // Penilaian kerjasama tim (skala 1-10)
            $table->integer('tanggung_jawab'); // Penilaian tanggung jawab (skala 1-10)
            $table->integer('inisiatif'); // Penilaian inisiatif (skala 1-10)
            $table->integer('komunikasi'); // Penilaian komunikasi (skala 1-10)

            $table->string('lama_periode'); // Lama periode penilaian (misal: "3 bulan")
            $table->string('sertifikat')->nullable(); // Sertifikat (jika ada)

            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penilaian');
    }
};
