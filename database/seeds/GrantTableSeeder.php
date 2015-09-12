<?php

use Illuminate\Database\Seeder;
use App\Tag;
use App\Grant;

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