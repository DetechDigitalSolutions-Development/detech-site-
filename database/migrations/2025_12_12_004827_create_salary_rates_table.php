<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('salary_rates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('salary_guide_id')->constrained()->onDelete('cascade');
            $table->foreignId('experience_level_id')->constrained()->onDelete('cascade');
            $table->decimal('min_rate', 10, 2);
            $table->decimal('max_rate', 10, 2);
            $table->timestamps();
            
            $table->unique(['salary_guide_id', 'experience_level_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('salary_rates');
    }
};
