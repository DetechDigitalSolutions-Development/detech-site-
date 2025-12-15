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
        Schema::table('projects', function (Blueprint $table) {
            // Drop columns to be removed
            $table->dropColumn([
                'owner',
                'start_date',
                'end_date',
                'challenge_title',
                'challenge_points',
            ]);

            // Add new columns
            $table->enum('type', ['website', 'web_system', 'mobile_app', 'desktop_app'])
                ->default('website')
                ->after('client_name');
            
            $table->string('industry')->nullable()->after('type');
            $table->string('region')->nullable()->after('industry');
            $table->string('project_duration')->nullable()->after('region');
            
            // Add short_description if not exists
            if (!Schema::hasColumn('projects', 'short_description')) {
                $table->text('short_description')->nullable()->after('title');
            }
            
            // Optional: Add slug for SEO friendly URLs
            $table->string('slug')->unique()->nullable()->after('title');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            // Re-add dropped columns
            $table->string('owner')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('challenge_title')->nullable();
            $table->text('challenge_points')->nullable();

            // Remove new columns
            $table->dropColumn([
                'type',
                'industry',
                'region',
                'project_duration',
                'slug'
            ]);
            
            // Remove short_description if it was added
            if (Schema::hasColumn('projects', 'short_description')) {
                $table->dropColumn('short_description');
            }
        });
    }
};