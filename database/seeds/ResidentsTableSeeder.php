<?php

use Illuminate\Database\Seeder;

class ResidentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // seed the residents table
        $this->seedFromCSV(base_path('database/seeds/csvs/residents.csv'), 'residences');
    }
}
