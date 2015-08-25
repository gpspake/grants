<?php
namespace App\Http\Controllers;

use App\Jobs\GrantsIndexData;
use App\Http\Requests;
use App\Grant;
use App\Tag;
use Illuminate\Http\Request;

class GrantController extends Controller
{
    public function index(Request $request)
    {

        $query = $request->get('q');

        $tag = $request->get('tag');

        $tags = Tag::all(array('tag','title'));

        $data = $this->dispatch(new GrantsIndexData($tag));

        return view('grants.layouts.index', $data)
            ->withTags($tags)
            ->withRequest($request);

    }

    public function showGrant($slug, Request $request)
    {
        $grant = Grant::with('tags')->whereSlug($slug)->firstOrFail();
        $tag = $request->get('tag');
        if ($tag) {
            $tag = Tag::whereTag($tag)->firstOrFail();
        }

        return view($grant->layout, compact('grant', 'tag'));
    }
}