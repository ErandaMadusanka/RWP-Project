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
        \App\User::create([
            'name' => 'Eranda Madusanka',
            'email' => 'erandam5s@gmail.com',
            'email_verified_at' => now(),
            'password' => 123456,
           
        ]);

        \App\User::create([
            'name' => 'Eranda Madusanka',
            'email' => 'semsamarasinghe@gmail.com',
            'email_verified_at' => now(),
            'password' => 789456,
           
        ]);
        
        \App\Models\Beaches::create([
            'name' => 'Hikkaduwa',
            'description' => 'bla bla bla',
            'latitude' => '7.8731° N',
            'longitude' => '80.7718° E',
            'image' => '',
            'user_id' => 1,
            'city_id' => 1,
           
        ]);
       
        // 
        
    }
}
// bcrypt(123456)