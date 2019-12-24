<?php

use Illuminate\Database\Seeder;
use App\DurationDropdown;

class DurationDropdownTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'duration_dropdowns')->insert([
            [ 'duration' => 1800],
            [ 'duration' => 3600],
        ]);
    }
}
