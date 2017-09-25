<div class="form-group">
    {!! Form::label('title', 'Title:', ['class' => 'control-label'])  !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}

    @if ($errors->has('title'))
        <span class="help-block">
            <strong>{{ $errors->first('title') }}</strong>
        </span>
    @endif

</div>

<div class="form-group">
    {!! Form::label('article', 'Article:', ['class' => 'control-label'])  !!}
    {!! Form::textarea('article', null, ['class' => 'form-control']) !!}

    @if ($errors->has('article'))
        <span class="help-block">
            <strong>{{ $errors->first('article') }}</strong>
        </span>
    @endif

</div>

<input type="hidden" name="img" />




