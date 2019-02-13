<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 15)->create()->each(function ($user) {
            $user->address()->save(factory(App\Address::class)->make());
            $user->phoneNumber()->save(factory(App\PhoneNumber::class)->make());
        });
    }
}
