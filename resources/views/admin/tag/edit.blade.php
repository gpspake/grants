@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <div class="row page-title-row">
            <div class="col-md-12">
                <h3>Tags <small>» Edit Tag</small></h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Tag Edit Form</h3>
                    </div>
                    <div class="panel-body">

                        @include('admin.partials.errors')
                        @include('admin.partials.success')

                        {!! Form::open(array(
                        'url' => route('admin.tag.update', $id),
                        'method' => 'put',
                        'class' => 'form-horizontal'))
                        !!}

                            <div class="form-group">
                                {!! Form::label('tag', 'Tag', array('class' => 'col-md-3 control-label')) !!}

                                <div class="col-md-3">
                                    <p class="form-control-static">{{ $tag }}</p>
                                </div>
                            </div>

                            @include('admin.tag._form')

                            <div class="form-group">
                                <div class="col-md-7 col-md-offset-3">
                                    {!! Form::button('<span class="fa fa-save"></span> Save Changes', array(
                                        'class' => 'btn btn-primary btn-md',
                                        'type' => 'submit'
                                    )) !!}

                                    {!! Form::button('<span class="fa fa-times-circle"></span> Delete', array(
                                        'class' => 'btn btn-danger btn-md',
                                        'value' => 'continue',
                                        'data-target' => '#modal-delete',
                                        'data-toggle' => 'modal',
                                        'type' => 'button'
                                    )) !!}
                                </div>
                            </div>

                        {!! Form::close() !!}

                    </div>
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
                        Are you sure you want to delete this tag?
                    </p>
                </div>

                <div class="modal-footer">
                    {!! Form::open(array(
                        'url' => route('admin.tag.destroy', $id),
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
@stop