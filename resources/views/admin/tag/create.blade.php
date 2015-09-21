@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <div class="row page-title-row">
            <div class="col-md-12">
                <h3>Tags
                    <small>» Create New Tag</small>
                </h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">New Tag Form</h3>
                    </div>

                    <div class="panel-body">
                        @include('admin.partials.errors')

                        {!! Form::open(array(
                            'url' => route('admin.tag.store'),
                            'class' => 'form-horizontal'))
                        !!}

                        <div class="form-group">
                            {!! Form::label('tag', 'Tag', array( 'class' => 'col-md-3 control-label' )) !!}

                            <div class="col-md-3">
                                {!! Form::text('tag', $tag, array(
                                    'id' => 'tag',
                                    'class' => 'form-control',
                                    'autofocus' => ''
                                )) !!}
                            </div>
                        </div>

                        @include('admin.tag._form')

                        <div class="form-group">
                            <div class="col-md-7 col-md-offset-3">
                                {!! Form::button('<span class="fa fa-plus-circle"></span> Add New Tag', array(
                                    'class' => 'btn btn-primary btn-md',
                                    'type' => 'submit'
                                )) !!}
                            </div>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop