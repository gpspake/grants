@extends('admin.layout')

@section('styles')
    <link href="/assets/pickadate/themes/default.css" rel="stylesheet">
    <link href="/assets/pickadate/themes/default.date.css" rel="stylesheet">
    <link href="/assets/pickadate/themes/default.time.css" rel="stylesheet">
    <link href="/assets/selectize/css/selectize.css" rel="stylesheet">
    <link href="/assets/selectize/css/selectize.bootstrap3.css" rel="stylesheet">
@stop

@section('content')
    <div class="container-fluid">
        <div class="row page-title-row">
            <div class="col-md-12">
                <h3>Grants <small>» Add New Grant</small></h3>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">New Grant Form</h3>
                    </div>

                    <div class="panel-body">
                        @include('admin.partials.errors')

                        {!! Form::open(array(
                            'url' => route('admin.grant.store'),
                            'class' => 'form-horizontal'))
                        !!}

                        @include('admin.grant._form')

                        <div class="col-md-8">
                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-2">
                                    {!! Form::button('<span class="fa fa-floppy-o"></span> Save New Grant', array(
                                        'class' => 'btn btn-primary btn-lg',
                                        'type' => 'submit'
                                    )) !!}
                                </div>
                            </div>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('scripts')
    <script src="/assets/pickadate/picker.js"></script>
    <script src="/assets/pickadate/picker.date.js"></script>
    <script src="/assets/pickadate/picker.time.js"></script>
    <script src="/assets/selectize/selectize.min.js"></script>
    <script>
        $(function() {
            $("#publish_date").pickadate({
                format: "mmm-d-yyyy"
            });
            $("#publish_time").pickatime({
                format: "h:i A"
            });
            $("#limited_submission_deadline_date").pickadate({
                format: "mmm-d-yyyy"
            });
            $("#limited_submission_deadline_time").pickatime({
                format: "h:i A"
            });
            $("#letter_of_intent_deadline_date").pickadate({
                format: "mmm-d-yyyy"
            });
            $("#letter_of_intent_deadline_time").pickatime({
                format: "h:i A"
            });
            $("#tags").selectize({
                create: true
            });
        });
    </script>
@stop