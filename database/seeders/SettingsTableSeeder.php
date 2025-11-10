<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('settings')->delete();

        \DB::table('settings')->insert(array (
            0 =>
            array (
                'id' => 1,
                'key' => 'favicon',
                'type' => '3',
                'value' => '{"az": "{\\"az\\": \\"favicon\\"}", "en": "{\\"az\\": \\"favicon\\"}", "ru": "{\\"az\\": \\"favicon\\"}"}',
                'created_at' => '2023-08-22 20:12:22',
                'updated_at' => '2023-08-22 20:12:22',
            ),
            1 =>
            array (
                'id' => 2,
                'key' => 'logo',
                'type' => '3',
                'value' => '{"az": "{\\"az\\": \\"logo\\"}", "en": "{\\"az\\": \\"logo\\"}", "ru": "{\\"az\\": \\"logo\\"}"}',
                'created_at' => '2023-08-22 20:12:22',
                'updated_at' => '2023-08-22 20:12:22',
            ),
            2 =>
            array (
                'id' => 3,
                'key' => 'site_name',
                'type' => '1',
                'value' => '{"az": "Skostudent.az", "en": "Skostudent.az", "ru": "Skostudent.az"}',
                'created_at' => '2023-08-22 20:12:22',
                'updated_at' => '2023-08-22 20:12:22',
            ),
            3 =>
            array (
                'id' => 4,
                'key' => 'page_name_home',
                'type' => '1',
                'value' => '{"az": "Home", "en": "Home", "ru": "Home"}',
                'created_at' => '2023-08-22 21:10:01',
                'updated_at' => '2023-08-22 21:23:22',
            ),
            4 =>
            array (
                'id' => 5,
                'key' => 'page_name_products',
                'type' => '1',
                'value' => '{"az": "Products", "en": "Products", "ru": "Products"}',
                'created_at' => '2023-08-22 21:10:01',
                'updated_at' => '2023-08-22 21:23:39',
            ),
            5 =>
            array (
                'id' => 7,
                'key' => 'page_name_services',
                'type' => '1',
                'value' => '{"az": "Services", "en": "Services", "ru": "Services"}',
                'created_at' => '2023-08-22 21:10:01',
                'updated_at' => '2023-08-22 21:23:49',
            ),
            6 =>
            array (
                'id' => 9,
                'key' => 'page_name_portfolio',
                'type' => '1',
                'value' => '{"az": "Portfolio", "en": "Portfolio", "ru": "Portfolio"}',
                'created_at' => '2023-08-22 21:10:01',
                'updated_at' => '2023-08-22 21:23:59',
            ),
            7 =>
            array (
                'id' => 11,
                'key' => 'page_name_blog',
                'type' => '1',
                'value' => '{"az": "Blog", "en": "Blog", "ru": "Blog"}',
                'created_at' => '2023-08-22 21:10:01',
                'updated_at' => '2023-08-22 21:24:10',
            ),
            8 =>
            array (
                'id' => 13,
                'key' => 'page_name_contact',
                'type' => '1',
                'value' => '{"az": "Contact", "en": "Contact", "ru": "Contact"}',
                'created_at' => '2023-08-22 21:10:01',
                'updated_at' => '2023-08-22 21:24:20',
            ),
            9 =>
            array (
                'id' => 14,
                'key' => 'page_name_about',
                'type' => '1',
                'value' => '{"az": "About Us", "en": "About Us", "ru": "About Us"}',
                'created_at' => '2023-08-22 21:10:01',
                'updated_at' => '2023-08-22 21:24:32',
            ),
            10 =>
            array (
                'id' => 15,
                'key' => 'facebook_url',
                'type' => '1',
                'value' => '{"az": "#", "en": "#", "ru": "#"}',
                'created_at' => '2023-08-22 21:10:48',
                'updated_at' => '2023-08-22 21:22:05',
            ),
            11 =>
            array (
                'id' => 16,
                'key' => 'twitter_url',
                'type' => '1',
                'value' => '{"az": "#", "en": "#", "ru": "#"}',
                'created_at' => '2023-08-22 21:10:48',
                'updated_at' => '2023-08-22 21:21:59',
            ),
            12 =>
            array (
                'id' => 17,
                'key' => 'youtube_url',
                'type' => '1',
                'value' => '{"az": "#", "en": "#", "ru": "#"}',
                'created_at' => '2023-08-22 21:10:48',
                'updated_at' => '2023-08-22 21:21:49',
            ),
            13 =>
            array (
                'id' => 18,
                'key' => 'linkedin_url',
                'type' => '1',
                'value' => '{"az": "#", "en": "#", "ru": "#"}',
                'created_at' => '2023-08-22 21:10:48',
                'updated_at' => '2023-08-22 21:19:40',
            ),
            14 =>
            array (
                'id' => 19,
                'key' => 'instagram_url',
                'type' => '1',
                'value' => '{"az": "#", "en": "#", "ru": "#"}',
                'created_at' => '2023-08-22 21:21:42',
                'updated_at' => '2023-08-22 21:24:38',
            ),
            15 =>
            array (
                'id' => 20,
                'key' => 'footer_description',
                'type' => '2',
                'value' => '{"az": "Let\'s Build Something <br>\\nGreat Together!", "en": "Let\'s Build Something <br>\\nGreat Together!", "ru": "Let\'s Build Something <br>\\nGreat Together!"}',
                'created_at' => '2023-08-22 21:29:51',
                'updated_at' => '2023-08-22 21:31:13',
            ),
            16 =>
            array (
                'id' => 21,
                'key' => 'address_label',
                'type' => '1',
                'value' => '{"az": "Address", "en": "Address", "ru": "Address"}',
                'created_at' => '2023-08-22 21:30:09',
                'updated_at' => '2023-08-22 21:30:46',
            ),
            17 =>
            array (
                'id' => 22,
                'key' => 'say_hello_label',
                'type' => '1',
                'value' => '{"az": "Say Hello", "en": "Say Hello", "ru": "Say Hello"}',
                'created_at' => '2023-08-22 21:30:09',
                'updated_at' => '2023-08-22 21:30:23',
            ),
            18 =>
            array (
                'id' => 23,
                'key' => 'address',
                'type' => '1',
                'value' => '{"az": "Kingstone --- 258 denial street office Berlin Germany", "en": "Kingstone --- 258 denial street office Berlin Germany", "ru": "Kingstone --- 258 denial street office Berlin Germany"}',
                'created_at' => '2023-08-22 21:31:59',
                'updated_at' => '2023-08-22 21:32:10',
            ),
            19 =>
            array (
                'id' => 24,
                'key' => 'email',
                'type' => '1',
                'value' => '{"az": "hello@design.com", "en": "hello@design.com", "ru": "hello@design.com"}',
                'created_at' => '2023-08-22 21:31:59',
                'updated_at' => '2023-08-22 21:32:28',
            ),
            20 =>
            array (
                'id' => 25,
                'key' => 'phone',
                'type' => '1',
                'value' => '{"az": "+258 368 3158", "en": "+258 368 3158", "ru": "+258 368 3158"}',
                'created_at' => '2023-08-22 21:31:59',
                'updated_at' => '2023-08-22 21:32:36',
            ),
            21 =>
            array (
                'id' => 26,
                'key' => 'main_page_banner_description',
                'type' => '1',
                'value' => '{"az": "Hospitality & Leisure", "en": "Hospitality & Leisure", "ru": "Hospitality & Leisure"}',
                'created_at' => '2023-08-22 21:39:25',
                'updated_at' => '2023-08-22 21:40:25',
            ),
            22 =>
            array (
                'id' => 27,
                'key' => 'main_page_banner_title',
                'type' => '1',
                'value' => '{"az": "Where fluid <br>  form describes <br>", "en": "Where fluid <br>  form describes <br>", "ru": "Where fluid <br>  form describes <br>"}',
                'created_at' => '2023-08-22 21:39:25',
                'updated_at' => '2023-08-22 21:40:41',
            ),
            23 =>
            array (
                'id' => 28,
                'key' => 'main_page_banner_dynamic_words',
                'type' => '1',
                'value' => '{"az": "Word1,Word2,Word3", "en": "Word1,Word2,Word3", "ru": "Word1,Word2,Word3"}',
                'created_at' => '2023-08-22 21:39:25',
                'updated_at' => '2023-08-22 21:46:06',
            ),
            24 =>
            array (
                'id' => 29,
                'key' => 'main_page_banner_image',
                'type' => '3',
                'value' => '{"az": "main_page_banner_image", "en": "main_page_banner_image", "ru": "main_page_banner_image"}',
                'created_at' => '2023-08-22 21:39:46',
                'updated_at' => '2023-08-22 21:39:46',
            ),
        ));


    }
}
