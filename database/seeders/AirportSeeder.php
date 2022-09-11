<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AirportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('airports')->insert([[
            'name' => Str::random(5),
            'iata' => Str::random(5)
        ], [
            'name' => Str::random(5),
            'iata' => Str::random(5)
        ]]);
    }
}
