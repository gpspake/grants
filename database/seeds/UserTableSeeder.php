<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        App\User::truncate();

        factory(App\User::class, 10)->create();
    }
}
