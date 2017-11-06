<?php

use App\Helpers\Helper;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Client',
            'email' => 'client@'.Helper::stripProtocolIdentifier(env('APP_URL')),
            'password' => bcrypt('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@'.Helper::stripProtocolIdentifier(env('APP_URL')),
            'password' => bcrypt('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Super Admin',
            'email' => 'super_admin@'.Helper::stripProtocolIdentifier(env('APP_URL')),
            'password' => bcrypt('password'),
        ]);
    }
}
