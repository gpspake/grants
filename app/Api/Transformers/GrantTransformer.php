<?php namespace Api\Transformers;

class GrantTransformer extends Transformer {

    public function transform($grant){

        return [
            'id' => $grant['id'],
            'created_at' => $grant['created_at'],
            'updated_at' => $grant['updated_at'],
            'title' => $grant['title'],
            'subtitle' => $grant['subtitle'],
            'slug' => $grant['slug'],
            'grant_maker' => $grant['maker'],
            'grant_maker_website' => $grant['maker_website'],
            'program' => $grant['program'],
            'program_website' => $grant['program_website'],
            'description_raw' => $grant['description_raw'],
            'description_html' => $grant['description_html'],
            'meta_description' => $grant['meta_description'],
            'is_draft' => (boolean) $grant['is_draft'],
            'layout' => $grant['layout'],
            'maximum_award' => $grant['maximum_award'],
            'letter_of_intent_deadline' => $grant['letter_of_intent_deadline'],
            'limited_submission_deadline' => $grant['limited_submission_deadline'],
            'status_open' => (boolean) $grant['status_open'],
            'published_at' => $grant['published_at'],
        ];
    }
}