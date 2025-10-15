<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FeaturesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('features')->delete();
        
        \DB::table('features')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => '{"az": "Expert Teams", "en": "Expert Teams", "ru": "Expert Teams"}',
                'created_at' => '2023-08-23 11:59:10',
                'updated_at' => '2023-08-27 00:55:49',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => '{"az": "Timely Delivery", "en": "Timely Delivery", "ru": "Timely Delivery"}',
                'created_at' => '2023-08-23 11:59:20',
                'updated_at' => '2023-08-23 11:59:20',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => '{"az": "24/7 Support", "en": "24/7 Support", "ru": "24/7 Support"}',
                'created_at' => '2023-08-23 11:59:32',
                'updated_at' => '2023-08-23 11:59:32',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => '{"az": "Best Equipment", "en": "Best Equipment", "ru": "Best Equipment"}',
                'created_at' => '2023-08-23 11:59:45',
                'updated_at' => '2023-08-23 11:59:45',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => '{"az": "100% Guaranty", "en": "100% Guaranty", "ru": "100% Guaranty"}',
                'created_at' => '2023-08-23 11:59:57',
                'updated_at' => '2023-08-23 11:59:57',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => '{"az": "Timely Delivery", "en": "Timely Delivery", "ru": "Timely Delivery"}',
                'created_at' => '2023-08-23 12:00:10',
                'updated_at' => '2023-08-23 12:00:10',
            ),
        ));
        
        
    }
}