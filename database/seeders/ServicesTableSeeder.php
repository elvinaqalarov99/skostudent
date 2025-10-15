<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('services')->delete();
        
        \DB::table('services')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => '{"az": "Home Renovation", "en": "Home Renovation", "ru": "Home Renovation"}',
                'description' => '{"az": "Dui lobortis scelerisque magna curabitur duis\\r\\npurus platea massa accumsan", "en": "Dui lobortis scelerisque magna curabitur duis\\r\\npurus platea massa accumsan", "ru": "Dui lobortis scelerisque magna curabitur duis\\r\\npurus platea massa accumsan"}',
                'content_1' => '{"az": "<p>Continually myocardinate holistic mindshare with client-based web services. Assertively e-enable catalysts for change</p><p>before tested markets. Phosfluorescently maintain wireless scenarios after intermandated applications. Conveniently</p><p>predominate revolutionary quality vectors through future-proof manufactured products. Enthusiastically transform</p><p>distinctive collaboration.</p>", "en": "<p>Continually myocardinate holistic mindshare with client-based web services. Assertively e-enable catalysts for change</p><p>before tested markets. Phosfluorescently maintain wireless scenarios after intermandated applications. Conveniently</p><p>predominate revolutionary quality vectors through future-proof manufactured products. Enthusiastically transform</p><p>distinctive collaboration.</p>", "ru": "<p>Continually myocardinate holistic mindshare with client-based web services. Assertively e-enable catalysts for change</p><p>before tested markets. Phosfluorescently maintain wireless scenarios after intermandated applications. Conveniently</p><p>predominate revolutionary quality vectors through future-proof manufactured products. Enthusiastically transform</p><p>distinctive collaboration.</p>"}',
                'content_2' => '{"az": "<p>Assertively e-enable catalysts for change before fully tested markets. Phosfluo rescently is maintain solve wireless</p><p>scenarios after intermandated applications. Conveniently predominate busin revolutionary quality vectors through</p><p>future-proof manufactured products. Enthusiastically transform distinctive collaboration.</p>", "en": "<p>Assertively e-enable catalysts for change before fully tested markets. Phosfluo rescently is maintain solve wireless</p><p>scenarios after intermandated applications. Conveniently predominate busin revolutionary quality vectors through</p><p>future-proof manufactured products. Enthusiastically transform distinctive collaboration.</p>", "ru": "<p>Assertively e-enable catalysts for change before fully tested markets. Phosfluo rescently is maintain solve wireless</p><p>scenarios after intermandated applications. Conveniently predominate busin revolutionary quality vectors through</p><p>future-proof manufactured products. Enthusiastically transform distinctive collaboration.</p>"}',
                'slug' => 'home-renovation',
                'created_at' => '2023-08-27 02:03:57',
                'updated_at' => '2023-08-27 02:03:57',
            ),
        ));
        
        
    }
}