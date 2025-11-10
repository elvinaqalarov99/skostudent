<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if (Admin::count() == 0) {
            $this->call(AdminTableSeeder::class);
        }

        $this->call(BlogsTableSeeder::class);
        $this->call(FaqsTableSeeder::class);
        $this->call(FeaturesTableSeeder::class);
        $this->call(PortfolioTypesTableSeeder::class);
        $this->call(PortfoliosTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(TeamsTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(MediaTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
    }
}
