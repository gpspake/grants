@extends('grants.layouts.master')

@section('page-header')
    <header class="intro-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site-heading">
                        <h1>{{ config('grants.title') }}</h1>
                        <hr class="small">
                        <h2 class="subheading">{{ $subtitle }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <table id="grants-table" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Grant Maker</th>
                        <th>Grant Program</th>
                        <th>Letter of Intent Deadline</th>
                        <th>Limited Submission Deadline</th>
                        <th>Status</th>
                        <th>Maximum Award</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($grants as $grant)

                        <tr>
                            <td><a href="/grants/{{ $grant->slug }}">{{ $grant->title }}</a></td>
                            <td>{!! get_link($grant->maker_website, $grant->maker) !!}</td>
                            <td>{!! get_link($grant->program_website, $grant->program) !!}</td>
                            <td data-order="{{ $grant->letter_of_intent_deadline }}">
                                {{ date('F d, Y', strtotime( $grant->letter_of_intent_deadline )) }}
                            </td>
                            <td data-order="{{ $grant->limited_submission_deadline }}">
                                {{ date('F d, Y', strtotime( $grant->limited_submission_deadline)) }}
                            </td>
                            <td>
                                {{ get_status($grant->status_open, 'Open', 'Closed') }}
                            </td>
                            <td>
                                {{ get_money( $grant->maximum_award, '$') }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                {{-- The Pager --}}
                <ul class="pager">

                    {{-- Reverse direction --}}
                    @if ($reverse_direction)
                        @if ($grants->currentPage() > 1)
                            <li class="previous">
                                <a href="{!! $grants->url($grants->currentPage() - 1) !!}">
                                    <i class="fa fa-long-arrow-left fa-lg"></i>
                                    Previous {{ $tag->tag }} Posts
                                </a>
                            </li>
                        @endif
                        @if ($grants->hasMorePages())
                            <li class="next">
                                <a href="{!! $grants->nextPageUrl() !!}">
                                    Next {{ $tag->tag }} Posts
                                    <i class="fa fa-long-arrow-right"></i>
                                </a>
                            </li>
                        @endif
                    @else
                        @if ($grants->currentPage() > 1)
                            <li class="previous">
                                <a href="{!! $grants->url($grants->currentPage() - 1) !!}">
                                    <i class="fa fa-long-arrow-left fa-lg"></i>
                                    Newer {{ $tag ? $tag->tag : '' }} Posts
                                </a>
                            </li>
                        @endif
                        @if ($grants->hasMorePages())
                            <li class="next">
                                <a href="{!! $grants->nextPageUrl() !!}">
                                    Older {{ $tag ? $tag->tag : '' }} Posts
                                    <i class="fa fa-long-arrow-right"></i>
                                </a>
                            </li>
                        @endif
                    @endif
                </ul>
            </div>

        </div>
    </div>
@stop

@section('scripts')
    <script>
        $(function() {
            $("#grants-table").DataTable({
                order: [[0, "desc"]]
            });
        });
    </script>
@stop