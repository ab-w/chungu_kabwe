<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rapid_responses', function (Blueprint $table) {
            $table->id();
            $table->string('destination');
            $table->string('book_in');
            $table->string('book_out');
            $table->string('officer_id');
            $table->string('visit');
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rapid_responses');
    }
};
