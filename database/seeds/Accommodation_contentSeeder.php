<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Accommodation_contentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accommodation_content')-> insert([
            ['accommodation_id' => 1, 'content_id' => 1],
        ]);
    }
}
