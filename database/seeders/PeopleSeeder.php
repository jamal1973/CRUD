<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Facades\DB;

class PeopleSeeder extends Seeder
{
    /**function __construct(){
    $this->run();
    }*/
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i = 0; $i < 250; $i++)
        {
            DB::table('people')->insert([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'age' => $faker->numberBetween(1,100),
                'phone_number' => $faker->phonenumber,
                'email' => $faker->email,
                'address' => $faker->streetAddress,
                'city' => $faker->city,
                'zip_code' => $faker->postcode,
                'country' => $faker->country
            ]);
        }//
    }
}
