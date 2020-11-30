<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')-> insert([
            ['review' => 10, 'accommodation_id' => 1],
        ]);
    }
}
