<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FaqsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('faqs')->delete();
        
        \DB::table('faqs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => '{"az": "How much does a home remodeling cost?", "en": "How much does a home remodeling cost?", "ru": "How much does a home remodeling cost?"}',
                'content' => '{"az": "Projects vary widely depending on your needs and budget. Our representatives visit with\\r\\nyou to better understand your home remodeling needs. At construktion Home\\r\\nImprovements we do more than give you a quote. We provide you with the information you\\r\\nneed to make the right decisions for your home. Our representatives take time to explain the\\r\\ndetails regarding your project.", "en": "Projects vary widely depending on your needs and budget. Our representatives visit with\\r\\nyou to better understand your home remodeling needs. At construktion Home\\r\\nImprovements we do more than give you a quote. We provide you with the information you\\r\\nneed to make the right decisions for your home. Our representatives take time to explain the\\r\\ndetails regarding your project.", "ru": "Projects vary widely depending on your needs and budget. Our representatives visit with\\r\\nyou to better understand your home remodeling needs. At construktion Home\\r\\nImprovements we do more than give you a quote. We provide you with the information you\\r\\nneed to make the right decisions for your home. Our representatives take time to explain the\\r\\ndetails regarding your project."}',
                'created_at' => '2023-08-23 11:56:45',
                'updated_at' => '2023-08-27 00:54:26',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => '{"az": "How much does a home Lift cost?", "en": "How much does a home Lift cost?", "ru": "How much does a home Lift cost?"}',
                'content' => '{"az": "Projects vary widely depending on your needs and budget. Our representatives visit with\\r\\nyou to better understand your home remodeling needs. At construktion Home\\r\\nImprovements we do more than give you a quote. We provide you with the information you\\r\\nneed to make the right decisions for your home. Our representatives take time to explain the\\r\\ndetails regarding your project.", "en": "Projects vary widely depending on your needs and budget. Our representatives visit with\\r\\nyou to better understand your home remodeling needs. At construktion Home\\r\\nImprovements we do more than give you a quote. We provide you with the information you\\r\\nneed to make the right decisions for your home. Our representatives take time to explain the\\r\\ndetails regarding your project.", "ru": "Projects vary widely depending on your needs and budget. Our representatives visit with\\r\\nyou to better understand your home remodeling needs. At construktion Home\\r\\nImprovements we do more than give you a quote. We provide you with the information you\\r\\nneed to make the right decisions for your home. Our representatives take time to explain the\\r\\ndetails regarding your project."}',
                'created_at' => '2023-08-23 11:56:58',
                'updated_at' => '2023-08-27 00:54:31',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => '{"az": "What is included with a free remodeling estimate?", "en": "What is included with a free remodeling estimate?", "ru": "What is included with a free remodeling estimate?"}',
                'content' => '{"az": "Projects vary widely depending on your needs and budget. Our representatives visit with\\nyou to better understand your home remodeling needs. At construktion Home\\nImprovements we do more than give you a quote. We provide you with the information you\\nneed to make the right decisions for your home. Our representatives take time to explain the\\ndetails regarding your project.", "en": "Projects vary widely depending on your needs and budget. Our representatives visit with\\nyou to better understand your home remodeling needs. At construktion Home\\nImprovements we do more than give you a quote. We provide you with the information you\\nneed to make the right decisions for your home. Our representatives take time to explain the\\ndetails regarding your project.", "ru": "Projects vary widely depending on your needs and budget. Our representatives visit with\\nyou to better understand your home remodeling needs. At construktion Home\\nImprovements we do more than give you a quote. We provide you with the information you\\nneed to make the right decisions for your home. Our representatives take time to explain the\\ndetails regarding your project."}',
                'created_at' => '2023-08-23 11:57:12',
                'updated_at' => '2023-08-23 11:57:12',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => '{"az": "Why do roofing estimates vary so widely?", "en": "Why do roofing estimates vary so widely?", "ru": "Why do roofing estimates vary so widely?"}',
                'content' => '{"az": "Projects vary widely depending on your needs and budget. Our representatives visit with\\nyou to better understand your home remodeling needs. At construktion Home\\nImprovements we do more than give you a quote. We provide you with the information you\\nneed to make the right decisions for your home. Our representatives take time to explain the\\ndetails regarding your project.", "en": "Projects vary widely depending on your needs and budget. Our representatives visit with\\nyou to better understand your home remodeling needs. At construktion Home\\nImprovements we do more than give you a quote. We provide you with the information you\\nneed to make the right decisions for your home. Our representatives take time to explain the\\ndetails regarding your project.", "ru": "Projects vary widely depending on your needs and budget. Our representatives visit with\\nyou to better understand your home remodeling needs. At construktion Home\\nImprovements we do more than give you a quote. We provide you with the information you\\nneed to make the right decisions for your home. Our representatives take time to explain the\\ndetails regarding your project."}',
                'created_at' => '2023-08-23 11:57:25',
                'updated_at' => '2023-08-23 11:57:25',
            ),
        ));
        
        
    }
}