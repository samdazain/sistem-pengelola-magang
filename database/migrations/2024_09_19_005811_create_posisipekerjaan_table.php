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
        Schema::create('posisipekerjaan', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Judul posisi pekerjaan
            $table->enum('location', ['daring', 'onsite']); // Lokasi bisa daring atau onsite
            $table->text('description'); // Deskripsi pekerjaan
            $table->date('closing_date'); // Tanggal penutupan lamaran
            $table->date('announcement_date'); // Tanggal pengumuman hasil
            $table->text('requirements'); // Syarat-syarat untuk posisi pekerjaan


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posisipekerjaan');
    }
};
