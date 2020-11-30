<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccommodationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accommodations')-> insert([
            [
                'name' => 'Esplanade Zagreb Hotel',
                'description' => 'Luksuzan hotel u glavnom gradu Hrvatske',
                'address' => 'Mihanovićeva 1, Donji Grad',
                'room_count' => 4,
                'bed_count' => 3,
                'max_person_count' => 6,
                'is_available' => true,
                'price_per_night' => 1800.00,
                'type_id' => 1,
                'city_id' => 1,
            ],
        ]);
    }
}
