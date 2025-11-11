<?php

use App\Models\Setting;

return [
    // Example
//    'example-file' => Setting::TYPES['file'],
//    'example-string' => Setting::TYPES['string'],
//    'example-text' => Setting::TYPES['text'],

    'favicon' => Setting::TYPES['file'],
    'logo' => Setting::TYPES['file'],
    'site_name' => Setting::TYPES['string'],
    'logo_dark' => Setting::TYPES['file'],
    'page_name_home' => Setting::TYPES['string'],
    'page_name_products' => Setting::TYPES['string'],
    'page_name_services' => Setting::TYPES['string'],
    'page_name_partners' => Setting::TYPES['string'],
    'page_name_portfolio' => Setting::TYPES['string'],
    'page_name_blog' => Setting::TYPES['string'],
    'page_name_contact' => Setting::TYPES['string'],
    'page_name_about' => Setting::TYPES['string'],
    'facebook_url' => Setting::TYPES['string'],
    'instagram_url' => Setting::TYPES['string'],
    'twitter_url' => Setting::TYPES['string'],
    'youtube_url' => Setting::TYPES['string'],
    'linkedin_url' => Setting::TYPES['string'],
    'footer_description' => Setting::TYPES['text'],
    'address_label' => Setting::TYPES['string'],
    'say_hello_label' => Setting::TYPES['string'],
    'address' => Setting::TYPES['string'],
    'email' => Setting::TYPES['string'],
    'phone' => Setting::TYPES['string'],
    'view_service' => Setting::TYPES['string'],
    'read_details' => Setting::TYPES['string'],
    'related_products' => Setting::TYPES['string'],
    'main_page_banner_description' => Setting::TYPES['string'],
    'main_page_banner_title' => Setting::TYPES['string'],
    'main_page_banner_dynamic_words' => Setting::TYPES['string'],
    'main_page_banner_image' => Setting::TYPES['file'],

    'main_page_section_1_bg_title' => Setting::TYPES['string'],
    'main_page_section_1_sub_title' => Setting::TYPES['string'],
    'main_page_section_1_title' => Setting::TYPES['string'],
    'main_page_section_1_tab_1_name' => Setting::TYPES['string'],
    'main_page_section_1_tab_2_name' => Setting::TYPES['string'],
    'main_page_section_1_tab_3_name' => Setting::TYPES['string'],
    'main_page_section_1_tab_1_content' => Setting::TYPES['editor'],
    'main_page_section_1_tab_2_content' => Setting::TYPES['editor'],
    'main_page_section_1_image_1' => Setting::TYPES['file'],
    'main_page_section_1_image_2' => Setting::TYPES['file'],

    'main_page_section_2_title' => Setting::TYPES['string'],
    'main_page_section_2_description' => Setting::TYPES['text'],
    'main_page_section_2_number' => Setting::TYPES['string'],
    'main_page_section_2_number_sub_title' => Setting::TYPES['string'],

    'main_page_section_3_bg_title' => Setting::TYPES['string'],
    'main_page_section_3_sub_title' => Setting::TYPES['string'],
    'main_page_section_3_title' => Setting::TYPES['string'],

    'learn_more' => Setting::TYPES['string'],

    'main_page_section_4_image' => Setting::TYPES['file'],
    'main_page_section_4_sub_title' => Setting::TYPES['string'],
    'main_page_section_4_title' => Setting::TYPES['string'],

    'main_page_section_5_bg_title' => Setting::TYPES['string'],
    'main_page_section_5_sub_title' => Setting::TYPES['string'],
    'main_page_section_5_title' => Setting::TYPES['string'],

    'main_page_section_6_counter_1_icon' => Setting::TYPES['file'],
    'main_page_section_6_counter_1_number' => Setting::TYPES['string'],
    'main_page_section_6_counter_1_description' => Setting::TYPES['text'],
    'main_page_section_6_counter_2_icon' => Setting::TYPES['file'],
    'main_page_section_6_counter_2_number' => Setting::TYPES['string'],
    'main_page_section_6_counter_2_description' => Setting::TYPES['text'],
    'main_page_section_6_counter_3_icon' => Setting::TYPES['file'],
    'main_page_section_6_counter_3_number' => Setting::TYPES['string'],
    'main_page_section_6_counter_3_description' => Setting::TYPES['text'],
    'main_page_section_6_counter_4_icon' => Setting::TYPES['file'],
    'main_page_section_6_counter_4_number' => Setting::TYPES['string'],
    'main_page_section_6_counter_4_description' => Setting::TYPES['text'],
    'main_page_section_6_sub_title' => Setting::TYPES['string'],
    'main_page_section_6_title' => Setting::TYPES['string'],

    'main_page_section_7_bg_title' => Setting::TYPES['string'],
    'main_page_section_7_sub_title' => Setting::TYPES['string'],
    'main_page_section_7_title' => Setting::TYPES['string'],

    'main_page_section_7_process_1_icon' => Setting::TYPES['file'],
    'main_page_section_7_process_1_title' => Setting::TYPES['string'],
    'main_page_section_7_process_1_description' => Setting::TYPES['text'],

    'main_page_section_7_process_2_icon' => Setting::TYPES['file'],
    'main_page_section_7_process_2_title' => Setting::TYPES['string'],
    'main_page_section_7_process_2_description' => Setting::TYPES['text'],

    'main_page_section_7_process_3_icon' => Setting::TYPES['file'],
    'main_page_section_7_process_3_title' => Setting::TYPES['string'],
    'main_page_section_7_process_3_description' => Setting::TYPES['text'],

    'main_page_section_7_process_4_icon' => Setting::TYPES['file'],
    'main_page_section_7_process_4_title' => Setting::TYPES['string'],
    'main_page_section_7_process_4_description' => Setting::TYPES['text'],

    'main_page_section_8_bg_title' => Setting::TYPES['string'],
    'main_page_section_8_sub_title' => Setting::TYPES['string'],
    'main_page_section_8_title' => Setting::TYPES['string'],

    'about_page_section_1_image_1' => Setting::TYPES['file'],
    'about_page_section_1_image_2' => Setting::TYPES['file'],
    'about_page_section_1_bg_title' => Setting::TYPES['string'],
    'about_page_section_1_sub_title' => Setting::TYPES['string'],
    'about_page_section_1_title' => Setting::TYPES['string'],
    'about_page_section_1_content' => Setting::TYPES['editor'],

    'about_page_section_2_sub_title' => Setting::TYPES['string'],
    'about_page_section_2_title' => Setting::TYPES['string'],
    'about_page_section_2_image' => Setting::TYPES['file'],
    'about_page_section_2_video_id' => Setting::TYPES['string'],

    'about_page_section_3_sub_title' => Setting::TYPES['string'],
    'about_page_section_3_title' => Setting::TYPES['string'],

    'contact_page_section_box_image_1' => Setting::TYPES['file'],
    'contact_page_section_box_image_2' => Setting::TYPES['file'],
    'contact_page_section_box_image_3' => Setting::TYPES['file'],

    'contact_page_section_box_icon_1' => Setting::TYPES['file'],
    'contact_page_section_box_icon_2' => Setting::TYPES['file'],
    'contact_page_section_box_icon_3' => Setting::TYPES['file'],

    'contact_page_section_box_title_1' => Setting::TYPES['string'],
    'contact_page_section_box_title_2' => Setting::TYPES['string'],
    'contact_page_section_box_title_3' => Setting::TYPES['string'],

    'contact_page_form_sub_title' => Setting::TYPES['string'],
    'contact_page_form_title' => Setting::TYPES['string'],

    'contact_page_name_label' => Setting::TYPES['string'],
    'contact_page_email_label' => Setting::TYPES['string'],
    'contact_page_subject_label' => Setting::TYPES['string'],
    'contact_page_message_label' => Setting::TYPES['string'],
    'contact_page_send_button' => Setting::TYPES['string'],
    'form_send_success_message' => Setting::TYPES['string'],
    'contact_form_send_to_email' => Setting::TYPES['string'],
    'recent_posts' => Setting::TYPES['string'],
    'enter_keyword' => Setting::TYPES['string'],
    'search_hear' => Setting::TYPES['string'],

    'contact_page_banner_image' => Setting::TYPES['file'],
    'about_page_banner_image' => Setting::TYPES['file'],
    'products_page_banner_image' => Setting::TYPES['file'],
    'blogs_page_banner_image' => Setting::TYPES['file'],
    'services_page_banner_image' => Setting::TYPES['file'],
    'portfolio_page_banner_image' => Setting::TYPES['file'],

    'service_detail_page_box_description_1' => Setting::TYPES['text'],
    'service_detail_page_box_description_2' => Setting::TYPES['text'],
    'service_detail_page_box_description_3' => Setting::TYPES['text'],
    'service_detail_page_box_description_4' => Setting::TYPES['text'],

    'service_detail_page_box_icon_1' => Setting::TYPES['file'],
    'service_detail_page_box_icon_2' => Setting::TYPES['file'],
    'service_detail_page_box_icon_3' => Setting::TYPES['file'],
    'service_detail_page_box_icon_4' => Setting::TYPES['file'],

    'service_detail_page_box_title_1' => Setting::TYPES['string'],
    'service_detail_page_box_title_2' => Setting::TYPES['string'],
    'service_detail_page_box_title_3' => Setting::TYPES['string'],
    'service_detail_page_box_title_4' => Setting::TYPES['string'],

];
