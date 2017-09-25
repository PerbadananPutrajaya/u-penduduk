<?php

use Illuminate\Database\Seeder;

class ResidencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // seed the residences table
        $this->seedFromCSV(base_path('database/seeds/csvs/residences.csv'), 'residences');
    }
}
