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
                'key' => 'logo_dark',
                'type' => '3',
                'value' => '{"az": "{\\"az\\": \\"logo_dark\\"}", "en": "{\\"az\\": \\"logo_dark\\"}", "ru": "{\\"az\\": \\"logo_dark\\"}"}',
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
            25 => 
            array (
                'id' => 30,
                'key' => 'main_page_section_1_tab_1_content',
                'type' => '4',
            'value' => '{"az": "<p class=\\"disc\\" style=\\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-size: 16px; line-height: var(--line-height-b2); color: rgb(110, 119, 125); font-family: Archivo, sans-serif;\\">Uniquely repurpose client-centered imperatives without distinctive products<br>leverage existing fully researched.</p><div class=\\"list-wrapper\\" style=\\"display: flex; align-items: center; margin-bottom: 30px; color: rgb(110, 119, 125); font-family: Archivo, sans-serif; font-size: 16px;\\"><div class=\\"single\\" style=\\"margin-right: 30px;\\"><ul style=\\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 20px; list-style: square; border: none;\\"><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Great Quality Service</li><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Professional Work Skills</li></ul></div><div class=\\"single\\" style=\\"margin-right: 30px;\\"><ul style=\\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 20px; list-style: square; border: none;\\"><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Great Quality Service</li><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Professional Work Skills</li></ul></div></div>", "en": "<p class=\\"disc\\" style=\\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-size: 16px; line-height: var(--line-height-b2); color: rgb(110, 119, 125); font-family: Archivo, sans-serif;\\">Uniquely repurpose client-centered imperatives without distinctive products<br>leverage existing fully researched.</p><div class=\\"list-wrapper\\" style=\\"display: flex; align-items: center; margin-bottom: 30px; color: rgb(110, 119, 125); font-family: Archivo, sans-serif; font-size: 16px;\\"><div class=\\"single\\" style=\\"margin-right: 30px;\\"><ul style=\\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 20px; list-style: square; border: none;\\"><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Great Quality Service</li><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Professional Work Skills</li></ul></div><div class=\\"single\\" style=\\"margin-right: 30px;\\"><ul style=\\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 20px; list-style: square; border: none;\\"><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Great Quality Service</li><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Professional Work Skills</li></ul></div></div>", "ru": "<p class=\\"disc\\" style=\\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-size: 16px; line-height: var(--line-height-b2); color: rgb(110, 119, 125); font-family: Archivo, sans-serif;\\">Uniquely repurpose client-centered imperatives without distinctive products<br>leverage existing fully researched.</p><div class=\\"list-wrapper\\" style=\\"display: flex; align-items: center; margin-bottom: 30px; color: rgb(110, 119, 125); font-family: Archivo, sans-serif; font-size: 16px;\\"><div class=\\"single\\" style=\\"margin-right: 30px;\\"><ul style=\\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 20px; list-style: square; border: none;\\"><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Great Quality Service</li><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Professional Work Skills</li></ul></div><div class=\\"single\\" style=\\"margin-right: 30px;\\"><ul style=\\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 20px; list-style: square; border: none;\\"><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Great Quality Service</li><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Professional Work Skills</li></ul></div></div>"}',
                'created_at' => '2023-08-22 21:52:24',
                'updated_at' => '2023-08-22 21:54:29',
            ),
            26 => 
            array (
                'id' => 31,
                'key' => 'main_page_section_1_bg_title',
                'type' => '1',
                'value' => '{"az": "Company", "en": "Company", "ru": "Company"}',
                'created_at' => '2023-08-22 22:00:01',
                'updated_at' => '2023-08-22 22:01:57',
            ),
            27 => 
            array (
                'id' => 32,
                'key' => 'main_page_section_1_sub_title',
                'type' => '1',
                'value' => '{"az": "RENOVATİON COMPANY", "en": "RENOVATİON COMPANY", "ru": "RENOVATİON COMPANY"}',
                'created_at' => '2023-08-22 22:00:01',
                'updated_at' => '2023-08-22 22:02:06',
            ),
            28 => 
            array (
                'id' => 33,
                'key' => 'main_page_section_1_title',
                'type' => '1',
                'value' => '{"az": "Our thoughts for developing <br> your stylish life Level.", "en": "Our thoughts for developing <br> your stylish life Level.", "ru": "Our thoughts for developing <br> your stylish life Level."}',
                'created_at' => '2023-08-22 22:00:01',
                'updated_at' => '2023-08-22 22:08:33',
            ),
            29 => 
            array (
                'id' => 34,
                'key' => 'main_page_section_1_tab_1_name',
                'type' => '1',
                'value' => '{"az": "Skills", "en": "Skills", "ru": "Skills"}',
                'created_at' => '2023-08-22 22:00:01',
                'updated_at' => '2023-08-22 22:02:29',
            ),
            30 => 
            array (
                'id' => 35,
                'key' => 'main_page_section_1_tab_2_name',
                'type' => '1',
                'value' => '{"az": "Experience", "en": "Experience", "ru": "Experience"}',
                'created_at' => '2023-08-22 22:00:01',
                'updated_at' => '2023-08-22 22:02:37',
            ),
            31 => 
            array (
                'id' => 36,
                'key' => 'main_page_section_1_tab_3_name',
                'type' => '1',
                'value' => '{"az": "Destination", "en": "Destination", "ru": "Destination"}',
                'created_at' => '2023-08-22 22:00:01',
                'updated_at' => '2023-08-22 22:02:46',
            ),
            32 => 
            array (
                'id' => 37,
                'key' => 'main_page_section_1_tab_2_content',
                'type' => '4',
            'value' => '{"az": "<p class=\\"disc\\" style=\\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-size: 16px; line-height: var(--line-height-b2); color: rgb(110, 119, 125); font-family: Archivo, sans-serif;\\">Uniquely repurpose client-centered imperatives without distinctive products<br>leverage existing fully researched.</p><div class=\\"list-wrapper\\" style=\\"display: flex; align-items: center; margin-bottom: 30px; color: rgb(110, 119, 125); font-family: Archivo, sans-serif; font-size: 16px;\\"><div class=\\"single\\" style=\\"margin-right: 30px;\\"><ul style=\\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 20px; list-style: square; border: none;\\"><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Great Quality Service</li><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Professional Work Skills</li></ul></div><div class=\\"single\\" style=\\"margin-right: 30px;\\"><ul style=\\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 20px; list-style: square; border: none;\\"><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Great Quality Service</li><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Professional Work Skills</li></ul></div></div>", "en": "<p class=\\"disc\\" style=\\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-size: 16px; line-height: var(--line-height-b2); color: rgb(110, 119, 125); font-family: Archivo, sans-serif;\\">Uniquely repurpose client-centered imperatives without distinctive products<br>leverage existing fully researched.</p><div class=\\"list-wrapper\\" style=\\"display: flex; align-items: center; margin-bottom: 30px; color: rgb(110, 119, 125); font-family: Archivo, sans-serif; font-size: 16px;\\"><div class=\\"single\\" style=\\"margin-right: 30px;\\"><ul style=\\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 20px; list-style: square; border: none;\\"><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Great Quality Service</li><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Professional Work Skills</li></ul></div><div class=\\"single\\" style=\\"margin-right: 30px;\\"><ul style=\\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 20px; list-style: square; border: none;\\"><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Great Quality Service</li><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Professional Work Skills</li></ul></div></div>", "ru": "<p class=\\"disc\\" style=\\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-size: 16px; line-height: var(--line-height-b2); color: rgb(110, 119, 125); font-family: Archivo, sans-serif;\\">Uniquely repurpose client-centered imperatives without distinctive products<br>leverage existing fully researched.</p><div class=\\"list-wrapper\\" style=\\"display: flex; align-items: center; margin-bottom: 30px; color: rgb(110, 119, 125); font-family: Archivo, sans-serif; font-size: 16px;\\"><div class=\\"single\\" style=\\"margin-right: 30px;\\"><ul style=\\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 20px; list-style: square; border: none;\\"><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Great Quality Service</li><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Professional Work Skills</li></ul></div><div class=\\"single\\" style=\\"margin-right: 30px;\\"><ul style=\\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 20px; list-style: square; border: none;\\"><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Great Quality Service</li><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Professional Work Skills</li></ul></div></div>"}',
                'created_at' => '2023-08-22 22:00:01',
                'updated_at' => '2023-08-22 22:03:00',
            ),
            33 => 
            array (
                'id' => 38,
                'key' => 'main_page_section_1_tab_3_content',
                'type' => '4',
            'value' => '{"az": "<p class=\\"disc\\" style=\\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-size: 16px; line-height: var(--line-height-b2); color: rgb(110, 119, 125); font-family: Archivo, sans-serif;\\">Uniquely repurpose client-centered imperatives without distinctive products<br>leverage existing fully researched.</p><div class=\\"list-wrapper\\" style=\\"display: flex; align-items: center; margin-bottom: 30px; color: rgb(110, 119, 125); font-family: Archivo, sans-serif; font-size: 16px;\\"><div class=\\"single\\" style=\\"margin-right: 30px;\\"><ul style=\\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 20px; list-style: square; border: none;\\"><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Great Quality Service</li><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Professional Work Skills</li></ul></div><div class=\\"single\\" style=\\"margin-right: 30px;\\"><ul style=\\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 20px; list-style: square; border: none;\\"><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Great Quality Service</li><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Professional Work Skills</li></ul></div></div>", "en": "<p class=\\"disc\\" style=\\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-size: 16px; line-height: var(--line-height-b2); color: rgb(110, 119, 125); font-family: Archivo, sans-serif;\\">Uniquely repurpose client-centered imperatives without distinctive products<br>leverage existing fully researched.</p><div class=\\"list-wrapper\\" style=\\"display: flex; align-items: center; margin-bottom: 30px; color: rgb(110, 119, 125); font-family: Archivo, sans-serif; font-size: 16px;\\"><div class=\\"single\\" style=\\"margin-right: 30px;\\"><ul style=\\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 20px; list-style: square; border: none;\\"><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Great Quality Service</li><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Professional Work Skills</li></ul></div><div class=\\"single\\" style=\\"margin-right: 30px;\\"><ul style=\\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 20px; list-style: square; border: none;\\"><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Great Quality Service</li><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Professional Work Skills</li></ul></div></div>", "ru": "<p class=\\"disc\\" style=\\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-size: 16px; line-height: var(--line-height-b2); color: rgb(110, 119, 125); font-family: Archivo, sans-serif;\\">Uniquely repurpose client-centered imperatives without distinctive products<br>leverage existing fully researched.</p><div class=\\"list-wrapper\\" style=\\"display: flex; align-items: center; margin-bottom: 30px; color: rgb(110, 119, 125); font-family: Archivo, sans-serif; font-size: 16px;\\"><div class=\\"single\\" style=\\"margin-right: 30px;\\"><ul style=\\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 20px; list-style: square; border: none;\\"><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Great Quality Service</li><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Professional Work Skills</li></ul></div><div class=\\"single\\" style=\\"margin-right: 30px;\\"><ul style=\\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 20px; list-style: square; border: none;\\"><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Great Quality Service</li><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Professional Work Skills</li></ul></div></div>"}',
                'created_at' => '2023-08-22 22:00:01',
                'updated_at' => '2023-08-22 22:03:09',
            ),
            34 => 
            array (
                'id' => 39,
                'key' => 'main_page_section_1_image_1',
                'type' => '3',
                'value' => '{"az": "main_page_section_1_image_1", "en": "main_page_section_1_image_1", "ru": "main_page_section_1_image_1"}',
                'created_at' => '2023-08-22 22:03:39',
                'updated_at' => '2023-08-22 22:03:39',
            ),
            35 => 
            array (
                'id' => 40,
                'key' => 'main_page_section_1_image_2',
                'type' => '3',
                'value' => '{"az": "main_page_section_1_image_2", "en": "main_page_section_1_image_2", "ru": "main_page_section_1_image_2"}',
                'created_at' => '2023-08-22 22:03:39',
                'updated_at' => '2023-08-22 22:03:39',
            ),
            36 => 
            array (
                'id' => 41,
                'key' => 'main_page_section_2_title',
                'type' => '1',
                'value' => '{"az": "Trusted Renovation Company", "en": "Trusted Renovation Company", "ru": "Trusted Renovation Company"}',
                'created_at' => '2023-08-22 22:12:21',
                'updated_at' => '2023-08-22 22:12:29',
            ),
            37 => 
            array (
                'id' => 42,
                'key' => 'main_page_section_2_description',
                'type' => '2',
                'value' => '{"az": "Imperdiet integer varius mauris neque rhoncus per, duis tortor fermentum viverra <br> quisque, nostra proin dignissim at senectus.", "en": "Imperdiet integer varius mauris neque rhoncus per, duis tortor fermentum viverra <br> quisque, nostra proin dignissim at senectus.", "ru": "Imperdiet integer varius mauris neque rhoncus per, duis tortor fermentum viverra <br> quisque, nostra proin dignissim at senectus."}',
                'created_at' => '2023-08-22 22:12:21',
                'updated_at' => '2023-08-22 22:12:53',
            ),
            38 => 
            array (
                'id' => 43,
                'key' => 'main_page_section_2_number',
                'type' => '1',
                'value' => '{"az": "25+", "en": "25+", "ru": "25+"}',
                'created_at' => '2023-08-22 22:12:21',
                'updated_at' => '2023-08-22 22:13:00',
            ),
            39 => 
            array (
                'id' => 44,
                'key' => 'main_page_section_2_number_sub_title',
                'type' => '1',
                'value' => '{"az": "Years of Experience", "en": "Years of Experience", "ru": "Years of Experience"}',
                'created_at' => '2023-08-22 22:12:21',
                'updated_at' => '2023-08-22 22:13:08',
            ),
            40 => 
            array (
                'id' => 45,
                'key' => 'main_page_section_3_bg_title',
                'type' => '1',
                'value' => '{"az": "What We Do", "en": "What We Do", "ru": "What We Do"}',
                'created_at' => '2023-08-22 22:14:48',
                'updated_at' => '2023-08-22 22:15:10',
            ),
            41 => 
            array (
                'id' => 46,
                'key' => 'main_page_section_3_sub_title',
                'type' => '1',
                'value' => '{"az": "Renovation Company", "en": "Renovation Company", "ru": "Renovation Company"}',
                'created_at' => '2023-08-22 22:14:48',
                'updated_at' => '2023-08-22 22:15:23',
            ),
            42 => 
            array (
                'id' => 47,
                'key' => 'main_page_section_3_title',
                'type' => '1',
                'value' => '{"az": "Our thoughts for developing <br> your stylish life Level.", "en": "Our thoughts for developing <br> your stylish life Level.", "ru": "Our thoughts for developing <br> your stylish life Level."}',
                'created_at' => '2023-08-22 22:14:48',
                'updated_at' => '2023-08-22 22:15:43',
            ),
            43 => 
            array (
                'id' => 48,
                'key' => 'learn_more',
                'type' => '1',
                'value' => '{"az": "Learn More", "en": "Learn More", "ru": "Learn More"}',
                'created_at' => '2023-08-22 22:16:26',
                'updated_at' => '2023-08-22 22:16:34',
            ),
            44 => 
            array (
                'id' => 49,
                'key' => 'main_page_section_4_image',
                'type' => '3',
                'value' => '{"az": "main_page_section_4_image", "en": "main_page_section_4_image", "ru": "main_page_section_4_image"}',
                'created_at' => '2023-08-22 22:17:12',
                'updated_at' => '2023-08-22 22:17:12',
            ),
            45 => 
            array (
                'id' => 50,
                'key' => 'main_page_section_4_sub_title',
                'type' => '1',
                'value' => '{"az": "RENOVATİON COMPANY", "en": "RENOVATİON COMPANY", "ru": "RENOVATİON COMPANY"}',
                'created_at' => '2023-08-22 22:18:27',
                'updated_at' => '2023-08-22 22:18:35',
            ),
            46 => 
            array (
                'id' => 51,
                'key' => 'main_page_section_4_title',
                'type' => '1',
                'value' => '{"az": "Why People Choice Us?", "en": "Why People Choice Us?", "ru": "Why People Choice Us?"}',
                'created_at' => '2023-08-22 22:18:27',
                'updated_at' => '2023-08-22 22:18:50',
            ),
            47 => 
            array (
                'id' => 52,
                'key' => 'main_page_section_5_bg_title',
                'type' => '1',
                'value' => '{"az": "Meet Leaders", "en": "Meet Leaders", "ru": "Meet Leaders"}',
                'created_at' => '2023-08-22 22:20:02',
                'updated_at' => '2023-08-22 22:20:19',
            ),
            48 => 
            array (
                'id' => 53,
                'key' => 'main_page_section_5_sub_title',
                'type' => '1',
                'value' => '{"az": "Experts Members", "en": "Experts Members", "ru": "Experts Members"}',
                'created_at' => '2023-08-22 22:20:02',
                'updated_at' => '2023-08-22 22:20:26',
            ),
            49 => 
            array (
                'id' => 54,
                'key' => 'main_page_section_5_title',
                'type' => '1',
                'value' => '{"az": "Meet the leaders of our <br> dynamic company", "en": "Meet the leaders of our <br> dynamic company", "ru": "Meet the leaders of our <br> dynamic company"}',
                'created_at' => '2023-08-22 22:20:02',
                'updated_at' => '2023-08-22 22:20:33',
            ),
            50 => 
            array (
                'id' => 55,
                'key' => 'main_page_section_6_counter_1_icon',
                'type' => '3',
                'value' => '{"az": "main_page_section_6_counter_1_icon", "en": "main_page_section_6_counter_1_icon", "ru": "main_page_section_6_counter_1_icon"}',
                'created_at' => '2023-08-22 22:30:05',
                'updated_at' => '2023-08-22 22:30:05',
            ),
            51 => 
            array (
                'id' => 56,
                'key' => 'main_page_section_6_counter_1_number',
                'type' => '1',
                'value' => '{"az": "25", "en": "25", "ru": "25"}',
                'created_at' => '2023-08-22 22:30:05',
                'updated_at' => '2023-08-22 22:32:22',
            ),
            52 => 
            array (
                'id' => 57,
                'key' => 'main_page_section_6_counter_1_description',
                'type' => '2',
                'value' => '{"az": "Countries, We Worked. Urban design draws together the many standers of place-making", "en": "Countries, We Worked. Urban design draws together the many standers of place-making", "ru": "Countries, We Worked. Urban design draws together the many standers of place-making"}',
                'created_at' => '2023-08-22 22:30:05',
                'updated_at' => '2023-08-22 22:30:54',
            ),
            53 => 
            array (
                'id' => 58,
                'key' => 'main_page_section_6_counter_2_icon',
                'type' => '3',
                'value' => '{"az": "main_page_section_6_counter_2_icon", "en": "main_page_section_6_counter_2_icon", "ru": "main_page_section_6_counter_2_icon"}',
                'created_at' => '2023-08-22 22:30:05',
                'updated_at' => '2023-08-22 22:30:05',
            ),
            54 => 
            array (
                'id' => 59,
                'key' => 'main_page_section_6_counter_2_number',
                'type' => '1',
                'value' => '{"az": "80", "en": "80", "ru": "80"}',
                'created_at' => '2023-08-22 22:30:05',
                'updated_at' => '2023-08-22 22:32:13',
            ),
            55 => 
            array (
                'id' => 60,
                'key' => 'main_page_section_6_counter_2_description',
                'type' => '2',
                'value' => '{"az": "Countries, We Worked. Urban design draws together the many standers of place-making", "en": "Countries, We Worked. Urban design draws together the many standers of place-making", "ru": "Countries, We Worked. Urban design draws together the many standers of place-making"}',
                'created_at' => '2023-08-22 22:30:05',
                'updated_at' => '2023-08-22 22:30:48',
            ),
            56 => 
            array (
                'id' => 61,
                'key' => 'main_page_section_6_counter_3_icon',
                'type' => '3',
                'value' => '{"az": "main_page_section_6_counter_3_icon", "en": "main_page_section_6_counter_3_icon", "ru": "main_page_section_6_counter_3_icon"}',
                'created_at' => '2023-08-22 22:30:05',
                'updated_at' => '2023-08-22 22:30:05',
            ),
            57 => 
            array (
                'id' => 62,
                'key' => 'main_page_section_6_counter_3_number',
                'type' => '1',
                'value' => '{"az": "100", "en": "100", "ru": "100"}',
                'created_at' => '2023-08-22 22:30:05',
                'updated_at' => '2023-08-22 22:32:06',
            ),
            58 => 
            array (
                'id' => 63,
                'key' => 'main_page_section_6_counter_3_description',
                'type' => '2',
                'value' => '{"az": "Countries, We Worked. Urban design draws together the many standers of place-making", "en": "Countries, We Worked. Urban design draws together the many standers of place-making", "ru": "Countries, We Worked. Urban design draws together the many standers of place-making"}',
                'created_at' => '2023-08-22 22:30:05',
                'updated_at' => '2023-08-22 22:30:42',
            ),
            59 => 
            array (
                'id' => 64,
                'key' => 'main_page_section_6_counter_4_icon',
                'type' => '3',
                'value' => '{"az": "main_page_section_6_counter_4_icon", "en": "main_page_section_6_counter_4_icon", "ru": "main_page_section_6_counter_4_icon"}',
                'created_at' => '2023-08-22 22:30:05',
                'updated_at' => '2023-08-22 22:30:05',
            ),
            60 => 
            array (
                'id' => 65,
                'key' => 'main_page_section_6_counter_4_number',
                'type' => '1',
                'value' => '{"az": "38", "en": "38", "ru": "38"}',
                'created_at' => '2023-08-22 22:30:05',
                'updated_at' => '2023-08-22 22:31:55',
            ),
            61 => 
            array (
                'id' => 66,
                'key' => 'main_page_section_6_counter_4_description',
                'type' => '2',
                'value' => '{"az": "Countries, We Worked. Urban design draws together the many standers of place-making", "en": "Countries, We Worked. Urban design draws together the many standers of place-making", "ru": "Countries, We Worked. Urban design draws together the many standers of place-making"}',
                'created_at' => '2023-08-22 22:30:05',
                'updated_at' => '2023-08-22 22:30:37',
            ),
            62 => 
            array (
                'id' => 67,
                'key' => 'main_page_section_6_sub_title',
                'type' => '1',
                'value' => '{"az": "LATEST CASES", "en": "LATEST CASES", "ru": "LATEST CASES"}',
                'created_at' => '2023-08-22 22:30:05',
                'updated_at' => '2023-08-22 22:30:26',
            ),
            63 => 
            array (
                'id' => 68,
                'key' => 'main_page_section_6_title',
                'type' => '1',
                'value' => '{"az": "Universal Case Studies", "en": "Universal Case Studies", "ru": "Universal Case Studies"}',
                'created_at' => '2023-08-22 22:30:05',
                'updated_at' => '2023-08-22 22:30:19',
            ),
            64 => 
            array (
                'id' => 69,
                'key' => 'main_page_section_7_bg_title',
                'type' => '1',
                'value' => '{"az": "Process", "en": "Process", "ru": "Process"}',
                'created_at' => '2023-08-23 09:03:06',
                'updated_at' => '2023-08-23 09:03:31',
            ),
            65 => 
            array (
                'id' => 70,
                'key' => 'main_page_section_7_sub_title',
                'type' => '1',
                'value' => '{"az": "Renovation Company", "en": "Renovation Company", "ru": "Renovation Company"}',
                'created_at' => '2023-08-23 09:03:06',
                'updated_at' => '2023-08-23 09:03:38',
            ),
            66 => 
            array (
                'id' => 71,
                'key' => 'main_page_section_7_title',
                'type' => '1',
                'value' => '{"az": "Working Easy Process", "en": "Working Easy Process", "ru": "Working Easy Process"}',
                'created_at' => '2023-08-23 09:03:06',
                'updated_at' => '2023-08-23 09:03:44',
            ),
            67 => 
            array (
                'id' => 72,
                'key' => 'main_page_section_7_process_1_icon',
                'type' => '3',
                'value' => '{"az": "main_page_section_7_process_1_icon", "en": "main_page_section_7_process_1_icon", "ru": "main_page_section_7_process_1_icon"}',
                'created_at' => '2023-08-23 09:06:03',
                'updated_at' => '2023-08-23 09:06:03',
            ),
            68 => 
            array (
                'id' => 73,
                'key' => 'main_page_section_7_process_1_title',
                'type' => '1',
                'value' => '{"az": "Consultation", "en": "Consultation", "ru": "Consultation"}',
                'created_at' => '2023-08-23 09:06:03',
                'updated_at' => '2023-08-23 09:12:33',
            ),
            69 => 
            array (
                'id' => 74,
                'key' => 'main_page_section_7_process_1_description',
                'type' => '2',
                'value' => '{"az": "Portitor aptent sociosqu per etiam inceptos posuere lobortis", "en": "Portitor aptent sociosqu per etiam inceptos posuere lobortis", "ru": "Portitor aptent sociosqu per etiam inceptos posuere lobortis"}',
                'created_at' => '2023-08-23 09:06:03',
                'updated_at' => '2023-08-23 09:12:41',
            ),
            70 => 
            array (
                'id' => 75,
                'key' => 'main_page_section_7_process_2_icon',
                'type' => '3',
                'value' => '{"az": "main_page_section_7_process_2_icon", "en": "main_page_section_7_process_2_icon", "ru": "main_page_section_7_process_2_icon"}',
                'created_at' => '2023-08-23 09:06:03',
                'updated_at' => '2023-08-23 09:06:03',
            ),
            71 => 
            array (
                'id' => 76,
                'key' => 'main_page_section_7_process_2_title',
                'type' => '1',
                'value' => '{"az": "Detailed Proposal", "en": "Detailed Proposal", "ru": "Detailed Proposal"}',
                'created_at' => '2023-08-23 09:06:03',
                'updated_at' => '2023-08-23 09:13:05',
            ),
            72 => 
            array (
                'id' => 77,
                'key' => 'main_page_section_7_process_2_description',
                'type' => '2',
                'value' => '{"az": "Portitor aptent sociosqu per etiam inceptos posuere lobortis", "en": "Portitor aptent sociosqu per etiam inceptos posuere lobortis", "ru": "Portitor aptent sociosqu per etiam inceptos posuere lobortis"}',
                'created_at' => '2023-08-23 09:06:03',
                'updated_at' => '2023-08-23 09:12:45',
            ),
            73 => 
            array (
                'id' => 78,
                'key' => 'main_page_section_7_process_3_icon',
                'type' => '3',
                'value' => '{"az": "main_page_section_7_process_3_icon", "en": "main_page_section_7_process_3_icon", "ru": "main_page_section_7_process_3_icon"}',
                'created_at' => '2023-08-23 09:06:03',
                'updated_at' => '2023-08-23 09:06:03',
            ),
            74 => 
            array (
                'id' => 79,
                'key' => 'main_page_section_7_process_3_title',
                'type' => '1',
                'value' => '{"az": "Project Installation", "en": "Project Installation", "ru": "Project Installation"}',
                'created_at' => '2023-08-23 09:06:03',
                'updated_at' => '2023-08-23 09:15:41',
            ),
            75 => 
            array (
                'id' => 80,
                'key' => 'main_page_section_7_process_3_description',
                'type' => '2',
                'value' => '{"az": "Portitor aptent sociosqu per etiam inceptos posuere lobortis", "en": "Portitor aptent sociosqu per etiam inceptos posuere lobortis", "ru": "Portitor aptent sociosqu per etiam inceptos posuere lobortis"}',
                'created_at' => '2023-08-23 09:06:03',
                'updated_at' => '2023-08-23 09:12:50',
            ),
            76 => 
            array (
                'id' => 81,
                'key' => 'main_page_section_7_process_4_icon',
                'type' => '3',
                'value' => '{"az": "main_page_section_7_process_4_icon", "en": "main_page_section_7_process_4_icon", "ru": "main_page_section_7_process_4_icon"}',
                'created_at' => '2023-08-23 09:06:03',
                'updated_at' => '2023-08-23 09:06:03',
            ),
            77 => 
            array (
                'id' => 82,
                'key' => 'main_page_section_7_process_4_title',
                'type' => '1',
                'value' => '{"az": "Final Inspection", "en": "Final Inspection", "ru": "Final Inspection"}',
                'created_at' => '2023-08-23 09:06:03',
                'updated_at' => '2023-08-23 09:15:49',
            ),
            78 => 
            array (
                'id' => 83,
                'key' => 'main_page_section_7_process_4_description',
                'type' => '2',
                'value' => '{"az": "Portitor aptent sociosqu per etiam inceptos posuere lobortis", "en": "Portitor aptent sociosqu per etiam inceptos posuere lobortis", "ru": "Portitor aptent sociosqu per etiam inceptos posuere lobortis"}',
                'created_at' => '2023-08-23 09:06:03',
                'updated_at' => '2023-08-23 09:12:54',
            ),
            79 => 
            array (
                'id' => 84,
                'key' => 'main_page_section_8_bg_title',
                'type' => '1',
                'value' => '{"az": "Meet Leaders", "en": "Meet Leaders", "ru": "Meet Leaders"}',
                'created_at' => '2023-08-23 09:06:18',
                'updated_at' => '2023-08-23 09:17:32',
            ),
            80 => 
            array (
                'id' => 85,
                'key' => 'main_page_section_8_sub_title',
                'type' => '1',
                'value' => '{"az": "Experts Members", "en": "Experts Members", "ru": "Experts Members"}',
                'created_at' => '2023-08-23 09:06:18',
                'updated_at' => '2023-08-23 09:17:39',
            ),
            81 => 
            array (
                'id' => 86,
                'key' => 'main_page_section_8_title',
                'type' => '1',
                'value' => '{"az": "Meet the leaders of our <br> dynamic company", "en": "Meet the leaders of our <br> dynamic company", "ru": "Meet the leaders of our <br> dynamic company"}',
                'created_at' => '2023-08-23 09:06:18',
                'updated_at' => '2023-08-23 09:17:46',
            ),
            82 => 
            array (
                'id' => 87,
                'key' => 'view_service',
                'type' => '1',
                'value' => '{"az": "View Service", "en": "View Service", "ru": "View Service"}',
                'created_at' => '2023-08-23 14:29:21',
                'updated_at' => '2023-08-23 14:29:33',
            ),
            83 => 
            array (
                'id' => 88,
                'key' => 'read_details',
                'type' => '1',
                'value' => '{"az": "Read Details", "en": "Read Details", "ru": "Read Details"}',
                'created_at' => '2023-08-23 14:36:35',
                'updated_at' => '2023-08-23 14:36:51',
            ),
            84 => 
            array (
                'id' => 89,
                'key' => 'related_products',
                'type' => '1',
                'value' => '{"az": "Related products", "en": "Related products", "ru": "Related products"}',
                'created_at' => '2023-08-23 15:21:59',
                'updated_at' => '2023-08-23 15:22:08',
            ),
            85 => 
            array (
                'id' => 90,
                'key' => 'about_page_section_1_content',
                'type' => '4',
            'value' => '{"az": "<p class=\\"disc\\" style=\\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-size: 16px; line-height: var(--line-height-b2); color: rgb(110, 119, 125); font-family: Archivo, sans-serif;\\">Uniquely repurpose client-centered imperatives without distinctive products<br>leverage existing fully researched.</p><div class=\\"list-wrapper\\" style=\\"display: flex; align-items: center; margin-bottom: 30px; color: rgb(110, 119, 125); font-family: Archivo, sans-serif; font-size: 16px;\\"><div class=\\"single\\" style=\\"margin-right: 30px;\\"><ul style=\\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 20px; list-style: square; border: none;\\"><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Great Quality Service</li><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Professional Work Skills</li></ul></div><div class=\\"single\\" style=\\"margin-right: 30px;\\"><ul style=\\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 20px; list-style: square; border: none;\\"><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Great Quality Service</li><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Professional Work Skills</li></ul></div></div>", "en": "<p class=\\"disc\\" style=\\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-size: 16px; line-height: var(--line-height-b2); color: rgb(110, 119, 125); font-family: Archivo, sans-serif;\\">Uniquely repurpose client-centered imperatives without distinctive products<br>leverage existing fully researched.</p><div class=\\"list-wrapper\\" style=\\"display: flex; align-items: center; margin-bottom: 30px; color: rgb(110, 119, 125); font-family: Archivo, sans-serif; font-size: 16px;\\"><div class=\\"single\\" style=\\"margin-right: 30px;\\"><ul style=\\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 20px; list-style: square; border: none;\\"><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Great Quality Service</li><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Professional Work Skills</li></ul></div><div class=\\"single\\" style=\\"margin-right: 30px;\\"><ul style=\\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 20px; list-style: square; border: none;\\"><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Great Quality Service</li><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Professional Work Skills</li></ul></div></div>", "ru": "<p class=\\"disc\\" style=\\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; font-size: 16px; line-height: var(--line-height-b2); color: rgb(110, 119, 125); font-family: Archivo, sans-serif;\\">Uniquely repurpose client-centered imperatives without distinctive products<br>leverage existing fully researched.</p><div class=\\"list-wrapper\\" style=\\"display: flex; align-items: center; margin-bottom: 30px; color: rgb(110, 119, 125); font-family: Archivo, sans-serif; font-size: 16px;\\"><div class=\\"single\\" style=\\"margin-right: 30px;\\"><ul style=\\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 20px; list-style: square; border: none;\\"><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Great Quality Service</li><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Professional Work Skills</li></ul></div><div class=\\"single\\" style=\\"margin-right: 30px;\\"><ul style=\\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 20px; list-style: square; border: none;\\"><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Great Quality Service</li><li style=\\"font-size: var(--font-size-b1); line-height: var(--line-height-b1); margin-top: 5px; margin-bottom: 10px; color: var(--color-body); padding: 0px; margin-right: 20px;\\">Professional Work Skills</li></ul></div></div>"}',
                'created_at' => '2023-08-23 16:05:22',
                'updated_at' => '2023-08-23 16:05:31',
            ),
            86 => 
            array (
                'id' => 91,
                'key' => 'about_page_section_1_sub_title',
                'type' => '1',
                'value' => '{"az": "RENOVATİON COMPANY", "en": "RENOVATİON COMPANY", "ru": "RENOVATİON COMPANY"}',
                'created_at' => '2023-08-23 16:06:14',
                'updated_at' => '2023-08-23 16:06:24',
            ),
            87 => 
            array (
                'id' => 92,
                'key' => 'about_page_section_1_title',
                'type' => '1',
                'value' => '{"az": "Our thoughts for developing <br> your stylish life Level.", "en": "Our thoughts for developing <br> your stylish life Level.", "ru": "Our thoughts for developing <br> your stylish life Level."}',
                'created_at' => '2023-08-23 16:06:14',
                'updated_at' => '2023-08-23 16:06:37',
            ),
            88 => 
            array (
                'id' => 93,
                'key' => 'about_page_section_1_image_1',
                'type' => '3',
                'value' => '{"az": "about_page_section_1_image_1", "en": "about_page_section_1_image_1", "ru": "about_page_section_1_image_1"}',
                'created_at' => '2023-08-23 16:07:11',
                'updated_at' => '2023-08-23 16:07:11',
            ),
            89 => 
            array (
                'id' => 94,
                'key' => 'about_page_section_1_image_2',
                'type' => '3',
                'value' => '{"az": "about_page_section_1_image_2", "en": "about_page_section_1_image_2", "ru": "about_page_section_1_image_2"}',
                'created_at' => '2023-08-23 16:07:11',
                'updated_at' => '2023-08-23 16:07:11',
            ),
            90 => 
            array (
                'id' => 95,
                'key' => 'about_page_section_1_bg_title',
                'type' => '1',
                'value' => '{"az": "About Company", "en": "About Company", "ru": "About Company"}',
                'created_at' => '2023-08-23 16:08:19',
                'updated_at' => '2023-08-23 16:08:37',
            ),
            91 => 
            array (
                'id' => 96,
                'key' => 'about_page_section_2_sub_title',
                'type' => '1',
                'value' => '{"az": "CORE FEATURES", "en": "CORE FEATURES", "ru": "CORE FEATURES"}',
                'created_at' => '2023-08-23 16:09:57',
                'updated_at' => '2023-08-23 16:10:11',
            ),
            92 => 
            array (
                'id' => 97,
                'key' => 'about_page_section_2_title',
                'type' => '1',
                'value' => '{"az": "Why Choose Us", "en": "Why Choose Us", "ru": "Why Choose Us"}',
                'created_at' => '2023-08-23 16:09:57',
                'updated_at' => '2023-08-23 16:10:18',
            ),
            93 => 
            array (
                'id' => 98,
                'key' => 'about_page_section_2_image',
                'type' => '3',
                'value' => '{"az": "about_page_section_2_image", "en": "about_page_section_2_image", "ru": "about_page_section_2_image"}',
                'created_at' => '2023-08-23 16:09:57',
                'updated_at' => '2023-08-23 16:09:57',
            ),
            94 => 
            array (
                'id' => 99,
                'key' => 'about_page_section_3_sub_title',
                'type' => '1',
                'value' => '{"az": "Our Services", "en": "Our Services", "ru": "Our Services"}',
                'created_at' => '2023-08-23 16:11:18',
                'updated_at' => '2023-08-23 16:11:29',
            ),
            95 => 
            array (
                'id' => 100,
                'key' => 'about_page_section_3_title',
                'type' => '1',
                'value' => '{"az": "What We Offer", "en": "What We Offer", "ru": "What We Offer"}',
                'created_at' => '2023-08-23 16:11:18',
                'updated_at' => '2023-08-23 16:11:35',
            ),
            96 => 
            array (
                'id' => 101,
                'key' => 'about_page_section_2_video_id',
                'type' => '1',
                'value' => '{"az": "CSYTjZ4U8OI", "en": "CSYTjZ4U8OI", "ru": "CSYTjZ4U8OI"}',
                'created_at' => '2023-08-23 16:13:33',
                'updated_at' => '2023-08-23 16:16:04',
            ),
            97 => 
            array (
                'id' => 102,
                'key' => 'contact_page_section_box_image_1',
                'type' => '3',
                'value' => '{"az": "contact_page_section_box_image_1", "en": "contact_page_section_box_image_1", "ru": "contact_page_section_box_image_1"}',
                'created_at' => '2023-08-23 16:20:15',
                'updated_at' => '2023-08-23 16:20:15',
            ),
            98 => 
            array (
                'id' => 103,
                'key' => 'contact_page_section_box_image_2',
                'type' => '3',
                'value' => '{"az": "contact_page_section_box_image_2", "en": "contact_page_section_box_image_2", "ru": "contact_page_section_box_image_2"}',
                'created_at' => '2023-08-23 16:20:15',
                'updated_at' => '2023-08-23 16:20:15',
            ),
            99 => 
            array (
                'id' => 104,
                'key' => 'contact_page_section_box_image_3',
                'type' => '3',
                'value' => '{"az": "contact_page_section_box_image_3", "en": "contact_page_section_box_image_3", "ru": "contact_page_section_box_image_3"}',
                'created_at' => '2023-08-23 16:20:15',
                'updated_at' => '2023-08-23 16:20:15',
            ),
            100 => 
            array (
                'id' => 105,
                'key' => 'contact_page_section_box_icon_1',
                'type' => '3',
                'value' => '{"az": "contact_page_section_box_icon_1", "en": "contact_page_section_box_icon_1", "ru": "contact_page_section_box_icon_1"}',
                'created_at' => '2023-08-23 16:20:15',
                'updated_at' => '2023-08-23 16:20:15',
            ),
            101 => 
            array (
                'id' => 106,
                'key' => 'contact_page_section_box_icon_2',
                'type' => '3',
                'value' => '{"az": "contact_page_section_box_icon_2", "en": "contact_page_section_box_icon_2", "ru": "contact_page_section_box_icon_2"}',
                'created_at' => '2023-08-23 16:20:15',
                'updated_at' => '2023-08-23 16:20:15',
            ),
            102 => 
            array (
                'id' => 107,
                'key' => 'contact_page_section_box_icon_3',
                'type' => '3',
                'value' => '{"az": "contact_page_section_box_icon_3", "en": "contact_page_section_box_icon_3", "ru": "contact_page_section_box_icon_3"}',
                'created_at' => '2023-08-23 16:20:15',
                'updated_at' => '2023-08-23 16:20:15',
            ),
            103 => 
            array (
                'id' => 108,
                'key' => 'contact_page_section_box_title_1',
                'type' => '1',
                'value' => '{"az": "CALL US 24/7", "en": "CALL US 24/7", "ru": "CALL US 24/7"}',
                'created_at' => '2023-08-23 16:20:15',
                'updated_at' => '2023-08-23 16:21:20',
            ),
            104 => 
            array (
                'id' => 109,
                'key' => 'contact_page_section_box_title_2',
                'type' => '1',
                'value' => '{"az": "MAKE A QUOTE", "en": "MAKE A QUOTE", "ru": "MAKE A QUOTE"}',
                'created_at' => '2023-08-23 16:20:15',
                'updated_at' => '2023-08-23 16:21:28',
            ),
            105 => 
            array (
                'id' => 110,
                'key' => 'contact_page_section_box_title_3',
                'type' => '1',
                'value' => '{"az": "SERVİCE STATİON", "en": "SERVİCE STATİON", "ru": "SERVİCE STATİON"}',
                'created_at' => '2023-08-23 16:20:15',
                'updated_at' => '2023-08-23 16:21:37',
            ),
            106 => 
            array (
                'id' => 111,
                'key' => 'contact_page_form_sub_title',
                'type' => '1',
                'value' => '{"az": "Get In Touch", "en": "Get In Touch", "ru": "Get In Touch"}',
                'created_at' => '2023-08-23 16:20:15',
                'updated_at' => '2023-08-23 16:21:47',
            ),
            107 => 
            array (
                'id' => 112,
                'key' => 'contact_page_form_title',
                'type' => '1',
                'value' => '{"az": "Needs Help? Let’s Get in Touch", "en": "Needs Help? Let’s Get in Touch", "ru": "Needs Help? Let’s Get in Touch"}',
                'created_at' => '2023-08-23 16:20:15',
                'updated_at' => '2023-08-23 16:21:56',
            ),
            108 => 
            array (
                'id' => 113,
                'key' => 'contact_page_name_label',
                'type' => '1',
                'value' => '{"az": "Your Name", "en": "Your Name", "ru": "Your Name"}',
                'created_at' => '2023-08-23 16:20:15',
                'updated_at' => '2023-08-23 16:22:07',
            ),
            109 => 
            array (
                'id' => 114,
                'key' => 'contact_page_email_label',
                'type' => '1',
                'value' => '{"az": "Email Address", "en": "Email Address", "ru": "Email Address"}',
                'created_at' => '2023-08-23 16:20:15',
                'updated_at' => '2023-08-23 16:22:16',
            ),
            110 => 
            array (
                'id' => 115,
                'key' => 'contact_page_subject_label',
                'type' => '1',
                'value' => '{"az": "Your Subject", "en": "Your Subject", "ru": "Your Subject"}',
                'created_at' => '2023-08-23 16:20:15',
                'updated_at' => '2023-08-23 16:22:26',
            ),
            111 => 
            array (
                'id' => 116,
                'key' => 'contact_page_message_label',
                'type' => '1',
                'value' => '{"az": "Type Your Message", "en": "Type Your Message", "ru": "Type Your Message"}',
                'created_at' => '2023-08-23 16:20:15',
                'updated_at' => '2023-08-23 16:22:38',
            ),
            112 => 
            array (
                'id' => 117,
                'key' => 'contact_page_send_button',
                'type' => '1',
                'value' => '{"az": "SEND MESSAGE", "en": "SEND MESSAGE", "ru": "SEND MESSAGE"}',
                'created_at' => '2023-08-23 16:20:15',
                'updated_at' => '2023-08-23 16:22:50',
            ),
            113 => 
            array (
                'id' => 118,
                'key' => 'form_send_success_message',
                'type' => '1',
                'value' => '{"az": "Success", "en": "Success", "ru": "Success"}',
                'created_at' => '2023-08-23 16:44:10',
                'updated_at' => '2023-08-23 16:44:54',
            ),
            114 => 
            array (
                'id' => 119,
                'key' => 'contact_form_send_to_email',
                'type' => '1',
                'value' => '{"az": "mqalayciyev@mail.ru", "en": "mqalayciyev@mail.ru", "ru": "mqalayciyev@mail.ru"}',
                'created_at' => '2023-08-23 16:44:10',
                'updated_at' => '2023-08-23 16:45:00',
            ),
            115 => 
            array (
                'id' => 120,
                'key' => 'recent_posts',
                'type' => '1',
                'value' => '{"az": "Recent Posts", "en": "Recent Posts", "ru": "Recent Posts"}',
                'created_at' => '2023-08-23 16:47:13',
                'updated_at' => '2023-08-23 16:47:43',
            ),
            116 => 
            array (
                'id' => 121,
                'key' => 'enter_keyword',
                'type' => '1',
                'value' => '{"az": "Enter Keyword", "en": "Enter Keyword", "ru": "Enter Keyword"}',
                'created_at' => '2023-08-23 16:47:13',
                'updated_at' => '2023-08-23 16:47:34',
            ),
            117 => 
            array (
                'id' => 122,
                'key' => 'search_hear',
                'type' => '1',
                'value' => '{"az": "Search Hear", "en": "Search Hear", "ru": "Search Hear"}',
                'created_at' => '2023-08-23 16:47:13',
                'updated_at' => '2023-08-23 16:47:24',
            ),
            118 => 
            array (
                'id' => 123,
                'key' => 'contact_page_banner_image',
                'type' => '3',
                'value' => '{"az": "contact_page_banner_image", "en": "contact_page_banner_image", "ru": "contact_page_banner_image"}',
                'created_at' => '2023-08-24 10:21:00',
                'updated_at' => '2023-08-24 10:21:00',
            ),
            119 => 
            array (
                'id' => 124,
                'key' => 'about_page_banner_image',
                'type' => '3',
                'value' => '{"az": "about_page_banner_image", "en": "about_page_banner_image", "ru": "about_page_banner_image"}',
                'created_at' => '2023-08-24 10:21:00',
                'updated_at' => '2023-08-24 10:21:00',
            ),
            120 => 
            array (
                'id' => 125,
                'key' => 'products_page_banner_image',
                'type' => '3',
                'value' => '{"az": "products_page_banner_image", "en": "products_page_banner_image", "ru": "products_page_banner_image"}',
                'created_at' => '2023-08-24 10:21:00',
                'updated_at' => '2023-08-24 10:21:00',
            ),
            121 => 
            array (
                'id' => 126,
                'key' => 'blogs_page_banner_image',
                'type' => '3',
                'value' => '{"az": "blogs_page_banner_image", "en": "blogs_page_banner_image", "ru": "blogs_page_banner_image"}',
                'created_at' => '2023-08-24 10:21:00',
                'updated_at' => '2023-08-24 10:21:00',
            ),
            122 => 
            array (
                'id' => 127,
                'key' => 'services_page_banner_image',
                'type' => '3',
                'value' => '{"az": "services_page_banner_image", "en": "services_page_banner_image", "ru": "services_page_banner_image"}',
                'created_at' => '2023-08-24 10:21:00',
                'updated_at' => '2023-08-24 10:21:00',
            ),
            123 => 
            array (
                'id' => 128,
                'key' => 'portfolio_page_banner_image',
                'type' => '3',
                'value' => '{"az": "portfolio_page_banner_image", "en": "portfolio_page_banner_image", "ru": "portfolio_page_banner_image"}',
                'created_at' => '2023-08-24 10:21:00',
                'updated_at' => '2023-08-24 10:21:00',
            ),
            124 => 
            array (
                'id' => 129,
                'key' => 'service_detail_page_box_description_1',
                'type' => '2',
                'value' => '{"az": "Maintain wireless scerios after sure quality vectors future", "en": "Maintain wireless scerios after sure quality vectors future", "ru": "Maintain wireless scerios after sure quality vectors future"}',
                'created_at' => '2023-08-24 10:26:21',
                'updated_at' => '2023-08-27 01:27:34',
            ),
            125 => 
            array (
                'id' => 130,
                'key' => 'service_detail_page_box_description_2',
                'type' => '2',
                'value' => '{"az": "Maintain wireless scerios after sure quality vectors future", "en": "Maintain wireless scerios after sure quality vectors future", "ru": "Maintain wireless scerios after sure quality vectors future"}',
                'created_at' => '2023-08-24 10:26:21',
                'updated_at' => '2023-08-24 10:26:54',
            ),
            126 => 
            array (
                'id' => 131,
                'key' => 'service_detail_page_box_description_3',
                'type' => '2',
                'value' => '{"az": "Maintain wireless scerios after sure quality vectors future", "en": "Maintain wireless scerios after sure quality vectors future", "ru": "Maintain wireless scerios after sure quality vectors future"}',
                'created_at' => '2023-08-24 10:26:21',
                'updated_at' => '2023-08-24 10:26:58',
            ),
            127 => 
            array (
                'id' => 132,
                'key' => 'service_detail_page_box_description_4',
                'type' => '2',
                'value' => '{"az": "Maintain wireless scerios after sure quality vectors future", "en": "Maintain wireless scerios after sure quality vectors future", "ru": "Maintain wireless scerios after sure quality vectors future"}',
                'created_at' => '2023-08-24 10:26:21',
                'updated_at' => '2023-08-24 10:27:02',
            ),
            128 => 
            array (
                'id' => 133,
                'key' => 'service_detail_page_box_icon_1',
                'type' => '3',
                'value' => '{"az": "service_detail_page_box_icon_1", "en": "service_detail_page_box_icon_1", "ru": "service_detail_page_box_icon_1"}',
                'created_at' => '2023-08-24 10:26:21',
                'updated_at' => '2023-08-24 10:26:21',
            ),
            129 => 
            array (
                'id' => 134,
                'key' => 'service_detail_page_box_icon_2',
                'type' => '3',
                'value' => '{"az": "service_detail_page_box_icon_2", "en": "service_detail_page_box_icon_2", "ru": "service_detail_page_box_icon_2"}',
                'created_at' => '2023-08-24 10:26:21',
                'updated_at' => '2023-08-24 10:26:21',
            ),
            130 => 
            array (
                'id' => 135,
                'key' => 'service_detail_page_box_icon_3',
                'type' => '3',
                'value' => '{"az": "service_detail_page_box_icon_3", "en": "service_detail_page_box_icon_3", "ru": "service_detail_page_box_icon_3"}',
                'created_at' => '2023-08-24 10:26:21',
                'updated_at' => '2023-08-24 10:26:21',
            ),
            131 => 
            array (
                'id' => 136,
                'key' => 'service_detail_page_box_icon_4',
                'type' => '3',
                'value' => '{"az": "service_detail_page_box_icon_4", "en": "service_detail_page_box_icon_4", "ru": "service_detail_page_box_icon_4"}',
                'created_at' => '2023-08-24 10:26:21',
                'updated_at' => '2023-08-24 10:26:21',
            ),
            132 => 
            array (
                'id' => 137,
                'key' => 'service_detail_page_box_title_1',
                'type' => '1',
                'value' => '{"az": "Instant Business Growth", "en": "Instant Business Growth", "ru": "Instant Business Growth"}',
                'created_at' => '2023-08-24 10:26:21',
                'updated_at' => '2023-08-24 10:27:10',
            ),
            133 => 
            array (
                'id' => 138,
                'key' => 'service_detail_page_box_title_2',
                'type' => '1',
                'value' => '{"az": "24/7 Quality Service", "en": "24/7 Quality Service", "ru": "24/7 Quality Service"}',
                'created_at' => '2023-08-24 10:26:21',
                'updated_at' => '2023-08-24 10:27:17',
            ),
            134 => 
            array (
                'id' => 139,
                'key' => 'service_detail_page_box_title_3',
                'type' => '1',
                'value' => '{"az": "Easy Customer Service", "en": "Easy Customer Service", "ru": "Easy Customer Service"}',
                'created_at' => '2023-08-24 10:26:21',
                'updated_at' => '2023-08-24 10:27:26',
            ),
            135 => 
            array (
                'id' => 140,
                'key' => 'service_detail_page_box_title_4',
                'type' => '1',
                'value' => '{"az": "Quality Cost Service", "en": "Quality Cost Service", "ru": "Quality Cost Service"}',
                'created_at' => '2023-08-24 10:26:21',
                'updated_at' => '2023-08-24 10:27:33',
            ),
        ));
        
        
    }
}