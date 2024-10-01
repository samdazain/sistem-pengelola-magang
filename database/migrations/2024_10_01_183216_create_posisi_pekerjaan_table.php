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
        Schema::create('posisi_pekerjaan', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->enum('location', ['daring', 'onsite']);
            $table->text('description');
            $table->date('closing_date');
            $table->date('announcement_date');
            $table->text('requirements');
            $table->string('status')->nullable();
            $table->integer('quota');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posisi_pekerjaan');
    }
};
