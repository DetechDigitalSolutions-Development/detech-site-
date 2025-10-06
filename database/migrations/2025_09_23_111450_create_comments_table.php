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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('user_name'); // Name of the user commenting
            $table->string('user_email'); // E-mail of the user commenting
            $table->foreignId('blog_id')->constrained('blogs')->onDelete('cascade'); // Foreign key to blogs table
            $table->text('comment_text'); // The actual comment content
            $table->foreignId('reply_id')->nullable()->constrained('comments')->onDelete('cascade'); // For replies to other comments
            $table->boolean('is_approved')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};