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
        Schema::create('product_sites', function (Blueprint $table) {
            $table->id();
            $table->string('product_title');
            $table->string('site_slug')->unique();
            $table->string('site_location');
            $table->string('site_file')->nullable(); // Original zip file path
            $table->string('extracted_path')->nullable(); // Extracted files path
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_sites');
    }
};