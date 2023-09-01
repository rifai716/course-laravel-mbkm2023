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
        Schema::table('items', function (Blueprint $table) {
            $table->index('user_id');
            // ini digunakan apabila format / naming conventionnya ada yang di custome, jadi penulisan constrain table dan kolom harus di ikutsertakan
            $table->foreignId('user_id')->after('quantity')->constrained('users', 'id')->cascadeOnDelete(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('items', function (Blueprint $table) {
            //
        });
    }
};
