<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* unos admina */
        DB::table('users')->insert([
            ['name' => 'admin', 'email' => 'admin@admin.com', 'password' => Hash::make('admin'), 'county_id' => 1, 'role_id' => 1],
            ['name' => 'user', 'email' => 'user@user.com', 'password' => Hash::make('user'), 'county_id' => 1, 'role_id' => 2],
            ['name' => 'guest', 'email' => 'guest@guest.com', 'password' => Hash::make('guest'), 'county_id' => 1, 'role_id' => 3]
        ]);

    }
}