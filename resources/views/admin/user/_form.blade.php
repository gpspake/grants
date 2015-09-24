<div class="form-group">
    {!! Form::label('email', 'Email', array('class' => 'col-md-3 control-label')) !!}

    <div class="col-md-8">
        {!! Form::text('email', $email, array(
            'id' => 'email',
            'class' => 'form-control'
        )) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('first_name', 'First Name', array('class' => 'col-md-3 control-label')) !!}

    <div class="col-md-8">
        {!! Form::text('first_name', $first_name, array(
            'id' => 'subtitle',
            'class' => 'form-control'
        )) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('last_name', 'Last Name', array('class' => 'col-md-3 control-label')) !!}

    <div class="col-md-8">
        {!! Form::text('last_name', $last_name, array(
            'id' => 'subtitle',
            'class' => 'form-control'
        )) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('display_name', 'Display Name', array('class' => 'col-md-3 control-label')) !!}

    <div class="col-md-8">
        {!! Form::text('display_name', $display_name, array(
            'id' => 'subtitle',
            'class' => 'form-control'
        )) !!}
    </div>
</div>