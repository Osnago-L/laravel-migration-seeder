<?php

use App\Package;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $newPackage = new Package();
            $newPackage -> package_name = $faker -> word();
            $newPackage -> location = $faker -> word();
            $newPackage -> hotel_name = $faker -> word();
            $newPackage -> air_company = $faker -> word();
            $newPackage -> flight_code = $faker -> regexify('[A-Z]{5}[0-4]{3}');
            $newPackage -> arrival = $faker -> dateTime();
            $newPackage -> departure = $faker -> dateTime();
            $newPackage -> price = $faker -> numberBetween(50, 300);
            $newPackage -> discount = $faker -> numberBetween(0, 50);
            $newPackage -> save();
        }
    }
}
