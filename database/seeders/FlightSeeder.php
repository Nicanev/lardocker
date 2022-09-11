<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flights')->insert([[
            'date' => '2022.09.11',
            'flight_code' => Str::random(5),
            'city' => 'Moscow',
            'time' => '12:00',
            'airport_id' => 1
        ], [
            'date' => '2022.09.12',
            'flight_code' => Str::random(5),
            'city' => 'Kazan',
            'time' => '15:00',
            'airport_id' => 2
        ]]);
    }
}
