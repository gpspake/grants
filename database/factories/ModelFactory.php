<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function ($faker) {
    $firstname = ucfirst($faker->unique()->word());
    $lastname = ucfirst($faker->unique()->word());
    $netid = strtolower($firstname[0] . $lastname);
    return [
        'netid' => $netid,
        'email' => $netid . '@uthsc.edu',
        'first_name' => $firstname,
        'last_name' => $lastname,
        'display_name' => $firstname . ' ' . $lastname,
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Tag::class, function ($faker) {
    return [
        'tag' => $faker->unique()->word(),
        'title' => $faker->word(),
        'subtitle' => implode( ' ', $faker->words(3) ),
        'meta_description' => $faker->sentence(mt_rand(3,5)),
        'layout' => 'grant.layouts.index',
        'reverse_direction' => $faker->boolean(25)
    ];
});

$factory->define(App\Grant::class, function ($faker) {
    return [
        'title' => implode( ' ', $faker->words(mt_rand(3, 5)) ),
        'subtitle' => implode( ' ', $faker->words(mt_rand(5, 7)) ),
        'maker' => $faker->word(),
        'maker_website' => $faker->url(),
        'program' => $faker->word(),
        'program_website' => $faker->url(),
        'description_raw' => join("\n\n", $faker->paragraphs(mt_rand(3, 6))),
        'maximum_award' => mt_rand(2,5) * 100000000 / (mt_getrandmax() / 100000000),
        'letter_of_intent_deadline' => $faker->dateTimeBetween('-9 months', '+9 months'),
        'limited_submission_deadline' => $faker->dateTimeBetween('-9 months', '+9 months'),
        'status_open' => $faker->boolean(75),
        'published_at' => $faker->dateTimeBetween('-1 month', '+3 days'),
        'is_draft' => false
    ];
});
