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
            ['id' => 1, 'name' => 'Presint 1'],
            ['id' => 2, 'name' => 'Presint 2'],
            ['id' => 3, 'name' => 'Presint 3'],
            ['id' => 4, 'name' => 'Presint 4'],
            ['id' => 5, 'name' => 'Presint 5'],
            ['id' => 6, 'name' => 'Presint 6'],
            ['id' => 7, 'name' => 'Presint 7'],
            ['id' => 8, 'name' => 'Presint 8'],
            ['id' => 9, 'name' => 'Presint 9'],
            ['id' => 10, 'name' => 'Presint 10'],
            ['id' => 11, 'name' => 'Presint 11'],
            ['id' => 12, 'name' => 'Presint 12'],
            ['id' => 13, 'name' => 'Presint 13'],
            ['id' => 14, 'name' => 'Presint 14'],
            ['id' => 15, 'name' => 'Presint 15'],
            ['id' => 16, 'name' => 'Presint 16'],
            ['id' => 17, 'name' => 'Presint 17'],
            ['id' => 18, 'name' => 'Presint 18'],
            ['id' => 19, 'name' => 'Presint 19'],
            ['id' => 20, 'name' => 'Presint 20'],
        ];

        Precints::create($precincts);
    }
}
