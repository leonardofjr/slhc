<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'company_name' => 'Sacred Light Healing Centre',
            'phone' => '416-907-4697',
            'email' => 'info@sacredlighthealing.ca',
            'street_address' => '188 Bur Oak Avenue',
            'city' => 'Markham',
            'province' => 'Ontario',
            'postal_code' => 'L6C-2M1',
            'facebook' => 'https://www.facebook.com/sacredlighthealing/',
            'instagram' => 'https://www.instagram.com/Sacredlighthealingcentre/',
        ]);
    }
}
