<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            {!! Form::label('title', 'Title', array(
                'class' => 'col-md-2 control-label'
            )) !!}

            <div class="col-md-10">
                {!! Form::text('title', $title, array(
                    'id' => 'title',
                    'class' => 'form-control',
                    'autofocus' => ''
                )) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('subtitle', 'Subtitle', array(
                'class' => 'col-md-2 control-label'
            )) !!}

            <div class="col-md-10">
                {!! Form::text('subtitle', $subtitle, array(
                    'id' => 'subtitle',
                    'class' => 'form-control'
                )) !!}
            </div>
        </div>

        <hr>

        <div class="form-group">
            {!! Form::label('limited_submission_deadline_date', 'Limited Submission Deadline Date', array(
                'class' => 'col-md-2 control-label'
            )) !!}

            <div class="col-md-4">
                {!! Form::text('limited_submission_deadline_date', $limited_submission_deadline_date, array(
                    'id' => 'limited_submission_deadline_date',
                    'class' => 'form-control'
                )) !!}
            </div>

            {!! Form::label('limited_submission_deadline_time', 'Limited Submission Deadline Date Time', array(
                'class' => 'col-md-2 control-label'
            )) !!}

            <div class="col-md-4">
                {!! Form::text('limited_submission_deadline_time', $limited_submission_deadline_time, array(
                    'id' => 'limited_submission_deadline_time',
                    'class' => 'form-control'
                )) !!}
            </div>
        </div>

        <hr>

        <div class="form-group">
            {!! Form::label('letter_of_intent_deadline_date', 'Letter of Intent Deadline Date', array(
                'class' => 'col-md-2 control-label'
            )) !!}

            <div class="col-md-4">
                {!! Form::text('letter_of_intent_deadline_date', $letter_of_intent_deadline_date, array(
                    'id' => 'letter_of_intent_deadline_date',
                    'class' => 'form-control'
                )) !!}
            </div>

            {!! Form::label('limited_submission_deadline_time', 'Letter of Intent Deadline Time', array(
                'class' => 'col-md-2 control-label'
            )) !!}

            <div class="col-md-4">
                {!! Form::text('letter_of_intent_deadline_time', $letter_of_intent_deadline_time, array(
                    'id' => 'letter_of_intent_deadline_time',
                    'class' => 'form-control'
                )) !!}
            </div>
        </div>

        <hr>

        <div class="form-group">
            {!! Form::label('maker', 'Maker', array(
                'class' => 'col-md-2 control-label'
            )) !!}

            <div class="col-md-10">
                {!! Form::text('maker', $maker, array(
                    'id' => 'maker',
                    'class' => 'form-control'
                )) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('maker_website', 'Maker Website', array(
                'class' => 'col-md-2 control-label'
            )) !!}

            <div class="col-md-10">
                {!! Form::text('maker_website', $maker_website, array(
                    'id' => 'maker_website',
                    'class' => 'form-control'
                )) !!}
            </div>
        </div>

        <hr>

        <div class="form-group">
            {!! Form::label('program', 'Program', array(
                'class' => 'col-md-2 control-label'
            )) !!}

            <div class="col-md-10">
                {!! Form::text('program', $program, array(
                    'id' => 'program',
                    'class' => 'form-control'
                )) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('program_website', 'Program', array(
                'class' => 'col-md-2 control-label'
            )) !!}

            <div class="col-md-10">
                {!! Form::text('program_website', $program_website, array(
                    'id' => 'program_website',
                    'class' => 'form-control'
                )) !!}
            </div>
        </div>

        <hr>

        <div class="form-group">
            {!! Form::label('maximum_award', 'Maximum Award', array(
                'class' => 'col-md-2 control-label'
            )) !!}

            <div class="col-md-10">
                <div class="input-group">
                    <div class="input-group-addon">$</div>
                    {!! Form::text('maximum_award', $maximum_award, array(
                        'id' => 'program_website',
                        'class' => 'form-control',
                        'rows' => '14'
                    )) !!}
                </div>
            </div>
        </div>

        <hr>

        <div class="form-group">
            {!! Form::label('description', 'Description', array(
                'class' => 'col-md-2 control-label'
            )) !!}

            <div class="col-md-10">
            {!! Form::textarea('description', $description, array(
                'id' => 'description',
                'class' => 'form-control',
                'rows' => '14'
            )) !!}
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('publish_date', 'Pub Date', array(
                'class' => 'col-md-3 control-label'
            )) !!}

            <div class="col-md-8">
                {!! Form::text('publish_date', $publish_date, array(
                    'id' => 'publish_date',
                    'class' => 'form-control'
                )) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('publish_time', 'Pub Time', array(
                'class' => 'col-md-3 control-label'
            )) !!}

            <div class="col-md-8">
                {!! Form::text('publish_time', $publish_time, array(
                    'id' => 'publish_time',
                    'class' => 'form-control'
                )) !!}
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8 col-md-offset-3">
                <div class="checkbox">

                    <div class="col-md-8">
                        {!! Form::checkbox('is_draft',1, checked($is_draft)) !!}

                        {!! Form::label('is_draft', 'Draft?') !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('tags', 'Tags', array('class' => 'col-md-3 control-label')) !!}

            <div class="col-md-8">
                {!! Form::select('tags[]', $allTags, $tags, [
                    'class' => 'form-control',
                    'id' => 'tags',
                    'multiple' => ''
                ]) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('layout', 'Layout', array('class' => 'col-md-3 control-label')) !!}

            <div class="col-md-8">
                {!! Form::text('layout', $layout, array(
                    'class' => 'form-control',
                    'id' => 'layout'
                )) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('meta_description', 'Meta', array('class' => 'col-md-3 control-label')) !!}

            <div class="col-md-8">
                {!! Form::textarea('meta_description', $meta_description, array(
                    'class' => 'form-control',
                    'id' => 'meta_description',
                    'rows' => '6'
                )) !!}
            </div>
        </div>
    </div>
</div>