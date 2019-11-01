<?php

use Illuminate\Database\Seeder;
use App\Race;

class RacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Race::insert([

            [
                'name'=> 'Nemecky ovciak',
            ],
            [
                'name'=> 'Yorkshire terier',
            ],
            [
                'name'=> 'Tibetsky teries',
            ]
        ]);
    }
}