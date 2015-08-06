<?php namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Grant;
use Api\Transformers\GrantTransformer;

class GrantController extends Controller
{
    /**
     * @var GrantTransformer
     */
    protected $grantTransformer;

    function __construct(GrantTransformer $grantTransformer)
    {
        $this->grantTransformer = $grantTransformer;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        $grants = Grant::all();

        return response()->json([
            'data' => $this->grantTransformer->transformCollection($grants->all())
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
            'data' => $this->grantTransformer->transform($grant)
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


}
