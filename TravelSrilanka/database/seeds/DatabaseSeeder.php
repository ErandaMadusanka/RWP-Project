<?php

use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //admin
        \App\User::create([
            'user_name' => 'Eranda Madusanka',
            'email' => 'erandam5s@gmail.com',
            'email_verified_at' => now(),
            'password' => 123456,
           
        ]);

        \App\User::create([
            'user_name' => 'Madusanka',
            'email' => 'semsamarasinghe@gmail.com',
            'email_verified_at' => now(),
            'password' => 789456,
           
        ]);
        
       
       
        // province
        \App\Province::create([
            'name'        => 'south',
            'description' => 'bla',
        ]);

        //District
        \App\District::create([
            'name'        => 'Galle',
            'description' => 'bla bla',
            'province_id' => 1,
        ]);

        //City
        \App\City::create([
            'city_name'       => 'Hikkaduwa',
            'description'=> 'blabla',
            'district_id'=> 1,

        ]);
        \App\City::create([
            'city_name'       => 'galle',
            'description'=> 'blabla',
            'district_id'=> 1,
            ]);
         // beach
         \App\Models\Beaches::create([
            'name' => 'Hikkaduwa Beach',
            'description' => 'bla bla bla',
            'latitude' => '7.8731° N',
            'longitude' => '80.7718° E',
            'image' => '',
            'user_id' => 1,
            'city_id' => 1,
        ]);
        
    }
}
// bcrypt(123456)