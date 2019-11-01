<?php

use App\Award;
use App\AwardType;
use Illuminate\Database\Seeder;

class AwardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $awardType1 = AwardType::create([
            'name' => 'Zlata medaila',
            'points' => 3
        ]);

        $awardType2 = AwardType::create([
            'name' => 'Strieborna medaila',
            'points' => 2
        ]);

        $awardType3 = AwardType::create([
            'name' => 'Bronzovoa medaila',
            'points' => 1
        ]);

        $award1 = Award::create([
            'dog_id' => '1',
            'user_id' => '1',
            'competition_id' => '1',
            'date' => '2019-10-25',
            'comment' => 'super vec',
            'award_type_id' => '2'
        ]);

        $award2 = Award::create([
            'dog_id' => '1',
            'user_id' => '1',
            'competition_id' => '1',
            'date' => '2019-10-25',
            'comment' => 'super vec',
            'award_type_id' => '3'
        ]);

        $award3 = Award::create([
            'dog_id' => '1',
            'user_id' => '1',
            'competition_id' => '1',
            'date' => '2019-10-25',
            'comment' => 'super vec',
            'award_type_id' => '1'
        ]);
    }
}