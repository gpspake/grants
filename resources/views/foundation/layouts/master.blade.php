<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ 'meta description' }}">
    <meta name="author" content="{{ config('grants.author') }}">

    <title>{{ $title or config('grants.title') }}</title>

    {{-- Styles --}}
    <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/datatables.min.css">
    <link href="/assets/foundation/css/uthsc.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400italic,700italic,300,700,300italic,400">
    @yield('styles')

  {{-- HTML5 Shim and Respond.js for IE8 support --}}
  {{--[if lt IE 9]--}}
    <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
@include('foundation.navigation.off-canvas-left')
@include('foundation.navigation.off-canvas-right')

{{--Off Canvas Wrapper--}}
<div id="wrapper">
    @include('foundation.navigation.mobile')
    @include('foundation.navigation.audience-bar')
    
    {{--Header--}}
    <header id="uthsc-header">
        @include('foundation.partials.banner')
        @include('foundation.partials.breadcrumbs')
    </header>

    @include('foundation.navigation.main-nav')

    @yield('page-header')
    @yield('content')

    @include('foundation.partials.page-footer')
</div>

{{-- Scripts --}}
<script type="text/javascript" src="/assets/js/jquery.min.js"></script>
<script type="text/javascript">
    (function($){
        $(document).foundation({
            "magellan-expedition": {
                active_class: 'gellin' // specify the class used for active sections
            }
        });
    })(jQuery);
</script>
<script type="text/javascript">$(document).foundation('equalizer', 'reflow');</script>

<script src="/assets/js/datatables.min.js"></script>
<script src="/assets/foundation/js/uthsc.foundation.min.js"></script>

@yield('scripts')

</body>
</html>


