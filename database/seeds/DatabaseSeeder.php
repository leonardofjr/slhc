<?php

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
         $this->call(SettingsTableSeeder::class);
         $this->call(RoleTableSeeder::class);
        $this->call(HoursOfOperationTableSeeder::class);
        $this->call(ReviewTableSeeder::class);
        $this->call(ServiceTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(DurationDropdownTableSeeder::class);
    }
}
