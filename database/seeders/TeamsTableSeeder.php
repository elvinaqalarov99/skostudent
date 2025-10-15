<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('teams')->delete();
        
        \DB::table('teams')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '{"az": "Mark Smith", "en": "Mark Smith", "ru": "Mark Smith"}',
                'position' => '{"az": "ARCHITECT", "en": "ARCHITECT", "ru": "ARCHITECT"}',
                'created_at' => '2023-08-23 11:55:29',
                'updated_at' => '2023-08-23 11:55:29',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '{"az": "Justice Smith", "en": "Justice Smith", "ru": "Justice Smith"}',
                'position' => '{"az": "Manager", "en": "Manager", "ru": "Manager"}',
                'created_at' => '2023-08-23 11:55:49',
                'updated_at' => '2023-08-23 11:55:49',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => '{"az": "Daniel Smith", "en": "Daniel Smith", "ru": "Daniel Smith"}',
                'position' => '{"az": "ceo", "en": "ceo", "ru": "ceo"}',
                'created_at' => '2023-08-23 11:56:06',
                'updated_at' => '2023-08-23 11:56:06',
            ),
        ));
        
        
    }
}