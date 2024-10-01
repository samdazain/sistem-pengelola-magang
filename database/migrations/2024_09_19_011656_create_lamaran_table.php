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
        Schema::create('lamaran', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('job_position_id'); // Relasi ke tabel 'posisipekerjaan'
            $table->unsignedBigInteger('user_id'); // Relasi ke tabel 'users'
            $table->enum('status', ['diproses', 'diterima', 'ditolak', 'selesai'])->nullable(); // Status lamaran
            $table->string('link_portofolio')->nullable(); // Link ke portofolio
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lamaran');
    }
};
