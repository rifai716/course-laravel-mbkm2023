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
        Schema::create('applicant_returns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('applicant_id')->constrained();
            $table->date('date');
            $table->string('description'); // dikembalikan, hilang, rusak
            $table->string('forfeit'); // nominal denda apabila hilang atau rusak
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicant_returns');
    }
};
