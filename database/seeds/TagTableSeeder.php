<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagTableSeeder extends Seeder
{
    /**
     * Seed the tags table
     */
    public function run()
    {
        Tag::truncate();

        factory(Tag::class, 10)->create();
    }
}