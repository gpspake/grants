@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <div class="row page-title-row">
            <div class="col-md-6">
                <h3>Grants <small>» Listing</small></h3>
            </div>
            <div class="col-md-6 text-right">
                <a href="/admin/grant/create" class="btn btn-success btn-md">
                    <i class="fa fa-plus-circle"></i> New Grant
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">

                @include('admin.partials.errors')
                @include('admin.partials.success')

                <table id="grants-table" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Published</th>
                        <th>Title</th>
                        <th>Grant Maker</th>
                        <th>Grant Program</th>
                        <th>Letter of Intent Deadline</th>
                        <th>Limited Submission Deadline</th>
                        <th>Status</th>
                        <th>Maximum Award</th>
                        <th data-sortable="false">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($grants as $grant)
                        <tr>
                            <td data-order="{{ $grant->published_at->timestamp }}">
                                {{ $grant->published_at->format('j-M-y g:ia') }}
                            </td>
                            <td>{{ $grant->title }}</td>
                            <td>{!! get_link($grant->maker_website, $grant->maker) !!}</td>
                            <td>{!! get_link($grant->program_website, $grant->program) !!}</td>
                            <td data-order="{{ $grant->letter_of_intent_deadline }}">
                                {{ $grant->letter_of_intent_deadline }}
                            </td>
                            <td data-order="{{ $grant->published_at }}">
                                {{ $grant->published_at }}
                            </td>
                            <td>
                                {{ get_status($grant->status_open, 'Open', 'Closed') }}
                            </td>
                            <td>
                                {{ get_money( $grant->maximum_award, '$') }}
                            </td>
                            <td>
                                <a href="/admin/grant/{{ $grant->id }}/edit"
                                   class="btn btn-xs btn-info">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                                <a href="/grants/{{ $grant->slug }}"
                                   class="btn btn-xs btn-warning">
                                    <i class="fa fa-eye"></i> View
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
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