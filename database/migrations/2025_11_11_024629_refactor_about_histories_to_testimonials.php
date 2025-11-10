<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Check if about_histories table exists
        if (Schema::hasTable('about_histories')) {
            // Rename table
            Schema::rename('about_histories', 'testimonials');

            // Drop year column if it exists
            if (Schema::hasColumn('testimonials', 'year')) {
                Schema::table('testimonials', function (Blueprint $table) {
                    $table->dropColumn('year');
                });
            }

            // Rename columns using raw SQL (MySQL/MariaDB specific)
            if (Schema::hasColumn('testimonials', 'title')) {
                DB::statement('ALTER TABLE testimonials CHANGE COLUMN `title` `name` JSON NOT NULL');
            }

            if (Schema::hasColumn('testimonials', 'description')) {
                DB::statement('ALTER TABLE testimonials CHANGE COLUMN `description` `content` JSON NULL');
            }

            // Add new columns
            Schema::table('testimonials', function (Blueprint $table) {
                if (!Schema::hasColumn('testimonials', 'position')) {
                    $table->json('position')->nullable()->after('name');
                }
            });
        } else {
            // If table doesn't exist, create it fresh
            if (!Schema::hasTable('testimonials')) {
                Schema::create('testimonials', function (Blueprint $table) {
                    $table->id();
                    $table->json('name'); // Person's name (localized)
                    $table->json('content')->nullable(); // Testimonial content (localized)
                    $table->json('position')->nullable(); // Position/role (localized, e.g., "Ex-Student", "Student")
                    $table->timestamps();
                });
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('testimonials')) {
            Schema::table('testimonials', function (Blueprint $table) {
                // Remove new columns
                if (Schema::hasColumn('testimonials', 'position')) {
                    $table->dropColumn('position');
                }
                if (Schema::hasColumn('testimonials', 'rating')) {
                    $table->dropColumn('rating');
                }

                // Rename back
                DB::statement('ALTER TABLE testimonials CHANGE COLUMN name title JSON NOT NULL');
                DB::statement('ALTER TABLE testimonials CHANGE COLUMN content description JSON NULL');

                // Add year column back
                $table->year('year')->after('id');
            });

            // Rename table back
            Schema::rename('testimonials', 'about_histories');
        }
    }
};
