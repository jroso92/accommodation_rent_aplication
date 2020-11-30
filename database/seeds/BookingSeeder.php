<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookings')-> insert([
            [
                'reserved_at' => Carbon::parse('2020-02-19'),
                'reserved_until' => Carbon::parse('2020-02-20'),
                'adult_no' => 4,
                'child_no' => 0,
                'price' => 1450.99,
                'accommodation_id' => 1,
            ],
        ]);
    }
}
