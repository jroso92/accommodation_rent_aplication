<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Accommodation_typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accommodation_types')-> insert([
            ['name' => 'Hotel'],
        ]);
    }
}
