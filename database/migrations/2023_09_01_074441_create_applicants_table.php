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
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_id')->constrained();
            $table->foreignId('student_id')->constrained();
            $table->date('start_date');
            $table->date('end_date');
            $table->string('status'); // acc or reject;
            $table->string('description'); // keterangan pinjam untuk keperluan apa, dan keterangan yang lain-lain
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicants');
    }
};
