<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <label for="title" class="col-md-2 control-label">
                Title
            </label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="title" autofocus
                       id="title" value="{{ $title }}">
            </div>
        </div>
        <div class="form-group">
            <label for="subtitle" class="col-md-2 control-label">
                Subtitle
            </label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="subtitle"
                       id="subtitle" value="{{ $subtitle }}">
            </div>
        </div>

        <hr>

        <div class="form-group">

            <label for="limited_submission_deadline_date" class="col-md-2 control-label">
                Limited Submission Deadline Date
            </label>
            <div class="col-md-4">
                <input type="text" class="form-control" name="limited_submission_deadline_date"
                       id="limited_submission_deadline_date" value="{{ $limited_submission_deadline_date }}">
            </div>

            <label for="limited_submission_deadline_time" class="col-md-2 control-label">
                Limited Submission Deadline Date Time
            </label>
            <div class="col-md-4">
                <input type="text" class="form-control" name="limited_submission_deadline_time"
                       id="limited_submission_deadline_time" value="{{ $limited_submission_deadline_time }}">
            </div>
        </div>

        <hr>

        <div class="form-group">

            <label for="letter_of_intent_deadline_date" class="col-md-2 control-label">
                Letter of Intent Deadline Date
            </label>
            <div class="col-md-4">
                <input type="text" class="form-control" name="letter_of_intent_deadline_date"
                       id="letter_of_intent_deadline_date" value="{{ $letter_of_intent_deadline_date }}">
            </div>

            <label for="limited_submission_deadline_time" class="col-md-2 control-label">
                Letter of Intent Deadline Date Time
            </label>
            <div class="col-md-4">
                <input type="text" class="form-control" name="letter_of_intent_deadline_time"
                       id="letter_of_intent_deadline_time" value="{{ $letter_of_intent_deadline_time }}">
            </div>
        </div>

        <hr>

        <div class="form-group">
            <label for="maker" class="col-md-2 control-label">
                Maker
            </label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="maker"
                       id="maker" value="{{ $maker }}">
            </div>

        </div>

        <div class="form-group">
            <label for="maker_website" class="col-md-2 control-label">
                Maker Website
            </label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="maker_website"
                       id="maker_website" value="{{ $maker_website }}">
            </div>

        </div>

        <hr>

        <div class="form-group">
            <label for="program" class="col-md-2 control-label">
                Program
            </label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="program"
                       id="program" value="{{ $program }}">
            </div>

        </div>

        <div class="form-group">
            <label for="program_website" class="col-md-2 control-label">
                Program Website
            </label>
            <div class="col-md-10">
                <input type="text" class="form-control" name="program_website"
                       id="program_website" value="{{ $program_website }}">
            </div>

        </div>

        <hr>


        <div class="form-group">
            <label for="maximum_award" class="col-md-2 control-label">
                Maximum Award
            </label>
            <div class="col-md-10">
                <div class="input-group">
                    <div class="input-group-addon">$</div>
                    <input class="form-control" name="maximum_award" rows="14"
                           id="maximum_award" value="{{ $maximum_award }}" />
                </div>
            </div>
        </div>

        <hr>

        <div class="form-group">
            <label for="description" class="col-md-2 control-label">
                Description
            </label>
            <div class="col-md-10">
        <textarea class="form-control" name="description" rows="14"
                  id="description">{{ $description }}</textarea>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="publish_date" class="col-md-3 control-label">
                Pub Date
            </label>
            <div class="col-md-8">
                <input class="form-control" name="publish_date" id="publish_date"
                       type="text" value="{{ $publish_date }}">
            </div>
        </div>
        <div class="form-group">
            <label for="publish_time" class="col-md-3 control-label">
                Pub Time
            </label>
            <div class="col-md-8">
                <input class="form-control" name="publish_time" id="publish_time"
                       type="text" value="{{ $publish_time }}">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-8 col-md-offset-3">
                <div class="checkbox">
                    <label>
                        <input {{ checked($is_draft) }} type="checkbox" name="is_draft">
                        Draft?
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="tags" class="col-md-3 control-label">
                Tags
            </label>
            <div class="col-md-8">
                <select name="tags[]" id="tags" class="form-control" multiple>
                    @foreach ($allTags as $tag)
                        <option @if (in_array($tag, $tags)) selected @endif
                        value="{{ $tag }}">
                            {{ $tag }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="layout" class="col-md-3 control-label">
                Layout
            </label>
            <div class="col-md-8">
                <input type="text" class="form-control" name="layout"
                       id="layout" value="{{ $layout }}">
            </div>
        </div>
        <div class="form-group">
            <label for="meta_description" class="col-md-3 control-label">
                Meta
            </label>
            <div class="col-md-8">
        <textarea class="form-control" name="meta_description"
                  id="meta_description"
                  rows="6">{{ $meta_description }}</textarea>
            </div>
        </div>

    </div>
</div>