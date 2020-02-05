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
        //<!==================================!>
        \App\Province::create([
            'name'        => 'Northern',
            'description' => 'bla',
        ]); \App\Province::create([
            'name'        => 'North Central',
            'description' => 'bla',
        ]);
        \App\Province::create([
            'name'        => 'Noth Western',
            'description' => 'bla',
        ]);
        \App\Province::create([
            'name'        => 'Central',
            'description' => 'bla',
        ]);
        \App\Province::create([
            'name'        => 'Eastern',
            'description' => 'bla',
        ]);
        \App\Province::create([
            'name'        => 'Western',
            'description' => 'bla',
        ]);
        \App\Province::create([
            'name'        => 'Sabaragamuwa',
            'description' => 'bla',
        ]);
        \App\Province::create([
            'name'        => 'Uva',
            'description' => 'bla',
        ]);
        \App\Province::create([
            'name'        => 'Southern',
            'description' => 'bla',
        ]);


        //District
        //<!==================================!>

       //<!--------------   1  ---------------!>
        \App\District::create([
            'name'        => 'Jaffna',
            'description' => 'bla bla',
            'province_id' => 1,
        ]);
        \App\District::create([
            'name'        => 'Kilinochchi',
            'description' => 'bla bla',
            'province_id' => 1,
        ]);
        \App\District::create([
            'name'        => 'Mannar',
            'description' => 'bla bla',
            'province_id' => 1,
        ]);
        \App\District::create([
            'name'        => 'Mullaitivu',
            'description' => 'bla bla',
            'province_id' => 1,
        ]);
        \App\District::create([
            'name'        => 'Vavuniya',
            'description' => 'bla bla',
            'province_id' => 1,
        ]);
         
        //<!--------------   2  ---------------!>
        \App\District::create([
            'name'        => 'Anuradhapura',
            'description' => 'bla bla',
            'province_id' => 2,
        ]);
        \App\District::create([
            'name'        => 'Polonnaruwa',
            'description' => 'bla bla',
            'province_id' => 2,
        ]);

        //<!--------------   3  ---------------!>
        \App\District::create([
            'name'        => 'Puttalam',
            'description' => 'bla bla',
            'province_id' => 3,
        ]);
        \App\District::create([
            'name'        => 'Kurunegala',
            'description' => 'bla bla',
            'province_id' => 3,
        ]);

        //<!--------------   4  ---------------!>
        \App\District::create([
            'name'        => 'Mathale',
            'description' => 'bla bla',
            'province_id' => 4,
        ]);
        \App\District::create([
            'name'        => 'Kandy',
            'description' => 'bla bla',
            'province_id' => 4,
        ]);
        \App\District::create([
            'name'        => 'Nuwara Eliya',
            'description' => 'bla bla',
            'province_id' => 4,
        ]);

        //<!--------------   5  ---------------!>
        \App\District::create([
            'name'        => 'Trincomalee',
            'description' => 'bla bla',
            'province_id' => 5,
        ]);
        \App\District::create([
            'name'        => 'Batticaloa',
            'description' => 'bla bla',
            'province_id' => 5,
        ]);
        \App\District::create([
            'name'        => 'Ampara',
            'description' => 'bla bla',
            'province_id' => 5,
        ]);

        //<!--------------   6  ---------------!>
        \App\District::create([
            'name'        => 'Gampaha',
            'description' => 'bla bla',
            'province_id' => 6,
        ]);
        \App\District::create([
            'name'        => 'Colombo',
            'description' => 'bla bla',
            'province_id' => 6,
        ]);
        \App\District::create([
            'name'        => 'Kalutara',
            'description' => 'bla bla',
            'province_id' => 6,
        ]);

        //<!--------------   7  ---------------!>
        \App\District::create([
            'name'        => 'Kegalle',
            'description' => 'bla bla',
            'province_id' => 7,
        ]);
        \App\District::create([
            'name'        => 'Ratnapura',
            'description' => 'bla bla',
            'province_id' => 7,
        ]);

          //<!--------------   8  ---------------!>
          \App\District::create([
            'name'        => 'Badulla',
            'description' => 'bla bla',
            'province_id' => 8,
        ]);
        \App\District::create([
            'name'        => 'Monaragala',
            'description' => 'bla bla',
            'province_id' => 8,
        ]);

        //<!--------------   9  ---------------!>
        \App\District::create([
            'name'        => 'Hambantota',
            'description' => 'bla bla',
            'province_id' => 9,
        ]);
        \App\District::create([
            'name'        => 'Matara',
            'description' => 'bla bla',
            'province_id' => 9,
        ]);
        \App\District::create([
            'name'        => 'Galle',
            'description' => 'bla bla',
            'province_id' => 9,
        ]);


        //City
        \App\City::create([
            'city_name'       => 'Trincomalee',
            'description'=> 'blabla',
            'district_id'=> 1,

        ]);
        \App\City::create([
            'city_name'       => 'galle',
            'description'=> 'blabla',
            'district_id'=> 1,
            ]);
    }
}
// bcrypt(123456)