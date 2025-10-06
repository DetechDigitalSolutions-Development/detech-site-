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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('featured_img')->nullable();
            $table->text('content_section_1')->nullable();
            $table->text('content_section_2')->nullable();
            $table->json('project_imgs')->nullable(); // Stores an array of image paths
            $table->string('challenge_title')->nullable();
            $table->text('challenge_points')->nullable();
            $table->string('client_name')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('owner')->nullable();
            $table->json('categories')->nullable(); // Stores an array of categories
            $table->string('website')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
