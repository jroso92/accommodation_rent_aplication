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
         $this->call([
            CountySeeder::class,
            CitySeeder::class,
            ActivitySeeder::class,
            Accommodation_typeSeeder::class,
            ContentSeeder::class,
            AccommodationSeeder::class,
            Accommodation_activitySeeder::class,
            ReviewSeeder::class,
            Accommodation_contentSeeder::class,
            BookingSeeder::class,
            RoleSeeder::class,
            UserSeeder::class
         ]);
    }
}
