<html>
<head>
    <title>{{ $grant->title }}</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
          rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>{{ $grant->title }}</h1>
    <h5>{{ $grant->published_at->format('M jS Y g:ia') }}</h5>
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
    <button class="btn btn-primary" onclick="history.go(-1)">
        « Back
    </button>
</div>
</body>
</html>