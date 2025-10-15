<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PortfoliosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('portfolios')->delete();

        \DB::table('portfolios')->insert(array (
            0 =>
            array (
                'id' => 1,
                'portfolio_type_id' => 1,
                'title' => '{"az": "AAAF Building", "en": "AAAF Building", "ru": "AAAF Building"}',
                'content' => '{"az": "<p>Netus platea nec commodo tincidunt felis orci iaculis facilisi. Molestie etiam magnis rutrum penatibus eros non accumsan erat nulla, convallis rhoncus natoque lacinia class viverra</p><p>platea cubilia, netus luctus tristique quam habitasse taciti nullam fringilla nostra netus class felis magnis sed consequat orci, inceptos potenti ullamcorper integer placerat mattis</p><p>pellentesque tempor, metus blandit ridiculus feugiat pulvinar quisque praesent. Dictum mollis vel iaculis eleifend orci vitae blandit ultrices hac, fringilla sed a faucibus pandemic e-</p><p>business rather than state of the art e-tailers ompletely unleash frictionless data via services.</p>", "en": "<p>Netus platea nec commodo tincidunt felis orci iaculis facilisi. Molestie etiam magnis rutrum penatibus eros non accumsan erat nulla, convallis rhoncus natoque lacinia class viverra</p><p>platea cubilia, netus luctus tristique quam habitasse taciti nullam fringilla nostra netus class felis magnis sed consequat orci, inceptos potenti ullamcorper integer placerat mattis</p><p>pellentesque tempor, metus blandit ridiculus feugiat pulvinar quisque praesent. Dictum mollis vel iaculis eleifend orci vitae blandit ultrices hac, fringilla sed a faucibus pandemic e-</p><p>business rather than state of the art e-tailers ompletely unleash frictionless data via services.</p>", "ru": "<p>Netus platea nec commodo tincidunt felis orci iaculis facilisi. Molestie etiam magnis rutrum penatibus eros non accumsan erat nulla, convallis rhoncus natoque lacinia class viverra</p><p>platea cubilia, netus luctus tristique quam habitasse taciti nullam fringilla nostra netus class felis magnis sed consequat orci, inceptos potenti ullamcorper integer placerat mattis</p><p>pellentesque tempor, metus blandit ridiculus feugiat pulvinar quisque praesent. Dictum mollis vel iaculis eleifend orci vitae blandit ultrices hac, fringilla sed a faucibus pandemic e-</p><p>business rather than state of the art e-tailers ompletely unleash frictionless data via services.</p>"}',
                'slug' => 'aaaf-building',
                'created_at' => '2023-08-23 12:45:45',
                'updated_at' => '2023-08-27 01:03:49',
            ),
            1 =>
            array (
                'id' => 2,
                'portfolio_type_id' => 2,
                'title' => '{"az": "Gəncə Mall", "en": "Gəncə Mall", "ru": "Gəncə Mall"}',
                'content' => '{"az": "<p>Netus platea nec commodo tincidunt felis orci iaculis facilisi. Molestie etiam magnis rutrum penatibus eros non accumsan erat nulla, convallis rhoncus natoque lacinia class viverra</p><p>platea cubilia, netus luctus tristique quam habitasse taciti nullam fringilla nostra netus class felis magnis sed consequat orci, inceptos potenti ullamcorper integer placerat mattis</p><p>pellentesque tempor, metus blandit ridiculus feugiat pulvinar quisque praesent. Dictum mollis vel iaculis eleifend orci vitae blandit ultrices hac, fringilla sed a faucibus pandemic e-</p><p>business rather than state of the art e-tailers ompletely unleash frictionless data via services.</p><p>“Tortor nunc dictumst sapien inceptos libero natoque maecenas metus viverra commodo dignissim magna, donec odio leo varius nullam potenti porta<br></p>", "en": "<p>Netus platea nec commodo tincidunt felis orci iaculis facilisi. Molestie etiam magnis rutrum penatibus eros non accumsan erat nulla, convallis rhoncus natoque lacinia class viverra</p><p>platea cubilia, netus luctus tristique quam habitasse taciti nullam fringilla nostra netus class felis magnis sed consequat orci, inceptos potenti ullamcorper integer placerat mattis</p><p>pellentesque tempor, metus blandit ridiculus feugiat pulvinar quisque praesent. Dictum mollis vel iaculis eleifend orci vitae blandit ultrices hac, fringilla sed a faucibus pandemic e-</p><p>business rather than state of the art e-tailers ompletely unleash frictionless data via services.</p><p>“Tortor nunc dictumst sapien inceptos libero natoque maecenas metus viverra commodo dignissim magna, donec odio leo varius nullam potenti porta<br></p>", "ru": "<p>Netus platea nec commodo tincidunt felis orci iaculis facilisi. Molestie etiam magnis rutrum penatibus eros non accumsan erat nulla, convallis rhoncus natoque lacinia class viverra</p><p>platea cubilia, netus luctus tristique quam habitasse taciti nullam fringilla nostra netus class felis magnis sed consequat orci, inceptos potenti ullamcorper integer placerat mattis</p><p>pellentesque tempor, metus blandit ridiculus feugiat pulvinar quisque praesent. Dictum mollis vel iaculis eleifend orci vitae blandit ultrices hac, fringilla sed a faucibus pandemic e-</p><p>business rather than state of the art e-tailers ompletely unleash frictionless data via services.</p><p>“Tortor nunc dictumst sapien inceptos libero natoque maecenas metus viverra commodo dignissim magna, donec odio leo varius nullam potenti porta<br></p>"}',
                'slug' => 'gence-mall',
                'created_at' => '2023-08-23 12:46:19',
                'updated_at' => '2023-08-27 01:42:10',
            ),
        ));


    }
}
