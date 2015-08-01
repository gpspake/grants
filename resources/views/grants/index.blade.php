<html>
<head>
    <title>{{ config('grants.title') }}</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
          rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>{{ config('grants.title') }}</h1>
    <h5>Page {{ $grants->currentPage() }} of {{ $grants->lastPage() }}</h5>
    <hr>

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

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    @section('scripts')
        <script>
            $(function() {
                $("#grants-table").DataTable({
                    order: [[0, "desc"]]
                });
            });
        </script>
    @stop
    <hr>
    {!! $grants->render() !!}
</div>
</body>
</html>