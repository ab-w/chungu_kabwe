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
        Schema::create('statementpads', function (Blueprint $table) {
            $table->id();
            $table->string('page_number');
            $table->string('full_name');
            $table->string('residential_address');
            $table->string('business_address');
            $table->string('occupation');
            $table->string('village');
            $table->string('identity_card');
            $table->string('chief');
            $table->string('district');
            $table->string('nationality');
            $table->string('sex');
            $table->string('age');
            $table->string('date');
            $table->string('issued_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statementpads');
    }
};
