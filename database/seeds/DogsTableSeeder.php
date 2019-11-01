<?php

use Illuminate\Database\Seeder;
use App\Dog;

class DogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $dog1 = Dog::create([
            'name' => 'Denisko Panova Luka',
            'nick_name' => 'Denisovic',
            'date_of_birth' => '2008-10-21',
            'gender' => '0',
            'race_id' => '3',
            'place_of_birth' => 'Malacky',
            'about' => 'Maly dobry pekny psik',
            'user_id' => '1'
        ]);

        $dog2 = Dog::create([
            'name' => 'Oliver Panova Luka',
            'nick_name' => 'Olinko',
            'date_of_birth' => '2005-10-21',
            'gender' => '0',
            'race_id' => '3',
            'place_of_birth' => 'Malacky',
            'about' => 'Maly dobry pekny psik chudacik',
            'user_id' => '1'
        ]);

        $dog3 = Dog::create([
            'name' => 'Emchi Lamleh',
            'nick_name' => 'Emco',
            'date_of_birth' => '2017-10-21',
            'gender' => '0',
            'race_id' => '3',
            'place_of_birth' => 'Bratislava',
            'about' => 'Blaznivy emco',
            'user_id' => '1'
        ]);
    }
}
