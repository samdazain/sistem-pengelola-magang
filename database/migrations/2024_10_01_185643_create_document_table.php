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
        Schema::create('document', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('campus_certificate'); // Surat keterangan kampus
            $table->string('student_card'); // KTM
            $table->string('identity_card'); // KTP
            $table->string('cv'); // Curriculum Vitae
            $table->string('half_body_photo'); // Foto setengah badan
            $table->string('full_body_photo'); // Foto full body
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('document');
    }
};
