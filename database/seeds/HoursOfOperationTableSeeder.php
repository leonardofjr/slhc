<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HoursOfOperationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'hours_of_operations')->insert([
            [
            'day' => 0,
            'start' => date("8:00:00"),
            'end' => date("22:00:00"),
            'opened' => true,
            ],
            [
            'day' => 1,
            'start' => date("8:00:00"),
            'end' => date("22:00:00"),
            'opened' => true,
            ],
            [
            'day' => 2,
            'start' => date("8:00:00"),
            'end' => date("22:00:00"),
            'opened' => true,
            ],
            [
            'day' => 3,
            'start' => date("8:00:00"),
            'end' => date("22:00:00"),
            'opened' => true,
            ],
            [
            'day' => 4,
            'start' => date("8:00:00"),
            'end' => date("22:00:00"),
            'opened' => true,
            ],
            [
            'day' => 5,
            'start' => date("8:00:00"),
            'end' => date("22:00:00"),
            'opened' => false,
            ],
            [
            'day' => 6,
            'start' => date("8:00:00"),
            'end' => date("22:00:00"),
            'opened' => false,
            ],
        ]);
    }
}
