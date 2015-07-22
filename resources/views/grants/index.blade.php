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
    <ul>
        @foreach ($grants as $grant)
            <li>
                <a href="/grants/{{ $grant->slug }}">{{ $grant->title }}</a>
                <em>({{ $grant->published_at->format('M jS Y g:ia') }})</em>
                <p>
                    {{ str_limit($grant->content) }}
                </p>
            </li>
        @endforeach
    </ul>
    <hr>
    {!! $grants->render() !!}
</div>
</body>
</html>