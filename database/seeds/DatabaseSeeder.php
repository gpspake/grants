<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('GrantTableSeeder');

        Model::reguard();
    }
}

class GrantTableSeeder extends Seeder
{
    public function run()
    {
        App\Grant::truncate();

        factory(App\Grant::class, 20)->create();
    }
}