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
            $table->unsignedBigInteger('user_id');

    // Contoh kriteria penilaian
            $table->integer('kedisiplinan')->nullable();
            $table->integer('kerjasama')->nullable();
            $table->integer('tanggung_jawab')->nullable();
            $table->integer('inisiatif')->nullable();
            $table->integer('komunikasi')->nullable();
            $table->integer('user_id');
            $table->string('lama_periode');
            $table->string('sertifikat')->nullable();

            $table->timestamps();
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
