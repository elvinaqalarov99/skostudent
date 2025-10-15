<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('blogs')->delete();
        
        \DB::table('blogs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => '{"az": "One of the World Largest Passive House Buildings Construction", "en": "One of the World Largest Passive House Buildings Construction", "ru": "One of the World Largest Passive House Buildings Construction"}',
                'description' => '{"az": "Collaboratively pontificate bleeding edge resources with inexpensive methodologies globally initiate\\r\\nmultidisciplinary compatible architectures piteously repurpose leading-edge growth strategies with just\\r\\nin time web-readiness communicate timely meta-services.", "en": "Collaboratively pontificate bleeding edge resources with inexpensive methodologies globally initiate\\r\\nmultidisciplinary compatible architectures piteously repurpose leading-edge growth strategies with just\\r\\nin time web-readiness communicate timely meta-services.", "ru": "Collaboratively pontificate bleeding edge resources with inexpensive methodologies globally initiate\\r\\nmultidisciplinary compatible architectures piteously repurpose leading-edge growth strategies with just\\r\\nin time web-readiness communicate timely meta-services."}',
                'content' => '{"az": "<p>Collaboratively pontificate bleeding edge resources with inexpensive methodologies globally initiate</p><p>multidisciplinary compatible architectures piteously repurpose leading-edge growth strategies with just</p><p>in time web-readiness communicate timely meta-services.</p><p>Onubia semper vel donec torquent fusce mauris felis aptent lacinia nisl, lectus himenaeos euismod</p><p>molestie iaculis interdum in laoreet condimentum dictum, quisque quam risus sollicitudin gravida ut</p><p>odio per a et. Gravida maecenas lobortis suscipit mus sociosqu convallis, mollis vestibulum donec</p><p>aliquam risus sapien ridiculus, nulla sollicitudin eget in venenatis. Tortor montes platea iaculis posuere</p><p>per mauris, eros porta blandit curabitur ullamcorper varius.</p>", "en": "<p>Collaboratively pontificate bleeding edge resources with inexpensive methodologies globally initiate</p><p>multidisciplinary compatible architectures piteously repurpose leading-edge growth strategies with just</p><p>in time web-readiness communicate timely meta-services.</p><p>Onubia semper vel donec torquent fusce mauris felis aptent lacinia nisl, lectus himenaeos euismod</p><p>molestie iaculis interdum in laoreet condimentum dictum, quisque quam risus sollicitudin gravida ut</p><p>odio per a et. Gravida maecenas lobortis suscipit mus sociosqu convallis, mollis vestibulum donec</p><p>aliquam risus sapien ridiculus, nulla sollicitudin eget in venenatis. Tortor montes platea iaculis posuere</p><p>per mauris, eros porta blandit curabitur ullamcorper varius.</p>", "ru": "<p>Collaboratively pontificate bleeding edge resources with inexpensive methodologies globally initiate</p><p>multidisciplinary compatible architectures piteously repurpose leading-edge growth strategies with just</p><p>in time web-readiness communicate timely meta-services.</p><p>Onubia semper vel donec torquent fusce mauris felis aptent lacinia nisl, lectus himenaeos euismod</p><p>molestie iaculis interdum in laoreet condimentum dictum, quisque quam risus sollicitudin gravida ut</p><p>odio per a et. Gravida maecenas lobortis suscipit mus sociosqu convallis, mollis vestibulum donec</p><p>aliquam risus sapien ridiculus, nulla sollicitudin eget in venenatis. Tortor montes platea iaculis posuere</p><p>per mauris, eros porta blandit curabitur ullamcorper varius.</p>"}',
                'slug' => 'one-of-the-world-largest-passive-house-buildings-construction',
                'created_at' => '2023-08-23 12:43:16',
                'updated_at' => '2023-08-27 00:49:02',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => '{"az": "How to Secure Funding for Your New Home at London", "en": "How to Secure Funding for Your New Home at London", "ru": "How to Secure Funding for Your New Home at London"}',
                'description' => '{"az": "Ultrices iaculis commodo parturient euismod pulvinar donec cum eget a, accumsan viverra cras\\r\\npraesent cubilia dignissim ad rhoncus.", "en": "Ultrices iaculis commodo parturient euismod pulvinar donec cum eget a, accumsan viverra cras\\r\\npraesent cubilia dignissim ad rhoncus.", "ru": "Ultrices iaculis commodo parturient euismod pulvinar donec cum eget a, accumsan viverra cras\\r\\npraesent cubilia dignissim ad rhoncus."}',
                'content' => '{"az": "<div>Ultrices iaculis commodo parturient euismod pulvinar donec cum eget a, accumsan viverra cras</div><div>praesent cubilia dignissim ad rhoncus. Gravida maecenas lobortis suscipit mus sociosqu convallis,</div><div>mollis vestibulum donec aliquam risus sapien ridiculus, nulla sollicitudin eget in venenatis. Tortor</div><div>montes platea iaculis posuere per mauris, eros porta blandit curabitur ullamcorper varius, nostra ante</div><div>risus egestas suscipit. Quisque interdum nec parturient facilisis nunc ac quam, ad est cubilia mauris</div><div>himenaeos nascetur vestibulum.</div>", "en": "<div>Ultrices iaculis commodo parturient euismod pulvinar donec cum eget a, accumsan viverra cras</div><div>praesent cubilia dignissim ad rhoncus. Gravida maecenas lobortis suscipit mus sociosqu convallis,</div><div>mollis vestibulum donec aliquam risus sapien ridiculus, nulla sollicitudin eget in venenatis. Tortor</div><div>montes platea iaculis posuere per mauris, eros porta blandit curabitur ullamcorper varius, nostra ante</div><div>risus egestas suscipit. Quisque interdum nec parturient facilisis nunc ac quam, ad est cubilia mauris</div><div>himenaeos nascetur vestibulum.</div>", "ru": "<div>Ultrices iaculis commodo parturient euismod pulvinar donec cum eget a, accumsan viverra cras</div><div>praesent cubilia dignissim ad rhoncus. Gravida maecenas lobortis suscipit mus sociosqu convallis,</div><div>mollis vestibulum donec aliquam risus sapien ridiculus, nulla sollicitudin eget in venenatis. Tortor</div><div>montes platea iaculis posuere per mauris, eros porta blandit curabitur ullamcorper varius, nostra ante</div><div>risus egestas suscipit. Quisque interdum nec parturient facilisis nunc ac quam, ad est cubilia mauris</div><div>himenaeos nascetur vestibulum.</div>"}',
                'slug' => 'how-to-secure-funding-for-your-new-home-at-london',
                'created_at' => '2023-08-23 12:44:05',
                'updated_at' => '2023-08-27 00:49:33',
            ),
        ));
        
        
    }
}