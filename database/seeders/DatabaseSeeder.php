<?php

namespace Database\Seeders;

use App\Models\Setting;
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
        \App\Models\User::factory(1)->create();

        Setting::create([
            'site_name' => 'Pariwisata',
            'address' => 'Kabupten Tangerang, Banten, Indonesia',
            'about' => 'Selamat datang di Pariwisata Kabupaten Tangerang! Nikmati keindahan alam, kuliner lezat, dan pengalaman wisata tak terlupakan. Selamat menikmati perjalanan Anda!'
        ]);
    }
}
