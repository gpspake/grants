@extends('grants.layouts.master', [
  'title' => $grant->title,
  'meta_description' => $grant->meta_description ?: config('grants.description'),
])

@section('page-header')
    <header class="intro-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="grant-heading">
                        <h1>{{ $grant->title }}</h1>
                        {{--<h2 class="subheading">{{ $grant->subtitle }}</h2>--}}
            <span class="meta">
              Posted on {{ $grant->published_at->format('F j, Y') }}
                @if ($grant->tags->count())
                    in
                    {!! join(', ', $grant->tagLinks()) !!}
                @endif
            </span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop

@section('content')

    {{-- The Post --}}
    <article>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {{--<h1>{{ $grant->title }}</h1>--}}
                    {{--<h5>{{ $grant->published_at->format('M jS Y g:ia') }}</h5>--}}
                    <hr>

                    <p><strong>Grant Maker: </strong>
                        <a href="{{$grant->maker_website}}">{{ $grant->maker }}</a>
                    </p>

                    <p><strong>Grant Program: </strong>
                        <a href="{{$grant->program_website}}">{{ $grant->program }}</a>
                    </p>

                    <p><strong>Maximum Award: </strong>
                        {{ '$' . number_format($grant->maximum_award, 2, '.', ',') }}
                    </p>

                    <p><strong>Letter of Intent Deadline: </strong>
                        {{$grant->letter_of_intent_deadline}}
                    </p>

                    <p><strong>Limited Submission Deadline: </strong>
                        {{$grant->limited_submission_deadline}}
                    </p>

                    <p><strong>Status: </strong>
                        {{$grant->status_open ? 'Open' : 'Closed'}}
                    </p>

                    <p>
                        {!! nl2br(e($grant->description)) !!}
                    </p>

                    <hr>
                    {{--<button class="btn btn-primary" onclick="history.go(-1)">--}}
                        {{--« Back--}}
                    {{--</button>--}}
                </div>
            </div>
        </div>
    </article>

    {{-- The Pager --}}
    <div class="container">
        <div class="row">
            <ul class="pager">
                @if ($tag && $tag->reverse_direction)
                    @if ($grant->olderPost($tag))
                        <li class="previous">
                            <a href="{!! $grant->olderPost($tag)->url($tag) !!}">
                                <i class="fa fa-long-arrow-left fa-lg"></i>
                                Previous {{ $tag->tag }} Post
                            </a>
                        </li>
                    @endif
                    @if ($grant->newerPost($tag))
                        <li class="next">
                            <a href="{!! $grant->newerPost($tag)->url($tag) !!}">
                                Next {{ $tag->tag }} Post
                                <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </li>
                    @endif
                @else
                    @if ($grant->newerPost($tag))
                        <li class="previous">
                            <a href="{!! $grant->newerPost($tag)->url($tag) !!}">
                                <i class="fa fa-long-arrow-left fa-lg"></i>
                                Next Newer {{ $tag ? $tag->tag : '' }} Post
                            </a>
                        </li>
                    @endif
                    @if ($grant->olderPost($tag))
                        <li class="next">
                            <a href="{!! $grant->olderPost($tag)->url($tag) !!}">
                                Next Older {{ $tag ? $tag->tag : '' }} Post
                                <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </li>
                    @endif
                @endif
            </ul>
        </div>

    </div>
@stop