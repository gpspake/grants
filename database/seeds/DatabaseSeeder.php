<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Tag;
use App\Grant;

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
        // Pull all the tag names from the file
        $tags = Tag::lists('tag')->all();

        Grant::truncate();

        // Don't forget to truncate the pivot table
        DB::table('grant_tag_pivot')->truncate();

        factory(Grant::class, 50)->create()->each(function ($grant) use ($tags) {

            // 20% of the time don't assign a tag
            if (mt_rand(1, 100) <= 20) {
                return;
            }

            shuffle($tags);
            $grantTags = [$tags[0]];

            // 30% of the time we're assigning tags, assign 2
            if (mt_rand(1, 100) <= 30) {
                $postTags[] = $tags[1];
            }

            $grant->syncTags($grantTags);
        });
    }
}

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