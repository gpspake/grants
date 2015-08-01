<?php

namespace App\Http\Controllers;

use App\Jobs\GrantIndexData;
use App\Grant;
use Carbon\Carbon;
use App\Http\Requests;
use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(Request $request)
    {
        $tags = explode( ",", $request->all()['tags'] );

        //var_dump($tags);
        //$tag = $request->get('tags');
        //var_dump($request);
        $grants = Grant::with('tags')
            ->where('published_at', '<=', Carbon::now())
            ->orderBy('published_at', 'desc')
            ->paginate(config('grants.grants_per_page'));
            //->toArray();

            var_dump($grants); //returns object

        return view('tags.index', compact('grants'));
    }
}


