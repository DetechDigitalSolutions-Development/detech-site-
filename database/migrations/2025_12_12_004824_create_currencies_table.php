<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('currencies', function (Blueprint $table) {
            $table->id();
            $table->string('code'); // PHP, AUD, USD
            $table->string('name'); // Philippine Peso, Australian Dollar
            $table->string('symbol'); // ₱, $, US$
            $table->string('label'); // RATES IN PHP
            $table->boolean('is_active')->default(true);
            $table->decimal('exchange_rate', 10, 4)->nullable();
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('currencies');
    }
};
