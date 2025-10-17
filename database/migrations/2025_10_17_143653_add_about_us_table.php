<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void {
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->json('short_info')->nullable(); // translatable short text
            $table->json('values')->nullable();
            $table->json('mission')->nullable();
            $table->json('vision')->nullable();

            // statistics
            $table->integer('country_count')->default(0);
            $table->integer('student_count')->default(0);
            $table->integer('scholarship_count')->default(0);
            $table->integer('university_count')->default(0);

            $table->timestamps();
        });

        Schema::create('about_histories', function (Blueprint $table) {
            $table->id();
            $table->year('year');
            $table->json('title');
            $table->json('description')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('about_us');

        Schema::dropIfExists('about_histories');
    }
};
