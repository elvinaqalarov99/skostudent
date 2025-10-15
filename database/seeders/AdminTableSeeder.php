<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Admin();
        $admin->name = 'Mehemmed Qalayciyev';
        $admin->email = 'qalayciyev@gmail.com';
        $admin->password = Hash::make('password');
        $admin->save();
    }
}
