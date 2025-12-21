<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Check if migration already failed partially
        if (Schema::hasColumn('blogs', 'slug')) {
            // Remove any existing unique constraint
            $sm = Schema::getConnection()->getDoctrineSchemaManager();
            $indexes = $sm->listTableIndexes('blogs');
            
            foreach ($indexes as $index) {
                if ($index->getName() === 'blogs_slug_unique') {
                    Schema::table('blogs', function (Blueprint $table) use ($index) {
                        $table->dropIndex($index->getName());
                    });
                }
            }
            
            // Update empty slugs
            $this->updateSlugs();
            
            // Add unique constraint back
            Schema::table('blogs', function (Blueprint $table) {
                $table->unique('slug', 'blogs_slug_unique');
            });
        } else {
            // Add slug column without unique constraint first
            Schema::table('blogs', function (Blueprint $table) {
                $table->string('slug')->nullable()->after('title');
            });
            
            // Update all records with unique slugs
            $this->updateSlugs();
            
            // Now add unique constraint
            Schema::table('blogs', function (Blueprint $table) {
                $table->unique('slug', 'blogs_slug_unique');
                $table->string('slug')->nullable(false)->change();
            });
        }
    }
    
    /**
     * Update slugs for all blogs
     */
    private function updateSlugs(): void
    {
        $blogs = DB::table('blogs')->get();
        
        foreach ($blogs as $blog) {
            if (empty($blog->slug) || $blog->slug === '') {
                $slug = Str::slug($blog->title);
                $originalSlug = $slug;
                $count = 1;
                
                while (DB::table('blogs')->where('slug', $slug)->where('id', '!=', $blog->id)->exists()) {
                    $slug = $originalSlug . '-' . $count++;
                }
                
                DB::table('blogs')
                    ->where('id', $blog->id)
                    ->update(['slug' => $slug]);
            }
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropUnique('blogs_slug_unique');
            $table->dropColumn('slug');
        });
    }
};