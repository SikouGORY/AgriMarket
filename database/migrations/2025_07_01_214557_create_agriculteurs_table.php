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
        Schema::create('agriculteurs', function (Blueprint $table) {
            $table->foreignId('id')->constrained('users')->onDelete('cascade')->primary();
            $table->string('zone_cultivée');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agriculteurs');
    }
};
