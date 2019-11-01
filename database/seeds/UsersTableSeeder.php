<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user1 = User::create([
            'name' => 'Rudolf Bruder',
            'email' => 'rudolf.bruder@gmail.com',
            'password' => \Hash::make('password')
        ]);
    }
}