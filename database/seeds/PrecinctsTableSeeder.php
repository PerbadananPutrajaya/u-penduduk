<?php

use Illuminate\Database\Seeder;

class PrecinctsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $precincts = [
            ['name' => 'Presint 1'],
            ['name' => 'Presint 2'],
            ['name' => 'Presint 3'],
            ['name' => 'Presint 4'],
            ['name' => 'Presint 5'],
            ['name' => 'Presint 6'],
            ['name' => 'Presint 7'],
            ['name' => 'Presint 8'],
            ['name' => 'Presint 9'],
            ['name' => 'Presint 10'],
            ['name' => 'Presint 11'],
            ['name' => 'Presint 12'],
            ['name' => 'Presint 13'],
            ['name' => 'Presint 14'],
            ['name' => 'Presint 15'],
            ['name' => 'Presint 16'],
            ['name' => 'Presint 17'],
            ['name' => 'Presint 18'],
            ['name' => 'Presint 19'],
            ['name' => 'Presint 20'],
        ];

        foreach ($precincts as $precincts) {
            \App\Precinct::insert($precincts);
        }
    }
}
