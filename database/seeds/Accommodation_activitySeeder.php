<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Accommodation_activitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accommodation_activity')-> insert([
            [
                'accommodation_id' => 1,
                'activity_id' => 1,
            ],
        ]);
    }
}
