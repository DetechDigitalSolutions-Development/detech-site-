<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('experience_levels', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Probationary, Junior, etc.
            $table->string('description')->nullable(); // (<6 mths), (6 mo-2 yrs exp)
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('experience_levels');
    }
};
