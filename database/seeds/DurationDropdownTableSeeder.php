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
         //   ['duration' => 900],
            [ 'duration' => 1800],
         //   [ 'duration' => 2700],
            [ 'duration' => 3600],
         /*   [ 'duration' => 4500],
            [ 'duration' => 5400],
            [ 'duration' => 6300],
            [ 'duration' => 7200],
            [ 'duration' => 8100],
            [ 'duration' => 9000],
            [ 'duration' => 9900],
            [ 'duration' => 10800],*/
        ]);
    }
}
