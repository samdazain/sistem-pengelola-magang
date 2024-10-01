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
        Schema::create('evaluation', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('discipline')->nullable();
            $table->integer('cooperation')->nullable();
            $table->integer('responsibility')->nullable();
            $table->integer('initiative')->nullable();
            $table->integer('communication')->nullable();
            $table->string('duration_period');
            $table->string('certificate')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluation');
    }
};
