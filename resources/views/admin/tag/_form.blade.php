<div class="form-group">
    {!! Form::label('title', 'Title', array('class' => 'col-md-3 control-label')) !!}

    <div class="col-md-8">
        {!! Form::text('title', $title, array(
            'id' => 'title',
            'class' => 'form-control'
        )) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('subtitle', 'Subtitle', array('class' => 'col-md-3 control-label')) !!}

    <div class="col-md-8">
        {!! Form::text('subtitle', $subtitle, array(
            'id' => 'subtitle',
            'class' => 'form-control'
        )) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('meta_description', 'Meta Description', array('class' => 'col-md-3 control-label')) !!}

    <div class="col-md-8">
        {!! Form::textarea('meta_description', $meta_description, array(
            'id' => 'meta_description',
            'class' => 'form-control',
            'rows' => '3'
        )) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('meta_description', 'Layout', array('class' => 'col-md-3 control-label')) !!}

    <div class="col-md-4">
        {!! Form::text('layout', $layout, array(
            'id' => 'layout',
            'class' => 'form-control'
        )) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('reverse_direction', 'Direction', array('class' => 'col-md-3 control-label')) !!}

    <div class="col-md-7">
        <label class="radio-inline">
            {!! Form::radio('reverse_direction', '0', ! $reverse_direction, array(
                'id' => 'reverse_direction'
            )) !!}

            Normal
        </label>

        <label class="radio-inline">
            {!! Form::radio('reverse_direction', '1', $reverse_direction) !!}

            Reversed
        </label>
    </div>
</div>