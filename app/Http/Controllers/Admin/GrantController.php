<?php

namespace App\Http\Controllers\Admin;

use App\Jobs\GrantFormFields;
use App\Http\Requests;
use App\Http\Requests\GrantCreateRequest;
use App\Http\Requests\GrantUpdateRequest;
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
        return view('admin.grant.index')
            ->withGrants(Grant::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        $data = $this->dispatch(new GrantFormFields());

        return view('admin.grant.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  GrantCreateRequest $request
     * @return Response
     */
    public function store(GrantCreateRequest $request)
    {
        $grant = Grant::create($request->grantFillData());
        $grant->syncTags($request->get('tags', []));

        return redirect()
            ->route('admin.grant.index')
            ->withSuccess('New Grant Successfully Entered.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $data = $this->dispatch(new GrantFormFields($id));

        return view('admin.grant.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  GrantUpdateRequest $request
     * @param  int  $id
     * @return Response
     */
    public function update(GrantUpdateRequest $request, $id)
    {
        $grant = Grant::findOrFail($id);
        $grant->fill($request->grantFillData());
        $grant->save();
        $grant->syncTags($request->get('tags', []));

        if ($request->action === 'continue') {
            return redirect()
                ->back()
                ->withSuccess('Grant saved.');
        }

        return redirect()
            ->route('admin.grant.index')
            ->withSuccess('Grant saved.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $grant = Grant::findOrFail($id);
        $grant->tags()->detach();
        $grant->delete();

        return redirect()
            ->route('admin.grant.index')
            ->withSuccess('Grant deleted.');
    }
}
