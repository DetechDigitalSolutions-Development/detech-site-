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
        Schema::table('product_sites', function (Blueprint $table) {
            // Add product_link field after site_file
            $table->string('product_link')->nullable()->after('site_file');
            
            // Add index for better performance
            $table->index('product_link');
            
            // Optional: Add slug index if not exists
            if (!Schema::hasIndex('product_sites', 'product_sites_site_slug_index')) {
                $table->index('site_slug');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('product_sites', function (Blueprint $table) {
            $table->dropColumn('product_link');
            $table->dropIndex(['product_link']);
        });
    }
};