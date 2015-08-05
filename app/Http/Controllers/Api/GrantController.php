<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Grant;

class GrantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $grants = Grant::all();

        return response()->json([
            'data' => $this->transformCollection($grants)
        ],200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $grant = Grant::find($id);

        if ( ! $grant )

        {
            return response()->json([
                'error' => [
                    'message' => 'Lesson does not exist',
                ]
            ], 404);
        }

        return response()->json([
            'data' => $this->transform($grant)
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    private function transform($grant){

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

    private function transformCollection($grants)
    {
        return array_map([$this, 'transform'], $grants->toArray());
    }
}
