{!! Form::open( array('class'=>'navbar-form navbar-right', 'method' => 'GET', 'list' => 'tags') ) !!}
{!! Form::input('search', 'q', null, ['placeholder' => 'Search..','class' => 'form-control input-sm', 'id' => 'tags']) !!}
{!! Form::close() !!}
