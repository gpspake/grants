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
                <h3>Grants
                    <small>» Edit Grant</small>
                </h3>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Grant Edit Form</h3>
                    </div>
                    <div class="panel-body">

                        @include('admin.partials.errors')
                        @include('admin.partials.success')

                        {!! Form::open(array(
                            'url' => route('admin.grant.update', $id),
                            'method' => 'put',
                            'class' => 'form-horizontal'))
                        !!}

                        @include('admin.grant._form')

                        <div class="col-md-8">
                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-2">

                                    {!! Form::button('<span class="fa fa-floppy-o"></span> Save - Continue', array(
                                        'class' => 'btn btn-primary btn-lg',
                                        'name' => 'action',
                                        'value' => 'continue',
                                        'type' => 'submit'
                                    )) !!}

                                    {!! Form::button('<span class="fa fa-floppy-o"></span> Save - Finished', array(
                                        'class' => 'btn btn-success btn-lg',
                                        'name' => 'action',
                                        'value' => 'finished',
                                        'type' => 'submit'
                                    )) !!}

                                    {!! Form::button('<span class="fa fa-times-circle"></span> Delete', array(
                                        'class' => 'btn btn-danger btn-lg',
                                        'type' => 'button',
                                        'data-toggle' => 'modal',
                                        'data-target' => '#modal-delete'
                                    )) !!}

                                </div>
                            </div>
                        </div>

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>

        {{-- Confirm Delete --}}
        <div class="modal fade" id="modal-delete" tabIndex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        {!! Form::button('x', array( 'class' => 'close', 'data-dismiss' => 'modal' )) !!}
                        <h4 class="modal-title">Please Confirm</h4>
                    </div>

                    <div class="modal-body">
                        <p class="lead">
                            <i class="fa fa-question-circle fa-lg"></i>
                            Are you sure you want to delete this grant?
                        </p>
                    </div>

                    <div class="modal-footer">
                        {!! Form::open(array(
                            'url' => route('admin.grant.destroy', $id),
                            'method' => 'delete'
                        )) !!}

                        {!! Form::button('Close', array(
                            'class' => 'btn btn-default',
                            'data-dismiss' => 'modal'
                        )) !!}

                        {!! Form::button('<span class="fa fa-times-circle"></span> Yes', array(
                            'class' => 'btn btn-danger',
                            'type' => 'submit'
                        )) !!}

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
        $(function () {
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