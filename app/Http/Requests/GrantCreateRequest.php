<?php
namespace App\Http\Requests;

use Carbon\Carbon;

class GrantCreateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'maker' => 'required',
            'program' => 'required',
            'subtitle' => 'required',
            'description' => 'required',
            'publish_date' => 'required',
            'publish_time' => 'required',
            'layout' => 'required',
        ];
    }

    /**
     * Return the fields and values to create a new grant from
     */
    public function grantFillData()
    {
        $published_at = new Carbon(
            $this->publish_date.' '.$this->publish_time
        );

        $letter_of_intent_deadline = new Carbon(
            $this->letter_of_intent_deadline_date.' '.$this->letter_of_intent_deadline_time
        );

        $limited_submission_deadline = new Carbon(
            $this->limited_submission_deadline_date.' '.$this->limited_submission_deadline_time
        );

        return [
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'maker' => $this->maker,
            'maker_website' => $this->maker_website,
            'program' => $this->program,
            'program_website' => $this->program_website,
            'maximum_award' => $this->maximum_award,
            'letter_of_intent_deadline' => $letter_of_intent_deadline,
            'limited_submission_deadline' => $limited_submission_deadline,
            'description_raw' => $this->get('description'),
            'meta_description' => $this->meta_description,
            'status_open' => (bool)$this->status_open,
            'is_draft' => (bool)$this->is_draft,
            'published_at' => $published_at,
            'layout' => $this->layout,
        ];
    }
}