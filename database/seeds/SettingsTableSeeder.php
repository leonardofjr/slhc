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
            'business_name' => 'Sacred Light Healing Centre',
            'business_phone' => '416-907-4697',
            'business_email' => 'info@sacredlighthealing.ca',
        ]);
    }
}
