<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PortfolioTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('portfolio_types')->delete();
        
        \DB::table('portfolio_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => '{"az": "Building", "en": "Building", "ru": "Building"}',
                'slug' => 'building',
                'created_at' => '2023-08-23 12:44:25',
                'updated_at' => '2023-08-27 00:58:11',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => '{"az": "Construction", "en": "Construction", "ru": "Construction"}',
                'slug' => 'construction',
                'created_at' => '2023-08-23 12:44:33',
                'updated_at' => '2023-08-23 12:44:33',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => '{"az": "Renovation", "en": "Renovation", "ru": "Renovation"}',
                'slug' => 'renovation',
                'created_at' => '2023-08-23 12:44:42',
                'updated_at' => '2023-08-23 12:44:42',
            ),
        ));
        
        
    }
}