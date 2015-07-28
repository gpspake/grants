<?php

namespace App\Jobs;

use App\Grant;
use App\Tag;
use Carbon\Carbon;
use Illuminate\Contracts\Bus\SelfHandling;

class GrantFormFields extends Job implements SelfHandling
{
    /**
     * The id (if any) of the Post row
     *
     * @var integer
     */
    protected $id;

    /**
     * List of fields and default value for each field
     *
     * @var array
     */

    protected $fieldList = [
        'title' => '',
        'subtitle' => '',
        'description' => '',
        'meta_description' => '',
        'is_draft' => "0",
        'status_open' => "0",
        'maker' => '',
        'maker_website' => '',
        'program' => '',
        'program_website' => '',
        'maximum_award' => '',
        'letter_of_intent_deadline' => '',
        'letter_of_intent_deadline_date' => '',
        'letter_of_intent_deadline_time' => '',
        'limited_submission_deadline' => '',
        'limited_submission_deadline_date' => '',
        'limited_submission_deadline_time' => '',
        'publish_date' => '',
        'publish_time' => '',
        'layout' => 'grants.layouts.grant',
        'tags' => [],
    ];

    /**
     * Create a new command instance.
     *
     * @param integer $id
     */
    public function __construct($id = null)
    {
        $this->id = $id;
    }

    /**
     * Execute the command.
     *
     * @return array of fieldnames => values
     */
    public function handle()
    {
        $fields = $this->fieldList;

        if (! $this->id) {
            $when = Carbon::now()->addHour();
            $fields['publish_date'] = $when->format('M-j-Y');
            $fields['publish_time'] = $when->format('g:i A');
        }
        $fields = $this->fieldsFromModel($this->id, $fields);

        $letter_of_intent_deadline = new Carbon( $fields['letter_of_intent_deadline'] );
        $limited_submission_deadline = new Carbon( $fields['limited_submission_deadline'] );

        $fields['letter_of_intent_deadline_date'] = $letter_of_intent_deadline->format('M-j-Y');
        $fields['letter_of_intent_deadline_time'] = $letter_of_intent_deadline->format('g:i A');

        $fields['limited_submission_deadline_date'] = $limited_submission_deadline->format('M-j-Y');
        $fields['limited_submission_deadline_time'] = $limited_submission_deadline->format('g:i A');

        foreach ($fields as $fieldName => $fieldValue) {
            $fields[$fieldName] = old($fieldName, $fieldValue);
        }
        return array_merge(
            $fields,
            ['allTags' => Tag::lists('tag')->all()]
        );
    }

    /**
     * Return the field values from the model
     *
     * @param integer $id
     * @param array $fields
     * @return array
     */
    protected function fieldsFromModel($id, array $fields)
    {

        $grant = Grant::findOrFail($id);

        $fieldNames = array_keys(array_except($fields, ['tags']));

        $fields = ['id' => $id];

        foreach ($fieldNames as $field) {
            $fields[$field] = $grant->{$field};
        }

        $fields['tags'] = $grant->tags()->lists('tag')->all();

        return $fields;

    }
}
