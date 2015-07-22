<?php

namespace App\Http\Controllers;

use App\Grant;
use Carbon\Carbon;

class GrantController extends Controller
{
    public function index()
    {
        $grants = Grant::where('published_at', '<=', Carbon::now())
            ->orderBy('published_at', 'desc')
            ->paginate(config('grants.grants_per_page'));

        return view('grants.index', compact('grants'));
    }

    public function showGrant($slug)
    {
        $grant = Grant::whereSlug($slug)->firstOrFail();

        return view('grants.grant')->withGrant($grant);
    }
}