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
    }
}
// bcrypt(123456)