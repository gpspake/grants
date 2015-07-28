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

        $this->call('UserTableSeeder');
        $this->call('GrantTableSeeder');
        $this->call('TagTableSeeder');

        Model::reguard();
    }
}

class UserTableSeeder extends Seeder
{
    public function run()
    {
        App\User::truncate();

        factory(App\User::class, 1)->create();
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

class TagTableSeeder extends Seeder
{
    public function run()
    {
        App\Tag::truncate();

        factory(App\Tag::class, 10)->create();
    }
}