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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('featured_img')->nullable();
            $table->text('content_section_1')->nullable();
            $table->text('content_section_2')->nullable();
            $table->string('blog_imgs')->nullable();
            $table->text('quote_text')->nullable();
            $table->json('categories')->nullable(); // Stores an array of categories
            $table->json('tags')->nullable(); // Stores an array of tags
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
