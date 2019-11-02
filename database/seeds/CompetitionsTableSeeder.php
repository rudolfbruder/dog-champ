<?php

use App\Competition;
use Illuminate\Database\Seeder;

class CompetitionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Competition::insert([

            [
                'continent' => 'Europa',
                'country' => 'Slovensko',
                'city' => 'Bratislava',
                'date' =>  '2008-10-21'
            ],
            [
                'continent' => 'Europa',
                'country' => 'Polsko',
                'city' => 'Krakow',
                'date' =>  '2008-10-28'
            ],
            [
                'continent' => 'Europa',
                'country' => 'Rakusko',
                'city' => 'Vieden',
                'date' =>  '2008-07-21'
            ]
        ]);
    }
}