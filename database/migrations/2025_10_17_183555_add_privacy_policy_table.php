<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void {
        Schema::create('privacy_policy', function (Blueprint $table) {
            $table->id();
            $table->json('title')->nullable(); // translatable short text
            $table->json('description')->nullable(); // translatable short text
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('privacy_policy');
    }
};
